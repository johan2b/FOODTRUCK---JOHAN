---
name: seo-content
description: Planificar, redactar o revisar contenido y HTML editorial de las páginas es/eu de este stack, con intención por URL, prevención de canibalización, jerarquía H1/H2/H3, metadatos e imágenes y enlaces descriptivos.
---

# Contenido y estructura SEO del stack

## Alcance y datos

Aplicar al crear páginas de contenido, organizar sus secciones o redactar/revisar copy, encabezados y metadatos. Consultar `stack-resources` para construir un componente y `stack-workflow` para rutas y entradas. No aplicar una auditoría de publicación completa a una tarea de estilos o infraestructura que conserve deliberadamente lorem ipsum.

Esta base es un ejercicio sin cliente real. No inventar servicios, ubicaciones, direcciones, teléfonos, correos, certificaciones, cifras, fechas ni claims. En un proyecto de cliente, leer primero sus datos confirmados y los comentarios de extensión de vistas/controladores. Si falta un dato imprescindible, pedirlo; seguir con las partes independientes y mantener el resto como pendiente. No usar contenidos de otro proyecto como datos del actual.

## Finalidad y terminología por página

Antes de redactar una web real, dejar una matriz por URL e idioma con:

| Campo | Qué define |
| --- | --- |
| Finalidad | Qué necesidad resuelve la página y qué acción permite realizar |
| Intención de búsqueda | Informativa, comercial, transaccional o de marca según el caso |
| Terminología principal | Tema o grupo de búsquedas que corresponde a esa URL |
| Vectores | Servicio/producto, atributos, finalidad/aplicación/sector y localidad si procede |
| Alcance | Qué desarrolla esta página y qué delega a otra URL mediante un enlace |
| Páginas relacionadas | Posibles solapamientos y URL que concentra el desarrollo específico |

Una URL debe tener una finalidad principal reconocible. No orientar inicio, catálogo y ficha de servicio a la misma intención con copias de title, H1 y cuerpo. Inicio presenta la propuesta general; servicios permite descubrir/comparar; cada ficha desarrolla su servicio; quiénes somos presenta al equipo; contacto facilita el contacto. Adaptar el reparto al encargo real.

Mencionar un servicio en varias páginas es normal. Evitar canibalización diferenciando intención, profundidad y enlaces, no prohibiendo vocabulario compartido. Enlazar desde el resumen a la ficha específica, sin reproducir toda la ficha en inicio y servicios. No crear páginas casi idénticas cambiando solo el municipio o la palabra clave.

Usar topónimos solo con cobertura confirmada. Como orientación editorial, concentrar el foco geográfico en hasta tres topónimos relevantes, sin enumerar territorios artificialmente. Compartir una localidad entre inicio y una ficha no demuestra por sí solo canibalización. No forzar provincias o localidades en búsquedas sin intención local.

## Jerarquía HTML del proyecto

Convención didáctica para páginas nuevas y bloques editoriales modificados; no obliga a refactorizar todo el HTML antiguo como parte de otra tarea.

- Un solo `main` visible y un H1 principal por página. El H1 puede estar en la cabecera principal, como en las vistas actuales.
- Dentro de `main`, separar los temas en `section`. Cada sección temática tiene su H2, preferiblemente asociado mediante `aria-labelledby` y un ID único.
- Dentro de cada sección, usar tantos `article` como unidades de información con sentido propio necesite el tema. Cada artículo tiene su H3; sus subapartados usan H4 cuando se necesiten.
- Puede haber párrafos introductorios directamente bajo el H2. No convertir cada párrafo, botón, imagen o envoltorio visual en artículo o sección: para agrupar diseño, usar `div`.
- Los módulos menores respetan su contexto y no crean encabezados por estética. Un artículo no vuelve a empezar en H1 por estar dentro de otra etiqueta.
- No saltar de H2 a H4 ni elegir el rango por su tamaño. Ajustar CSS y revisar selectores dependientes de `h2`/`h3` al adaptar un recurso.
- Los H2 de navegación y pie pertenecen a sus regiones; no confundirlos con secciones del contenido principal.

```html
<header class="header01">
  <h1>Servicio principal de esta página</h1>
</header>
<main>
  <section aria-labelledby="alcance-title">
    <h2 id="alcance-title">Qué incluye el servicio</h2>
    <article aria-labelledby="prestacion-uno-title">
      <h3 id="prestacion-uno-title">Primera prestación</h3>
      <p>Información concreta sobre esta prestación.</p>
    </article>
    <article aria-labelledby="prestacion-dos-title">
      <h3 id="prestacion-dos-title">Segunda prestación</h3>
      <p>Información diferente que amplía la misma sección.</p>
    </article>
  </section>
  <section aria-labelledby="proceso-title">
    <h2 id="proceso-title">Cómo trabajamos</h2>
    <article aria-labelledby="fase-uno-title">
      <h3 id="fase-uno-title">Preparación del trabajo</h3>
      <p>Información de la fase.</p>
    </article>
  </section>
</main>
```

