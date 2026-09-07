# Portafolio de Karla Medina

Sitio web personal de Karla Medina, desarrolladora web. El proyecto presenta información profesional, habilidades, servicios, trabajos realizados y datos de contacto.

## Evaluación

La página tiene una base visual clara y adecuada para un portafolio: incluye una portada, sección sobre la autora, servicios, galería de proyectos y enlaces de contacto. También utiliza diseño adaptable, animaciones y una galería con filtros.

En esta revisión se corrigieron el enrutamiento inseguro, las inclusiones dinámicas, varios problemas de estructura HTML, controles de navegación inaccesibles y enlaces vacíos de la interfaz.

Antes de publicarla en producción todavía conviene atender estos puntos:

- Optimizar las imágenes grandes de la galería y añadir carga diferida.
- Actualizar y fijar las versiones de las dependencias externas.
- Añadir encabezados de seguridad desde la configuración del servidor.
- Completar la información de cada proyecto cuando existan sus URLs públicas.

El formulario de contacto fue retirado. Actualmente los medios de contacto disponibles están en el footer.

## Requisitos

- PHP 7.4 o superior.
- Un navegador moderno.
- PHP disponible en el sistema o un servidor web compatible, como Apache o Nginx.

No se requiere base de datos ni un proceso de compilación para ejecutar la versión actual.

## Instalación local

1. Clona el repositorio:

   ```bash
   git clone https://github.com/KarlaMedina97/portafolio.git
   cd portafolio
   ```

2. Inicia el servidor de desarrollo incluido en PHP:

   ```bash
   php -S localhost:8000
   ```

   En PowerShell también puedes usar el script incluido:

   ```powershell
   .\start-local.ps1
   ```

3. Abre `http://localhost:8000` en el navegador.

También puedes colocar el proyecto dentro del directorio público de Apache o de otro servidor PHP.

## Estructura

```text
.
├── index.php          # Entrada principal y carga de plantillas
├── main.php           # Inicio, presentación, servicios y galería
├── contact.php        # Página de contacto sin formulario
├── navbar.php         # Barra de navegación
├── footer.php         # Datos de contacto y redes sociales
├── 404.php            # Plantilla de página no encontrada
├── css/               # Bootstrap compilado y estilos personalizados
├── js/                # JavaScript de la interfaz
├── start-local.ps1    # Atajo para iniciar el servidor local en Windows
├── img/               # Imágenes del sitio y proyectos
├── cv/                # Hoja de vida descargable
├── lib/               # Bibliotecas JavaScript y CSS locales
└── scss/              # Fuentes SCSS de Bootstrap
```

## Tecnologías

- PHP para la estructura y carga de plantillas.
- HTML5 y CSS3.
- Bootstrap 5.
- JavaScript y jQuery.
- Isotope para los filtros de la galería.
- Lightbox para visualizar proyectos.
- WOW.js, Easing y Waypoints para animaciones.
- Font Awesome y Bootstrap Icons.

Parte de la estructura visual proviene de la plantilla SEO Master de HTML Codex. La información de licencia y atribución se encuentra en `LICENSE.txt` y `READ-ME.txt`.

## Idiomas

El sitio incluye un botón de cambio entre español e inglés en la barra de navegación. El español es el idioma predeterminado en la primera visita; después, la preferencia se conserva en el navegador mediante `localStorage`.

## Rutas actuales

- `/?page=main`: página principal.
- `/?page=contact`: página de contacto.
- `/?page=404`: plantilla de error.

El sistema de rutas utiliza una lista blanca y devuelve un estado HTTP 404 para páginas desconocidas.

## Próximas mejoras recomendadas

1. Asegurar el router y definir códigos HTTP correctos para páginas inexistentes.
2. Añadir validación HTML, pruebas básicas y un entorno de despliegue documentado.
3. Convertir las imágenes a formatos modernos y crear variantes responsive.
4. Completar la información de cada proyecto con enlaces y descripciones reales.
5. Revisar contraste, navegación por teclado y estados de foco.
6. Añadir encabezados de seguridad en la configuración del servidor.

## Licencia

Consulta `LICENSE.txt` para la licencia del material incluido en el proyecto y `READ-ME.txt` para la atribución de la plantilla original.
