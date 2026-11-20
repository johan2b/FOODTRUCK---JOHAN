---
name: stack-resources
description: Crear o modificar recursos HTML, SCSS y JavaScript del catálogo showroom de este stack formativo Vite y PHP, respetando su patrón de archivos y la jerarquía de módulos, artículos y secciones.
---

# Recursos del catálogo

## Antes de crear

Leer `AGENTS.md`, el recurso parecido en `App/views/showroom.php` y sus archivos en `src/assets/scss/resources/` y `src/assets/js/resources/`. Consultar `seo-content` para jerarquía y contenido editorial y `stack-workflow` al incorporar el recurso a una página.

Elegir un nombre libre acorde con el catálogo: `art17`, `sect03`, `moduloAviso01`, etc. No renumerar ni reescribir recursos existentes. El nombre de la clase, el parcial SCSS y el módulo JS deben identificar el mismo recurso, respetando mayúsculas y minúsculas; producción puede usar Linux.

## Entrega de un recurso

1. Añadir su HTML a `App/views/showroom.php` como ejemplo visible, con un rótulo que permita localizarlo y con contenido ficticio. Mantener todos los recursos previos del catálogo.
2. Crear `src/assets/scss/resources/_nombre.scss` y añadir `@use "./resources/nombre";` a `src/assets/scss/showroom.scss`. Usar `@use "config" as c;` dentro del parcial cuando necesite variables del stack.
3. Solo si necesita interacción, crear `src/assets/js/resources/_nombre.js`, exportar la inicialización e importarla desde `src/assets/js/showroom.js`. Llamarla dentro del `DOMContentLoaded` existente, sin registrar un arranque global nuevo por cada recurso.
4. No añadir una entrada en `vite.config.js` para el recurso ni enlazar directamente el parcial desde PHP. La entrada `showroom.js` ya importa `showroom.scss`.
5. Al utilizarlo en otra página, copiar/adaptar su HTML en la vista PHP e importar el parcial desde el SCSS de esa vista. Importar y ejecutar también su JS desde la entrada de la vista si lo requiere. El showroom no carga los recursos de las demás páginas por ellas.

No crear un JS vacío si basta con HTML/CSS. Los módulos antiguos con efectos al importar pueden mantenerse; los nuevos deben permitir inicialización explícita y localizada.

## Elegir el nivel HTML

| Recurso | Marcado habitual | Encabezado en la página |
| --- | --- | --- |
| Módulo pequeño, botón, aviso o grupo de controles | `div`, `p`, `button`, lista u otro elemento apropiado | Sin encabezado nuevo si no introduce un tema |
| Artículo con información propia dentro de una sección | `article` dentro de `section` | H3, bajo el H2 de esa sección |
| Sección temática completa | `section` | H2 y, si contiene artículos, H3 en cada uno |
| Cabecera de página | `header` | H1 solo al ser la cabecera principal; las variantes del catálogo no crean más H1 |

El prefijo de la clase describe un recurso, pero no reemplaza la elección semántica. No usar `section` o `article` solo para tener un contenedor de estilos. Un módulo puede vivir dentro de un artículo sin convertirse en otro artículo. Los contenedores puramente visuales son `div`.

El showroom es un único documento con un solo H1. Leer sus encabezados antes de insertar HTML. Si el bloque se añade a una categoría ya titulada con H2, usar H3 para el ejemplo y H4 para sus subapartados; no saltar niveles ni introducir un H2 dentro de ese ejemplo. Si se cataloga una sección completa que necesita H2, ubicarla como sección hermana en el nivel adecuado, sin incrustarla bajo el H2 de otra categoría. No corregir todo el catálogo antiguo como efecto secundario: señalar las incoherencias ajenas al recurso nuevo.

Al llevar un recurso a una página, adaptar los encabezados al destino y comprobar los selectores SCSS dependientes de etiquetas, como `> h2`. Preferir clases del propio recurso para que un cambio semántico H2/H3 no rompa su presentación; limitar cualquier ajuste al recurso afectado.

Ejemplo de un artículo dentro de una sección del catálogo:

```html
<section aria-labelledby="showroom-art17-title">
  <h2 id="showroom-art17-title">Recurso art17</h2>
  <article class="art17" aria-labelledby="art17-ejemplo-title">
    <h3 id="art17-ejemplo-title" class="art17__title">Lorem ipsum dolor sit amet</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <button class="art17__toggle" type="button" aria-expanded="false"
      aria-controls="art17-ejemplo-panel">Mostrar detalle</button>
    <div id="art17-ejemplo-panel" class="art17__panel" hidden>
      <p>Lorem ipsum dolor sit amet.</p>
    </div>
  </article>
</section>
```

## SCSS y comportamiento

- Mantener estilos dentro de la clase raíz del recurso. No cambiar `h2`, `button`, `img` o `article` globalmente para resolver un componente.
- Reutilizar colores, espaciados y breakpoints de `_config.scss` y el patrón responsive existente. Evitar estilos inline para el diseño normal.
- Usar elementos interactivos nativos, foco visible y etiquetas accesibles. Un enlace navega; un botón ejecuta una acción.
- El JS debe tolerar páginas sin el recurso y trabajar con cada instancia desde su elemento raíz. Evitar IDs fijos reutilizados, selectores globales que solo activen la primera instancia y variables globales.
- Mantener coherencia entre el estado visible y `hidden`, `aria-expanded` o `aria-selected` cuando corresponda. Los paneles y controles deben tener IDs únicos por instancia.
- Si la inicialización puede repetirse, impedir listeners duplicados. No añadir un framework o librería por una interacción que ya resuelve el patrón del stack.

Esquema de inicialización opcional:

```js
export function art17(root = document) {
  root.querySelectorAll('.art17').forEach((item) => {
    const button = item.querySelector('.art17__toggle');
    const panel = item.querySelector('.art17__panel');
    if (!button || !panel || item.dataset.art17Ready) return;
    item.dataset.art17Ready = 'true';
    button.addEventListener('click', () => {
      const expanded = button.getAttribute('aria-expanded') === 'true';
      button.setAttribute('aria-expanded', String(!expanded));
      panel.hidden = expanded;
    });
  });
}
```

En `showroom.js`: `import { art17 } from "./resources/_art17.js";` y `art17();` dentro del arranque existente. Si el control cambia su texto, prepararlo para el idioma de la vista.

## Comprobación

Ejecutar `npm run build`, abrir `/showroom` desde PHP y comprobar escritorio, móvil y teclado. Revisar la secuencia de encabezados, IDs, nombres accesibles, consola y carga de recursos. Para JS reutilizable, comprobar dos instancias y una página sin el recurso. Si no hay navegador disponible, indicar el límite y verificar al menos compilación y HTML servido; no afirmar una revisión visual inexistente.
