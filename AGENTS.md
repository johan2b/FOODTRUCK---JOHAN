# Instrucciones del stack de formación

Este repositorio enseña HTML, SCSS, JavaScript y PHP con vistas y rutas explícitas. Mantener su sencillez: no introducir frameworks, componentes generados, capas MVC adicionales ni refactorizaciones generales sin que la tarea lo pida.

## Skills del proyecto

Leer la skill aplicable antes de realizar el trabajo:

- Nuevos recursos, componentes o variantes del catálogo: [.codex/skills/stack-resources/SKILL.md](.codex/skills/stack-resources/SKILL.md).
- Crear páginas, modificar rutas, formularios, entradas Vite, entorno o distribución pública/privada: [.codex/skills/stack-workflow/SKILL.md](.codex/skills/stack-workflow/SKILL.md).
- Redactar contenido, organizar HTML editorial, metadatos o arquitectura de búsquedas: [.codex/skills/seo-content/SKILL.md](.codex/skills/seo-content/SKILL.md).
- Configurar un despliegue automatizado solicitado: [.codex/skills/github-action-config/SKILL.md](.codex/skills/github-action-config/SKILL.md). Las instrucciones concretas de este stack y su README prevalecen sobre ejemplos genéricos de esa skill.

Las skills se complementan: crear un recurso con texto requiere revisar también su jerarquía HTML; crear una página requiere revisar el flujo y el SEO. No aplicar una skill ajena a la tarea solo por estar disponible.

## Reglas comunes

- Indentar el código con 4 espacios por nivel, sin tabuladores, de acuerdo con `.editorconfig`. Mantener este criterio también en las vistas PHP con HTML y en los nuevos recursos.

- El HTML de un recurso nuevo se muestra primero en `App/views/showroom.php`. Su SCSS se importa desde `src/assets/scss/showroom.scss`; si necesita comportamiento, su JS se importa e inicializa desde `src/assets/js/showroom.js`.
- Un recurso no es una nueva ruta ni una nueva entrada de Vite. Las entradas son por vista.
- En páginas de contenido: un H1 principal; dentro de `main`, secciones temáticas con H2 y artículos dentro de ellas con H3. Los módulos menores heredan el contexto y no introducen encabezados por estética. No cambiar el rango de un encabezado para ajustar su aspecto.
- Conservar `es` y `eu`. Las rutas equivalentes deben ocupar la misma posición en `App/config/config.php`, porque el selector de idioma utiliza esa posición.
- Usar los helpers existentes para URLs, assets, rutas de archivos y escape de datos. No copiar credenciales, datos de clientes o URLs de otros ejercicios.
- La base conserva lorem ipsum y Matrix hasta que se solicite contenido real. Las reglas SEO de publicación no obligan a inventar un cliente ni a sustituir los placeholders durante tareas de infraestructura.
- `.env` es privado. Crear ejemplos con datos ficticios, sin sobrescribir la configuración local del usuario.
- Consultar `Readme.md` para comandos, entorno, estructura de producción y limitaciones conocidas. No desplegar ni enviar correos como parte de una comprobación documental.

## Verificación proporcional

Para recursos o entradas, ejecutar `npm run build`. Si se cambia PHP, comprobar sintaxis y la ruta afectada. Revisar el catálogo y una vista consumidora, con más de una instancia si el recurso es reutilizable. Para documentación o skills, contrastar rutas y ejemplos con el código y validar las skills; no añadir suites que solo comprueben frases del documento.
