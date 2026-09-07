(function ($) {
    "use strict";

    const translations = {
        es: {
            navHome: 'Inicio',
            navAbout: 'Sobre mí',
            navServices: 'Servicios',
            navGallery: 'Galería',
            navContact: 'Contacto',
            heroTitle: 'Bienvenido',
            heroDescription: 'Este portafolio pertenece a Karla Medina, desarrolladora web.',
            galleryButton: 'Galería',
            profession: 'Desarrolladora web',
            aboutDescription: 'Aplico tecnologías para el desarrollo y diseño de páginas web en un entorno amigable e intuitivo para el usuario.',
            downloadCv: 'Descargar CV',
            skillsTitle: 'Habilidades',
            servicesTitle: 'Servicios',
            seoTitle: 'Optimización SEO',
            seoDescription: 'Posicionar páginas web en los motores de búsqueda.',
            webDesignTitle: 'Diseño web',
            webDesignDescription: 'Consigue una excelente experiencia con la interfaz de tu sitio.',
            emailTitle: 'Email marketing',
            emailDescription: 'Correo electrónico para promover los productos o servicios de tu negocio.',
            galleryTitle: 'Galería',
            allFilter: 'Todo',
            designFilter: 'Diseño',
            developmentFilter: 'Desarrollo',
            designCategory: 'Diseño web',
            developmentCategory: 'Desarrollo web',
            projectLabel: 'Proyecto web',
            contactTitle: 'Contacto',
            location: 'Medellín, Colombia.',
            homeLabel: 'Inicio',
            pagesLabel: 'Páginas',
            notFoundTitle: 'Página no encontrada',
            notFoundDescription: 'La página que buscas no existe. Regresa al inicio para continuar navegando.',
            backHome: 'Volver al inicio',
            languageButton: 'English',
            languageLabel: 'Cambiar a inglés',
            pageTitle: 'Portafolio kymf'
        },
        en: {
            navHome: 'Home',
            navAbout: 'About me',
            navServices: 'Services',
            navGallery: 'Gallery',
            navContact: 'Contact',
            heroTitle: 'Welcome',
            heroDescription: 'This portfolio belongs to Karla Medina, a web developer.',
            galleryButton: 'Gallery',
            profession: 'Web developer',
            aboutDescription: 'I use technology to develop and design websites in a friendly and intuitive environment for users.',
            downloadCv: 'Download CV',
            skillsTitle: 'Skills',
            servicesTitle: 'Services',
            seoTitle: 'SEO optimization',
            seoDescription: 'Improve website positioning in search engines.',
            webDesignTitle: 'Web design',
            webDesignDescription: 'Create an excellent experience with your website interface.',
            emailTitle: 'Email marketing',
            emailDescription: 'Email campaigns to promote your business products or services.',
            galleryTitle: 'Gallery',
            allFilter: 'All',
            designFilter: 'Design',
            developmentFilter: 'Development',
            designCategory: 'Web design',
            developmentCategory: 'Web development',
            projectLabel: 'Web project',
            contactTitle: 'Contact',
            location: 'Medellín, Colombia.',
            homeLabel: 'Home',
            pagesLabel: 'Pages',
            notFoundTitle: 'Page not found',
            notFoundDescription: 'The page you are looking for does not exist. Go back home to continue browsing.',
            backHome: 'Back to home',
            languageButton: 'Español',
            languageLabel: 'Cambiar a español',
            pageTitle: 'Kymf portfolio'
        }
    };

    const ariaTranslations = {
        es: {
            'Abrir navegación': 'Abrir navegación',
            'Ir al inicio': 'Ir al inicio',
            'Ampliar proyecto de página de inicio': 'Ampliar proyecto de página de inicio',
            'Ampliar proyecto con ventana modal': 'Ampliar proyecto con ventana modal',
            'Ampliar panel de administración': 'Ampliar panel de administración',
            'Ampliar segunda vista del panel': 'Ampliar segunda vista del panel',
            'Ampliar pantalla de eliminación': 'Ampliar pantalla de eliminación',
            'Ampliar tienda Bunny Shop': 'Ampliar tienda Bunny Shop',
            'Ampliar diseño Mencha': 'Ampliar diseño Mencha',
            'Ampliar vista del panel': 'Ampliar vista del panel'
        },
        en: {
            'Abrir navegación': 'Open navigation',
            'Ir al inicio': 'Go to homepage',
            'Ampliar proyecto de página de inicio': 'Enlarge homepage project',
            'Ampliar proyecto con ventana modal': 'Enlarge modal window project',
            'Ampliar panel de administración': 'Enlarge admin panel',
            'Ampliar segunda vista del panel': 'Enlarge second panel view',
            'Ampliar pantalla de eliminación': 'Enlarge delete screen',
            'Ampliar tienda Bunny Shop': 'Enlarge Bunny Shop',
            'Ampliar diseño Mencha': 'Enlarge Mencha design',
            'Ampliar vista del panel': 'Enlarge panel view'
        }
    };

    function prepareTranslatablePortfolioLabels() {
        $('.portfolio-overlay small').each(function () {
            const category = $(this).text().trim() === 'Web Design' ? 'designCategory' : 'developmentCategory';
            $(this).attr('data-i18n', category);
        });
        $('.portfolio-overlay .h5').attr('data-i18n', 'projectLabel');
        $('[aria-label]').each(function () {
            const label = $(this).attr('aria-label');
            if (ariaTranslations.es[label]) {
                $(this).attr('data-i18n-aria', label);
            }
        });
    }

    function applyLanguage(language) {
        const dictionary = translations[language];

        $('[data-i18n]').each(function () {
            const key = $(this).data('i18n');
            if (dictionary[key]) {
                if ($(this).is('.portfolio-overlay small')) {
                    $(this).contents().filter(function () {
                        return this.nodeType === 3;
                    }).last().replaceWith(dictionary[key]);
                } else {
                    $(this).text(dictionary[key]);
                }
            }
        });

        $('[data-i18n-aria]').each(function () {
            const labelKey = $(this).attr('data-i18n-aria');
            if (ariaTranslations[language][labelKey]) {
                $(this).attr('aria-label', ariaTranslations[language][labelKey]);
            }
        });

        $('#languageToggle')
            .text(dictionary.languageButton)
            .attr('aria-label', dictionary.languageLabel);
        document.documentElement.lang = language;
        document.title = dictionary.pageTitle;

        try {
            localStorage.setItem('portfolio-language', language);
        } catch (error) {
            // The language still works when storage is unavailable.
        }
    }

    prepareTranslatablePortfolioLabels();
    let currentLanguage = 'es';
    try {
        currentLanguage = localStorage.getItem('portfolio-language') === 'en' ? 'en' : 'es';
    } catch (error) {
        currentLanguage = 'es';
    }
    applyLanguage(currentLanguage);
    $('#languageToggle').on('click', function () {
        currentLanguage = currentLanguage === 'es' ? 'en' : 'es';
        applyLanguage(currentLanguage);
    });

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    if (typeof WOW !== 'undefined') {
        new WOW().init();
    }


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function (event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
    });


    // Testimonials carousel
    if ($('.testimonial-carousel').length && $.fn.owlCarousel) {
        $(".testimonial-carousel").owlCarousel({
            autoplay: true,
            smartSpeed: 1000,
            margin: 25,
            dots: false,
            loop: true,
            center: true,
            responsive: {
                0:{
                    items:1
                },
                576:{
                    items:1
                },
                768:{
                    items:2
                },
                992:{
                    items:3
                }
            }
        });
    }


    // Portfolio isotope and filter
    if ($('.portfolio-container').length && $.fn.isotope) {
        var portfolioIsotope = $('.portfolio-container').isotope({
            itemSelector: '.portfolio-item',
            layoutMode: 'fitRows'
        });
        $('#portfolio-flters button').on('click', function () {
            $('#portfolio-flters button').removeClass('active').attr('aria-pressed', 'false');
            $(this).addClass('active').attr('aria-pressed', 'true');

            portfolioIsotope.isotope({filter: $(this).data('filter')});
        });
    }
    
})(jQuery);

// btn descargar

// function download() {
//     ({url:'../cv/Karla Medina CV.pdf',
//     method: 'GET',
//     responseType: 'blob'
// })