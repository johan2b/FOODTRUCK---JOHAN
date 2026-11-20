---
name: stack-workflow
description: Trabajar con las vistas, rutas es/eu, entradas Vite, helpers PHP, formularios y configuración de desarrollo y producción de este stack formativo, manteniendo su estructura sencilla.
---

# Manejo del stack Vite y PHP

## Estructura que se conserva

Leer `Readme.md` y los archivos afectados antes de modificar el flujo. `public/index.php` es el front controller: carga Composer, dotenv, helpers y la configuración, resuelve idioma y ruta y requiere una vista. No existe un generador de páginas ni una SPA. Los controladores POST están en `App/app/`; las vistas están en `App/views/` y los includes en `App/includes/`.

Mantener las rutas declaradas de forma explícita, el HTML comprensible y los archivos de entrada por vista. No introducir un router nuevo, un motor de plantillas, un contenedor de dependencias ni capas de LiquidStack como parte de un cambio ordinario.

## Crear o ampliar una página

1. Crear o adaptar `App/views/es/nombre.php` y `App/views/eu/nombre.php`. Mantener el documento HTML, el idioma, los metadatos, `vite_tags($route['resources'] ?? null)` y los includes del idioma correspondiente.
2. Crear `src/assets/scss/nombre.scss` con `@use` de los recursos necesarios y `src/assets/js/nombre.js` que importe ese SCSS y `./resources/_global.js`. Añadir solo el JS que use esa vista.
3. Declarar la entrada en `build.rollupOptions.input` de `vite.config.js`. La misma entrada sirve para es/eu cuando comparten comportamiento y estilos.
4. Dar de alta las rutas en `App/config/config.php` con su `view` y su `resources`. Las dos listas de idioma deben conservar el mismo orden semántico: `rutas_homologas()` busca equivalencias por posición.
5. Actualizar la navegación y los enlaces contextuales en ambos idiomas; revisar canonical y hreflang. Solo cuando se prepare una web real, actualizar el sitemap con su dominio y las rutas indexables.
6. Usar `seo-content` para la finalidad de la página y `stack-resources` si se crean nuevos recursos reutilizables. Los nuevos recursos se catalogan primero en showroom.

No crear una entrada Vite por idioma o por componente si no existe esa necesidad. Los estilos y el JS del showroom no se heredan en las demás vistas.

## Helpers y datos

- `app_path()` y `root_path()` para archivos internos; no usar rutas de Windows ni rutas relativas dependientes del directorio de trabajo.
- `url()` para enlaces HTML de la aplicación y `asset()` para imágenes/iconos. Estos dos helpers ya escapan su resultado: no volver a aplicar `e()` sobre ellos.
- `e()` para datos variables en HTML. `app_url()` devuelve una URL sin escapar: usar `e(app_url(...))` en atributos HTML.
- `ruta_homologa()` para el selector de idioma; no sustituirlo por un enlace fijo al inicio del otro idioma.
- `env()` para configuración PHP. No enviar secretos a `VITE_*`: cualquier valor usado en el bundle cliente puede terminar publicado.
- Respetar las mayúsculas exactas de directorios (`App`) y archivos. Comprobar ambos idiomas, no solo el castellano.

## Formularios

Registrar los endpoints en `post_routes`; no crear un script público que eluda el front controller. El formulario usa POST a `app_url('/app/artForm02')`; su JS importa `_artForm02.js`, y el controlador valida antes de usar PHPMailer y devuelve JSON. Mantener nombres de campos, IDs y contrato de respuesta si se reutiliza ese ejercicio.

Validar también en PHP y escapar las variables insertadas en el correo. No añadir salidas de depuración al controlador que rompan el JSON. Comprobar rutas inválidas y validación sin enviar correo. Un envío real solo se prueba cuando forma parte de la petición autorizada.

El ejercicio actual compara el captcha con un valor remitido por el cliente y no incluye protección completa frente a abuso. No describirlo como un captcha de servidor ni como un formulario listo para uso público sin revisar. `MAIL_ENABLED=false` evita enviar, pero devuelve fallo de envío al pasar la validación; no simula una entrega correcta. El remitente SMTP y el puerto 465/SMTPS se configuran actualmente en el código del mailer; no documentar variables `SMTP_PORT` o `SMTP_ENCRYPTION` como si ya se leyeran.

## Entorno y build

- `.env.example` documenta valores ficticios. No sobrescribir `.env` al actualizar el ejemplo ni imprimir sus credenciales.
- `npm run dev` arranca PHP en `localhost:3000` con raíz `public/`, y Vite en `localhost:5173`. Abrir la web desde el 3000.
- `scripts/dev.mjs` fija `APP_ENV=development`, `RUTA=http://localhost:5173` y `LANG_DEFAULT=es` salvo variables ya exportadas en el proceso. Sus valores prevalecen sobre `.env` porque `env()` consulta primero `getenv()`.
- `npm run build` limpia `dist/`, copia los archivos de `public/` y genera bundles y `.vite/manifest.json`. No copia `App/`, `vendor/` ni `.env`.
- `npm run preview` recompila y sirve `dist/` con PHP en `localhost:4173`; fija `APP_ENV=preview`. No es un servidor de producción.
- En cualquier entorno distinto de `development`, `vite_tags()` necesita el manifest en la raíz pública y `RUTA` con la URL pública del sitio, sin `/dist` ni el puerto de Vite.
- `RUTA` tiene dos usos: origen de assets y path de montaje. En producción en subcarpeta, incluir ese path, por ejemplo `https://example.com/curso`. `app_url()` construye el host y esquema desde la petición; un proxy debe transmitir la configuración correcta de HTTPS/host.

## Distribución pública y privada

El contenido de `dist/` se publica en la carpeta pública del hosting (`public`, `www`, `public_html`, etc.). En la carpeta inmediatamente superior deben estar `App/`, `vendor/` y `.env`, porque `index.php` usa `dirname(__DIR__)`. Conservar `.htaccess` y `.vite/manifest.json`, aunque sean archivos/carpetas ocultos.

No publicar la raíz del repositorio. No subir `src/`, `node_modules/`, `.git/`, `.codex/`, `.agents/` o scripts de desarrollo al document root. Instalar las dependencias PHP desde `composer.lock` en el servidor o incluir un `vendor/` generado para una plataforma compatible. Los detalles y ejemplos de Apache/Nginx están en `Readme.md`.

Solo aplicar la skill de GitHub Actions si se solicita configurar el despliegue automático. Una tarea documental no requiere SSH, credenciales remotas ni desplegar.

## Verificar

Para cambios de código: `npm run build`, sintaxis PHP y respuesta HTTP de las rutas afectadas; comprobar recursos del manifest, es/eu, selector de idioma, 404 y 405 cuando corresponda. No enviar correos por defecto. Para documentación, contrastar los comandos y la distribución descrita con los scripts reales. Informar de limitaciones conocidas sin ampliar el alcance de la tarea.
