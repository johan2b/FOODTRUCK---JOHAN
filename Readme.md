# Stack de formación: HTML, SCSS, JavaScript y PHP

Base para aprender a construir una web con vistas PHP, recursos reutilizables y assets compilados por Vite. Mantiene un flujo MVC sencillo: un punto de entrada, configuración de rutas, vistas y controladores de formulario. No incorpora la complejidad de LiquidStack ni una SPA.

La plantilla contiene lorem ipsum e imágenes locales de Matrix. No representa a un cliente real. Las reglas de SEO de publicación se aplican cuando se prepara contenido real.

## Contenido de esta guía

- [Instalación y desarrollo](#instalación-y-desarrollo)
- [Build y preview](#build-y-preview)
- [Estructura y flujo](#estructura-y-flujo)
- [Crear recursos y páginas](#crear-recursos-y-páginas)
- [HTML y SEO](#html-y-seo)
- [Configuración de entorno](#configuración-de-entorno)
- [Qué subir a producción y dónde](#qué-subir-a-producción-y-dónde)
- [Problemas habituales y límites](#problemas-habituales-y-límites)
- [Skills y documentación](#skills-y-documentación)

## Instalación y desarrollo

### Requisitos

- Node.js y npm. La versión instalada de Vite declara compatibilidad con Node `^20.19.0 || >=22.12.0`. Usar una versión mantenida que cumpla ese requisito; `package-lock.json` fija las dependencias del ejercicio.
- PHP 8 o superior por las funciones que utiliza el proyecto, con las extensiones exigidas por Composer. El formulario usa `mb_strlen`; SMTP cifrado necesita OpenSSL. Comprobar también los requisitos del PHP del hosting.
- Composer para instalar las dependencias PHP de `composer.lock`.
- Un servidor con PHP para producción. Vite y Node se utilizan para desarrollar y compilar; no tienen que estar ejecutándose en el hosting una vez desplegado.

Abrir una terminal en la raíz, donde están `package.json` y `composer.json`:

```powershell
node --version
npm --version
php --version
composer --version
npm ci
composer install
```

Preparar el entorno solo si todavía no existe `.env`:

```powershell
if (-not (Test-Path .env)) { Copy-Item .env.example .env }
```

Editar `.env` con los datos del ejercicio. No copiar credenciales de otro cliente. El ejemplo desactiva el envío de correo mediante `MAIL_ENABLED=false` y deja CookieLad sin clave.

### Arrancar la web

```powershell
npm run dev
```

Mantener esa terminal abierta. El comando arranca dos procesos:

| Servicio | Dirección | Función |
| --- | --- | --- |
| PHP | `http://localhost:3000` | Resuelve rutas y sirve el HTML de las vistas |
| Vite | `http://localhost:5173` | Sirve JS/SCSS durante el desarrollo y actualiza los assets |

**Abrir la web desde PHP:** [inicio es](http://localhost:3000/es), [inicio eu](http://localhost:3000/eu) y [showroom](http://localhost:3000/showroom). El puerto 5173 es el servidor de assets; no es la entrada a las páginas PHP. Detener con `Ctrl+C`.

### Rutas de la base

| Vista | Castellano | Euskera |
| --- | --- | --- |
| `inicio.php` | `/es` | `/eu` |
| `quienessomos.php` | `/es/quienessomos` | `/eu/quienessomos` |
| `contacto.php` | `/es/contacto` | `/eu/contacto` |
| `servicios.php` | `/es/nuestras-hamburguesas` | `/eu/gure-hanburgesak` |
| `servicio1.php` | `/es/servicio1` | `/eu/servicio1` |
| `servicio2.php` | `/es/servicio2` | `/eu/servicio2` |

La raíz `/` redirige al idioma por defecto. Además están `/showroom`, la vista técnica `404.php` en cada idioma y el endpoint POST `/app/artForm02`.

## Build y preview

### Generar los archivos públicos

```powershell
npm run build
```

Este comando elimina y regenera `dist/`. No guardar trabajo manual dentro de esa carpeta. Vite copia el contenido de `public/` y añade los bundles JS/CSS con hash, las fuentes procesadas y `.vite/manifest.json`.

El resultado incluye `index.php`, `.htaccess`, imágenes, iconos, robots y sitemap. **El build no copia `App/`, `vendor/` ni `.env`: `dist/` por sí solo no es una aplicación PHP completa.** No genera HTML estático de las vistas.

### Probar el build localmente

```powershell
npm run preview
```

Primero vuelve a ejecutar el build y después sirve `dist/` con PHP en [http://localhost:4173/es](http://localhost:4173/es). Usa `APP_ENV=preview`, por lo que `vite_tags()` lee el manifest, en lugar de pedir los módulos fuente a Vite. Mantiene acceso al `App/`, `vendor/` y `.env` de la raíz del proyecto.

Para servir un build ya generado sin recompilar: `node scripts/preview.mjs`. Preview es una comprobación local, no el servidor de producción. Detener con `Ctrl+C`.

## Estructura y flujo

```text
raíz del proyecto/
├── App/
│   ├── config/             Rutas, configuración y helpers
│   ├── views/
│   │   ├── es/             Vistas castellanas
│   │   ├── eu/             Vistas vascas
│   │   └── showroom.php    Catálogo de recursos
│   ├── includes/           Navegación, pie y CookieLad
│   └── app/                Controladores POST y plantilla de correo
├── public/                 Fuente de archivos públicos; raíz de PHP en dev
│   ├── index.php           Front controller
│   ├── .htaccess           Reescritura Apache
│   └── assets/img/         Imágenes e iconos públicos
├── src/assets/
│   ├── scss/               Un SCSS por vista y parciales resources/
│   ├── js/                 Una entrada por vista y módulos resources/
│   └── fonts/              Fuentes procesadas por Vite
├── scripts/                Arranque dev/preview y limpieza de dist
├── vendor/                 Dependencias de Composer, privadas
├── node_modules/           Dependencias de desarrollo, locales
├── dist/                   Resultado público del build
├── .env                    Configuración privada del entorno
├── .env.example            Plantilla de configuración sin secretos
├── vite.config.js          Entradas JS y opciones de compilación
└── package.json            Comandos npm
```

El recorrido de una página es:

1. El navegador pide una URL al servidor PHP.
2. `public/index.php` carga Composer, dotenv y `App/config/helpers.php`; después consulta `App/config/config.php`.
3. La ruta selecciona idioma, archivo de vista y entrada JS. Una ruta desconocida utiliza la vista 404 y devuelve estado 404.
4. La vista incorpora navegación y pie de su idioma y llama a `vite_tags($route['resources'] ?? null)`.
5. En desarrollo, ese helper emite los scripts de Vite; en preview/producción utiliza `.vite/manifest.json` para localizar JS y CSS compilados.
6. La entrada JS de la vista importa su SCSS y los módulos que necesita.

Los formularios siguen otro camino: el front controller admite las rutas declaradas en `post_routes`, el controlador valida los datos, prepara los correos con PHPMailer y devuelve JSON. El módulo del formulario muestra errores o confirmación. Abrir el endpoint con GET devuelve 405; no es una vista.

### Helpers que conviene utilizar

| Helper | Uso |
| --- | --- |
| `app_path('views/...')` | Ruta de un archivo privado bajo `App/` |
| `root_path('...')` | Ruta de archivo desde la raíz del proyecto |
| `url('/es/servicios')` | URL de enlace HTML; ya escapada |
| `asset('assets/img/views/matrix-1.webp')` | URL de asset público; ya escapada |
| `e($dato)` | Escape de datos variables para HTML |
| `app_url('/app/artForm02')` | URL sin escapar; en HTML usar `e(app_url(...))` |
| `ruta_homologa($url, 'eu')` | Ruta equivalente en el idioma destino |
| `env('CLAVE', 'valor')` | Configuración PHP con valor por defecto |

No aplicar `e()` otra vez a `url()` o `asset()`. Evitar rutas absolutas del ordenador y respetar mayúsculas: `App` puede ser distinto de `app` en producción.

## Crear recursos y páginas

### Un recurso nuevo

1. Revisar el ejemplo más parecido en `App/views/showroom.php` y escoger un nombre libre, por ejemplo `art17`.
2. Añadir allí su HTML de ejemplo, respetando los encabezados de la categoría y usando IDs únicos.
3. Crear `src/assets/scss/resources/_art17.scss`, con estilos limitados a `.art17` y variables/breakpoints de `_config.scss`.
4. Añadir `@use "./resources/art17";` en `src/assets/scss/showroom.scss`.
5. Si necesita JS, crear `src/assets/js/resources/_art17.js`, exportar su inicialización, importarla en `src/assets/js/showroom.js` y llamarla dentro del `DOMContentLoaded` existente.
6. Ejecutar `npm run build` y revisar `/showroom`, móvil, teclado y más de una instancia si el recurso es reutilizable.

No crear un JS vacío para un recurso estático. No dar de alta cada recurso en las rutas o en Vite: la entrada es la vista `showroom.js`.

Para usarlo en inicio, por ejemplo, incorporar su HTML en `App/views/es/inicio.php` y `App/views/eu/inicio.php`, importar su parcial desde `inicio.scss` y su comportamiento desde `inicio.js`. El showroom es un catálogo, no una carga global de todos los recursos para todas las páginas.

### Una página nueva

Crear sus vistas es/eu, su SCSS y su entrada JS. Esta importa el SCSS y los módulos compartidos necesarios. Añadir la entrada a `build.rollupOptions.input` en `vite.config.js` y dar de alta cada ruta con `view` y `resources` en `App/config/config.php`. Actualizar navegación, enlaces y metadatos.

**Las rutas equivalentes es/eu deben ocupar la misma posición en sus listas.** El selector de idioma calcula la equivalencia por posición, no por nombre del archivo. No ordenar un idioma sin ordenar el otro.

## HTML y SEO

La pauta para contenido nuevo es un H1 principal, secciones temáticas dentro de `main` con H2 y artículos dentro de cada sección con H3. Una sección puede contener tantos artículos como unidades de información necesite. Los subapartados de un artículo pueden usar H4; los módulos y contenedores visuales no necesitan inventar encabezados.

El rango no se elige por el tamaño visual. Al adaptar HTML de un recurso, revisar sus selectores SCSS si dependían de `h2` o `h3`. La pauta no implica que todos los recursos antiguos del showroom ya cumplan la jerarquía: revisar el contexto al añadir uno nuevo.

Ejemplo de escalado del mismo servicio, «Diseño web»:

| Página | Papel del servicio |
| --- | --- |
| Inicio | H3 dentro de la sección H2 Servicios: presentación breve y enlace |
| Servicios | H2 de su propia sección: comparación y alcance general |
| Ficha del servicio | H1 de la página: desarrollo específico y completo |

Cada página debe tener una finalidad e intención de búsqueda diferenciadas. Reutilizar la terminología con distinto contexto y profundidad; no copiar el mismo contenido entre inicio, catálogo y ficha. Antes del copy real, preparar una matriz por URL/idioma con finalidad, terminología, atributos, público/aplicación y localidad si procede.

Como criterio editorial del curso: title único de 50–65 caracteres y meta description única de 140–160, contando espacios; justificar excepciones sin rellenar artificialmente. Son rangos internos, no mínimos de Google. Revisar también canonical, hreflang, Open Graph, `html lang`, ALT descriptivos, title de imágenes informativas y title/texto de enlaces. Los iconos decorativos conservan `alt=""`; los atributos title no sustituyen los nombres accesibles. Ver las [reglas y ejemplos SEO completos](.codex/skills/seo-content/SKILL.md), con enlaces a las fuentes primarias de Google y MDN.

## Configuración de entorno

Se carga un archivo llamado `.env` situado en la raíz privada. El stack no selecciona automáticamente `.env.production` ni `.env.development`. Para otro entorno se instala su propio `.env` o se proporcionan variables de proceso.

`env()` consulta primero el entorno del proceso y después los valores cargados desde `.env`. Los scripts de arranque fijan sus valores locales sin leer ese archivo desde Node:

| Variable | `npm run dev` | `npm run preview` | Producción |
| --- | --- | --- | --- |
| `APP_ENV` | `development` por defecto | `preview` | `production` |
| `RUTA` | `http://localhost:5173` por defecto | `http://localhost:4173` por defecto | URL pública real |
| `LANG_DEFAULT` | `es` por defecto | `es` por defecto | `es` o `eu` |

En dev y preview, una `RUTA` o `LANG_DEFAULT` ya exportada en la terminal prevalece sobre el valor por defecto del script. Dev permite también un `APP_ENV` exportado; preview fija siempre `preview`. No dejar exportados valores de producción al arrancar los scripts locales.

### Ejemplo de desarrollo

```dotenv
APP_ENV=development
RUTA=http://localhost:5173
LANG_DEFAULT=es
MAIL_ENABLED=false
SMTP_HOST=
SMTP_USERNAME=
SMTP_PASSWORD=
EMAIL_WEB=info@example.com
EMAIL_ADMIN=admin@example.com
COOKIELAD_API_KEY=
```

### Ejemplo de producción

Crear este archivo **en el servidor y fuera de la carpeta pública**, con los datos reales del proyecto:

```dotenv
APP_ENV=production
RUTA=https://www.example.com
LANG_DEFAULT=es
MAIL_ENABLED=false
SMTP_HOST=
SMTP_USERNAME=
SMTP_PASSWORD=
EMAIL_WEB=info@example.com
EMAIL_ADMIN=admin@example.com
COOKIELAD_API_KEY=
```

La URL de `RUTA` no lleva `/dist`, `/public` ni `/www`: esas son carpetas del servidor, no necesariamente parte de la URL. Si el sitio se publica realmente en `https://example.com/curso`, usar esa URL completa con `/curso`. Ese path se utiliza también para normalizar rutas y crear enlaces. `app_url()` toma host/protocolo de la petición; detrás de un proxy, configurar correctamente HTTPS y el host en el servidor.

Para activar correo real, rellenar SMTP y destinatarios y cambiar a `MAIL_ENABLED=true`. El mailer actual utiliza autenticación SMTP, SMTPS y puerto **465**, fijados en `App/app/envioPhpMailer.php`; añadir `SMTP_PORT=587` a `.env` no cambia ese comportamiento. Si el proveedor exige otro transporte, hay que adaptar el mailer expresamente.

`MAIL_ENABLED=false` evita el envío, pero el formulario devolverá un error al intentar enviar datos válidos: no es un simulador de entrega correcta. CookieLad solo se incluye con `COOKIELAD_API_KEY` no vacía. El `.env` local existente conserva sus valores al actualizar la plantilla: revisar si tenía correo o CookieLad activos antes de probar.

No guardar `.env` en Git, subirlo al document root ni poner contraseñas en variables `VITE_*`, que pueden publicarse en el JavaScript del navegador. `.env.example` sí se versiona porque solo contiene valores ficticios.

## Qué subir a producción y dónde

### Distribución necesaria

Ejemplo de hosting cuyo directorio público se llama `www`:

```text
/ruta/privada/del/sitio/           NO es el document root
├── App/                         Código PHP privado y vistas
├── vendor/                      Dependencias PHP de producción
├── .env                         Configuración privada del servidor
├── composer.json                Si Composer se ejecuta aquí
├── composer.lock                Si Composer se ejecuta aquí
└── www/                         DOCUMENT ROOT del dominio
    ├── index.php                Copiado de dist/index.php
    ├── .htaccess                Copiado de dist/.htaccess
    ├── .vite/
    │   └── manifest.json        Necesario para cargar los bundles
    ├── assets/                  Bundles, fuentes, imágenes e iconos
    ├── favicon.svg
    ├── icons.svg
    ├── robots.txt
    └── sitemap.xml
```

`www` puede llamarse `public`, `public_html`, `htdocs` o `dist`: el nombre es secundario. **`App/`, `vendor/` y `.env` deben ser hermanos de la carpeta pública, en su padre inmediato.** El `index.php` y los helpers calculan esas rutas mediante `dirname(__DIR__)`. Si el hosting obliga a otro reparto, hay que adaptar esas rutas deliberadamente; no meter el código privado dentro de `www` para que «funcione».

### Qué va a cada destino

| Origen local | Destino | Observación |
| --- | --- | --- |
| Contenido completo de `dist/` | Carpeta pública del dominio | Incluir ocultos `.htaccess` y `.vite/manifest.json`; no crear un `www/dist/` accidental |
| `App/` | Padre inmediato de la carpeta pública | Vistas, includes, configuración y controladores PHP |
| `vendor/` | Mismo padre privado | Generarlo en servidor o en un entorno compatible con él |
| `.env` de producción | Mismo padre privado | Crear/configurar en el servidor; no sustituirlo por el local |
| `composer.json` y `composer.lock` | Carpeta privada si se instala en remoto | Permiten instalar exactamente las dependencias bloqueadas |
| `src/`, `node_modules/`, `scripts/`, `.git/`, `.codex/`, `.agents/`, documentación | No necesarios para servir la web | Permanecen en el repositorio/entorno de trabajo, fuera del document root |

No subir solo el `public/` fuente: le faltan los bundles de producción y el manifest. Tampoco subir toda la raíz del repositorio a la carpeta pública. El servidor debe ejecutar PHP; no basta un hosting de archivos estáticos.

### Pasos de publicación manual

1. Instalar dependencias locales con `npm ci` y compilar con `npm run build`. Vite/Sass están en `devDependencies`: se necesitan al construir.
2. Preparar `App/` y dependencias PHP de producción. Si se dispone de Composer en el servidor, subir los dos archivos Composer a la raíz privada y ejecutar allí:

   ```bash
   composer install --no-dev --prefer-dist --optimize-autoloader
   composer check-platform-reqs --no-dev
   ```

3. Si no hay Composer en el hosting, generar `vendor/` en un entorno compatible con su PHP/extensiones y subirlo junto a `App/`. No asumir que unas dependencias válidas en el ordenador cumplen los requisitos del servidor.
4. Subir el contenido completo de `dist/` al directorio público y `App/` al padre privado, conservando la relación del esquema. Mantener coordinados `App/`, manifest y bundles de la misma compilación; no mezclar versiones.
5. Crear/revisar el `.env` privado con `APP_ENV=production` y `RUTA` real. Comprobar permisos de lectura del usuario PHP; no dar permisos 777.
6. Configurar document root y reescritura de rutas en el servidor web.
7. Verificar inicio es/eu, páginas internas, selector de idioma, imágenes/CSS/JS, 404 y validación del formulario. Un envío de correo real se prueba aparte cuando se haya decidido activarlo.

No se ha configurado ni ejecutado un despliegue automático con estos documentos. La skill de GitHub Actions se utiliza cuando se solicite ese trabajo y se conozcan dominio, hosting y rutas reales.

### Apache

La carpeta pública incluye `.htaccess` con `DirectoryIndex index.php`, desactivación del listado y reescritura hacia `index.php` para URLs que no son archivos/directorios. El hosting debe permitir esas directivas, `mod_rewrite` y lectura del `.htaccess` (`AllowOverride` adecuado). Si aparece un 500 por una directiva restringida, adaptar la configuración con el proveedor; no eliminar todo el enrutamiento.

Referencia: [Apache, uso de .htaccess y AllowOverride](https://httpd.apache.org/docs/2.4/howto/htaccess.html).

### Nginx

No interpreta `.htaccess`. Ejemplo para un sitio en la raíz del dominio; sustituir rutas y socket por los reales del servidor:

```nginx
server {
    listen 80;
    server_name www.example.com;
    root /ruta/privada/del/sitio/www;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
    location ~ \.php$ {
        try_files $uri =404;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_pass unix:/ruta/al/socket/php-fpm.sock;
    }
    location ~ /\.(?!well-known) {
        deny all;
    }
}
```

Este ejemplo no instala PHP-FPM ni configura HTTPS. Preparar el certificado y el virtual host HTTPS del dominio antes de usar su URL HTTPS como definitiva. Para publicación bajo subcarpeta, adaptar también el enrutamiento del servidor a ese montaje.

Referencia: [Nginx, directiva try_files](https://nginx.org/en/docs/http/ngx_http_core_module.html#try_files).

### Preparar contenido real para publicar

La base conserva `robots.txt` con `Disallow: /` y un sitemap con `example.com`. Antes de una publicación indexable, reemplazar contenido e imágenes de ejemplo, ajustar sitemap/canonical/hreflang, revisar robots/noindex, retirar la ruta y enlace del showroom si no debe estar disponible y completar la información legal adecuada al proyecto. Las fotos de Matrix conservan sus derechos; su procedencia se documenta en `public/assets/img/views/FUENTES.txt`.

## Problemas habituales y límites

| Síntoma | Qué revisar |
| --- | --- |
| No arranca `npm run dev` | PHP y Node en PATH, dependencias instaladas y puertos 3000/5173 libres |
| HTML sin estilos en dev | Abrir el 3000, comprobar Vite en 5173 y variables `RUTA`/`APP_ENV` exportadas en la terminal |
| No aparece `vendor/autoload.php` | Ejecutar `composer install`; en producción, revisar su posición respecto al directorio público |
| Producción intenta conectar a 5173 | Falta `APP_ENV=production`, hay una variable de proceso que prevalece o `RUTA` apunta al entorno local |
| No se encuentra el manifest | Copiar `dist/.vite/manifest.json` a la raíz pública y conservar los archivos que referencia |
| Inicio carga pero las rutas internas fallan | Document root y reescritura Apache/Nginx; no es una SPA con fallback a `index.html` |
| Cambiar idioma lleva a otra página | Mismo orden semántico de rutas en es y eu |
| Funciona en Windows y falla en Linux | Mayúsculas de carpetas, imports y archivos |
| Formulario devuelve fallo al enviar | Revisar `MAIL_ENABLED`, SMTP, remitente/destinatarios y registro PHP; no imprimir errores en la respuesta JSON |
| Cambiar el DOM del recurso no actualiza su JS en producción | Recompilar y publicar juntos PHP, bundles y manifest |

Limitaciones conocidas del ejercicio: el captcha compara dos valores enviados por el cliente y se puede manipular; no hay una protección completa frente a abuso del formulario. No se ha añadido esa complejidad al limpiar la base. Las skills enseñan cómo crear contenido nuevo; no constituyen una auditoría retroactiva de todo el catálogo existente.

## Skills y documentación

`AGENTS.md` guía el trabajo del agente y remite a estas skills locales:

| Skill | Uso |
| --- | --- |
| [stack-resources](.codex/skills/stack-resources/SKILL.md) | HTML de catálogo, parcial SCSS, JS opcional, semántica y comprobación del recurso |
| [stack-workflow](.codex/skills/stack-workflow/SKILL.md) | Páginas, rutas, helpers, idiomas, formularios y distribución pública/privada |
| [seo-content](.codex/skills/seo-content/SKILL.md) | Finalidad por página, jerarquía, escalado de términos, metas, ALT y enlaces |
| [vite-ssh-github-action-deploy](.codex/skills/github-action-config/SKILL.md) | Despliegue automático cuando se solicite, con las particularidades locales de `dist/` |

Los ejemplos anteriores de JavaScript se conservan en [docs/componentes-javascript.md](docs/componentes-javascript.md). Para ejecutar el proyecto, utilizar esta guía; para crear recursos nuevos, seguir el patrón del showroom descrito en la skill.
