"""Genera documentacion-rediseno-western.pdf a partir de documento.html.

Uso (desde la raíz del proyecto):
    python3 -I docs/rediseno-western/fuente/generar_pdf.py

Marcadores que expande en documento.html:
    {{img:nombre|ancho_px|pie de foto}}  -> todos los trozos de img/pdf/nombre-N.jpg
    {{codigo:ruta/relativa/a/la/raiz}}    -> contenido del archivo escapado en <pre>

Requiere LibreOffice (soffice) para la conversión a PDF.
"""
import html
import json
import re
import shutil
import subprocess
import sys
from pathlib import Path

fuente = Path(__file__).resolve().parent
carpeta = fuente.parent
raiz = carpeta.parent.parent
img = carpeta / "img"
manifest = json.loads((img / "pdf" / "manifest.json").read_text(encoding="utf-8"))


def imagen(m):
    nombre, ancho, pie = m.group(1), int(m.group(2)), m.group(3)
    if nombre not in manifest:
        sys.exit(f"Imagen no encontrada: {nombre}")
    partes = manifest[nombre]
    bloques = []
    for i, (ruta, w, h) in enumerate(partes):
        alto = round(h * ancho / w)
        bloques.append(f'<p class="img"><img src="../img/{ruta}" width="{ancho}" height="{alto}" alt="{html.escape(pie)}"></p>')
    sufijo = f" ({len(partes)} partes)" if len(partes) > 1 else ""
    bloques.append(f'<p class="pie">{html.escape(pie)}{sufijo} · <i>{nombre}.png</i></p>')
    return "\n".join(bloques)


def codigo(m):
    ruta = raiz / m.group(1)
    return f'<pre>{html.escape(ruta.read_text(encoding="utf-8"))}</pre>'


texto = (fuente / "documento.html").read_text(encoding="utf-8")
texto = re.sub(r"\{\{img:([^|}]+)\|(\d+)\|([^}]*)\}\}", imagen, texto)
texto = re.sub(r"\{\{codigo:([^}]+)\}\}", codigo, texto)

salida = fuente / "documento-generado.html"
salida.write_text(texto, encoding="utf-8")

temporal = fuente / "pdf-temp"
temporal.mkdir(exist_ok=True)
subprocess.run(
    [
        "soffice",
        "--headless",
        "--infilter=HTML (StarWriter)",
        "--convert-to",
        'pdf:writer_pdf_Export:{"ExportBookmarks":{"type":"boolean","value":"true"}}',
        "--outdir",
        str(temporal),
        str(salida),
    ],
    check=True,
)
destino = carpeta / "documentacion-rediseno-western.pdf"
shutil.move(str(temporal / "documento-generado.pdf"), destino)
temporal.rmdir()
print("PDF generado:", destino)