## Escalado de una terminología entre páginas

Ejemplo didáctico «Diseño web», sin convertirlo en un servicio confirmado de esta base:

| Página | Contexto | Encabezado del servicio |
| --- | --- | --- |
| Inicio | H1 general → H2 Servicios → artículo de resumen | H3 Diseño web |
| Servicios | H1 del conjunto → sección del servicio | H2 Diseño web; artículos con H3 para prestaciones o diferencias |
| Ficha específica | El servicio es el tema central | H1 Diseño web; H2 para sus temas y H3 para sus artículos |

El escalado refleja la importancia contextual y la profundidad de cada URL. No garantiza posicionamiento ni justifica repetir el mismo texto. Cada documento debe tener su propia jerarquía válida.

## Metadatos y atributos

Rangos editoriales del curso para páginas reales, contando espacios y signos. Si el rango perjudica claridad o naturalidad, explicar la excepción; no rellenar con palabras vacías. Las páginas técnicas 404, el showroom y los placeholders de la base no se evalúan como copy de publicación.

| Elemento | Criterio de trabajo |
| --- | --- |
| `title` | Único por URL/idioma; mínimo orientativo de 50 y máximo de 65 caracteres. Tema principal y marca cuando aporte contexto |
| `meta description` | Única; mínimo orientativo de 140 y máximo de 160 caracteres. Valor, finalidad e invitación pertinente |
| H1 | Único, legible y coherente con title e intención; sin longitud mínima artificial |
| Canonical | URL absoluta de la propia versión indexable; revisar dominio, HTTPS y subcarpeta |
| Hreflang | Alternativas es/eu recíprocas de la misma página; `x-default` coherente con el idioma por defecto |
| Open Graph/Twitter | Título, descripción, URL e imagen correspondientes a la página; imagen pública y existente |
| `html lang` | `es` o `eu` según la vista |

Google no fija estos mínimos de caracteres y puede truncar o generar sus textos según la presentación y la búsqueda. Son criterios editoriales locales, no requisitos del buscador ni garantías de visibilidad.

- Todas las imágenes llevan `alt`. En imágenes informativas, describir lo mostrado y su función en el idioma de la vista; no usar el nombre del archivo ni keywords ajenas a la imagen. Decorativos e iconos redundantes: `alt=""` y, si procede, `aria-hidden="true"`.
- Cumplimentar `title` descriptivo en las imágenes informativas y los enlaces según la convención del curso. No usar «imagen», «clic aquí» o «Lorem ipsum» en una web real. Los decorativos no necesitan title significativo.
- `title` no sustituye a `alt`, al texto visible del enlace o al nombre accesible del control. No poner información necesaria solo en un tooltip.
- Texto del enlace y `title` describen destino/acción sin acumular keywords. No dejar `href="#"` como destino en producción.
- Mantener dimensiones reales, formatos apropiados y carga diferida en imágenes secundarias; no diferir la imagen principal.

## Redacción y multidioma

Satisfacer la intención con contenido útil y datos comprobados. Usar variantes semánticas naturales, párrafos claros y listas/tablas cuando ayuden. No imponer densidades de keywords ni repetir términos, topónimos o negritas mecánicamente. No crear páginas de relleno, texto oculto ni datos estructurados engañosos.

Mantener equivalencia semántica es/eu adaptando vocabulario y búsquedas a cada idioma. Revisar metas y atributos de ambas versiones; no dejar títulos españoles en la vista vasca. Una traducción equivalente no es por sí misma canibalización entre páginas del mismo idioma.

## Revisión

Comprobar finalidad por URL, diferenciación, datos confirmados, secuencia H1/H2/H3, IDs/referencias, extensión de metadatos, imágenes y enlaces. Revisar el HTML servido por PHP y ambos idiomas; no afirmar una auditoría del DOM mirando solo una vista fuente.

Para publicar una web real, sustituir lorem ipsum y Matrix, configurar dominio/canonical/hreflang/sitemap y revisar robots/noindex. La base bloquea rastreo mediante `robots.txt`: eso no equivale a autenticación ni garantiza desindexación. No abrir indexación como parte de una tarea de contenido ordinaria.

## Procedencia y referencias

Se conserva de las skills SEO de otros proyectos formativos la matriz de vectores, los datos confirmados, la adaptación multidioma y la prevención de sobreoptimización. Las reglas de estructura y escalado responden a las instrucciones específicas de este stack.

- [Google: títulos en resultados](https://developers.google.com/search/docs/appearance/title-link).
- [Google: descripciones y snippets](https://developers.google.com/search/docs/appearance/snippet).
- [Google: imágenes y ALT](https://developers.google.com/search/docs/appearance/google-images).
- [MDN: encabezados HTML](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/Heading_Elements).
