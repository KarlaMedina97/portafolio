<!-- Section Start -->
<div id="home" class="container-hd py-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-lg-12 text-center">
                <h1 class="text-white mb-4 animated zoomIn" data-i18n="heroTitle">Bienvenido</h1>
                <p class="text-white pb-3 animated zoomIn" data-i18n="heroDescription">Este portafolio pertenece a Karla Medina, desarrolladora web.</p>
                <a href="#gallery" class="btn btn-dark py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft" data-i18n="galleryButton">Galería</a>
                <a href="?page=main#contact" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight" data-i18n="navContact">Contacto</a>
            </div>
        </div>
    </div>
</div>
<!-- Section End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div id="about" class="container px-lg-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title text-center position-relative mb-4 pb-2">
                    <h2 class="mt-3">Karla Medina</h2>
                    <p data-i18n="profession">Desarrolladora web</p>
                </div>
                <p class="mb-4 text-dark" data-i18n="aboutDescription">Aplico tecnologías para el desarrollo y diseño de páginas web en un entorno amigable e intuitivo para el usuario.</p>
                <div class="row g-3">
                    <div class="col-sm-12 text-center">
                        <a class="btn-outline-dark btn-dwn" download="CV Karla Medina" href="cv/Karla Medina - CV.pdf"><i class="fa fa-download" aria-hidden="true"></i> <span data-i18n="downloadCv">Descargar CV</span></a>
                    </div>
                        <h4 class="mt-5" data-i18n="skillsTitle">Habilidades</h4>
                    <div class="col-sm-12 text-center">
                        <img class="img-fluid wow zoomIn img_icon" data-wow-delay="0.5s" src="img/css.png" alt="CSS">
                        <img class="img-fluid wow zoomIn img_icon" data-wow-delay="0.5s" src="img/html.png" alt="HTML">
                        <img class="img-fluid wow zoomIn img_icon" data-wow-delay="0.5s" src="img/php.png" alt="PHP">
                        <img class="img-fluid wow zoomIn img_icon" data-wow-delay="0.5s" src="img/net.png" alt=".NET">
                        <img class="img-fluid wow zoomIn img_icon" data-wow-delay="0.5s" src="img/mysql.png" alt="MySQL">
                        <img class="img-fluid wow zoomIn img_icon" data-wow-delay="0.5s" src="img/sql.png" alt="SQL Server">
                        <img class="img-fluid wow zoomIn img_icon" data-wow-delay="0.5s" src="img/js.png" alt="JavaScript">
                    </div>
                </div>
                
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" style="border-radius: 35px;" data-wow-delay="0.5s" src="img/code_img.jpeg" alt="Código fuente en un computador" loading="lazy">
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div id="service" class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2" data-i18n="servicesTitle">Servicios</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-user-shield fa-2x"></i>
                    </div>
                    <h5 class="mb-3" data-i18n="seoTitle">Optimización SEO</h5>
                    <p data-i18n="seoDescription">Posicionar páginas web en los motores de búsqueda.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-magic fa-2x"></i>
                    </div>
                    <h5 class="mb-3" data-i18n="webDesignTitle">Diseño web</h5>
                    <p data-i18n="webDesignDescription">Consigue una excelente experiencia con la interfaz de tu sitio.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-envelope fa-2x"></i>
                    </div>
                    <h5 class="mb-3" data-i18n="emailTitle">Email marketing</h5>
                    <p data-i18n="emailDescription">Correo electrónico para promover los productos o servicios de tu negocio.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Gallery Start -->
<div id="gallery"  class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2" data-i18n="galleryTitle">Galería</h2>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li><button type="button" class="btn px-3 pe-4 active" data-filter="*" aria-pressed="true" data-i18n="allFilter">Todo</button></li>
                    <li><button type="button" class="btn px-3 pe-4" data-filter=".first" aria-pressed="false" data-i18n="designFilter">Diseño</button></li>
                    <li><button type="button" class="btn px-3 pe-4" data-filter=".second" aria-pressed="false" data-i18n="developmentFilter">Desarrollo</button></li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                <div class="position-relative rounded overflow-hidden target">
                    <img class="img-fluid w-100" src="img/page-inicio.png" alt="Página de inicio de un proyecto web" loading="lazy">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="img/page-inicio.png" data-lightbox="portfolio" aria-label="Ampliar proyecto de página de inicio"><i class="fa fa-plus fa-2x text-primary" aria-hidden="true"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                            <span class="h5 d-block text-white mt-1 mb-0">Proyecto web</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                <div class="position-relative rounded overflow-hidden target">
                    <img class="img-fluid w-100" src="img/page-modal.png" alt="Ventana modal de un proyecto web" loading="lazy">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="img/page-modal.png" data-lightbox="portfolio" aria-label="Ampliar proyecto con ventana modal"><i class="fa fa-plus fa-2x text-primary" aria-hidden="true"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Dev</small>
                            <span class="h5 d-block text-white mt-1 mb-0">Proyecto web</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.6s">
                <div class="position-relative rounded overflow-hidden target">
                    <img class="img-fluid w-100" src="img/page-panel.png" alt="Panel de administración de un proyecto web" loading="lazy">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="img/page-panel.png" data-lightbox="portfolio" aria-label="Ampliar panel de administración"><i class="fa fa-plus fa-2x text-primary" aria-hidden="true"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Dev</small>
                            <span class="h5 d-block text-white mt-1 mb-0">Proyecto web</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.1s">
                <div class="position-relative rounded overflow-hidden target">
                    <img class="img-fluid w-100" src="img/page-panel-2.png" alt="Segunda vista de un panel web" loading="lazy">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="img/page-panel-2.png" data-lightbox="portfolio" aria-label="Ampliar segunda vista del panel"><i class="fa fa-plus fa-2x text-primary" aria-hidden="true"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Dev</small>
                            <span class="h5 d-block text-white mt-1 mb-0">Proyecto web</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                <div class="position-relative rounded overflow-hidden target">
                    <img class="img-fluid w-100" src="img/page-delete.png" alt="Pantalla de eliminación de un proyecto web" loading="lazy">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="img/page-delete.png" data-lightbox="portfolio" aria-label="Ampliar pantalla de eliminación"><i class="fa fa-plus fa-2x text-primary" aria-hidden="true"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Dev</small>
                            <span class="h5 d-block text-white mt-1 mb-0">Proyecto web</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.6s">
                <div class="position-relative rounded overflow-hidden target">
                    <img class="img-fluid w-100" src="img/admin.png" alt="Panel de administración web" loading="lazy">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="img/admin.png" data-lightbox="portfolio" aria-label="Ampliar panel de administración"><i class="fa fa-plus fa-2x text-primary" aria-hidden="true"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Dev</small>
                            <span class="h5 d-block text-white mt-1 mb-0">Proyecto web</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.6s">
                <div class="position-relative rounded overflow-hidden target">
                    <img class="img-fluid w-100" src="img/bunny-shop.png" alt="Tienda en línea Bunny Shop" loading="lazy">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="img/bunny-shop.png" data-lightbox="portfolio" aria-label="Ampliar tienda Bunny Shop"><i class="fa fa-plus fa-2x text-primary" aria-hidden="true"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                            <span class="h5 d-block text-white mt-1 mb-0">Proyecto web</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.6s">
                <div class="position-relative rounded overflow-hidden target">
                    <img class="img-fluid w-100" src="img/mencha.png" alt="Diseño web Mencha" loading="lazy">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="img/mencha.png" data-lightbox="portfolio" aria-label="Ampliar diseño Mencha"><i class="fa fa-plus fa-2x text-primary" aria-hidden="true"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                            <span class="h5 d-block text-white mt-1 mb-0">Proyecto web</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.6s">
                <div class="position-relative rounded overflow-hidden target">
                    <img class="img-fluid w-100" src="img/panel-page.png" alt="Vista de un panel web" loading="lazy">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="img/panel-page.png" data-lightbox="portfolio" aria-label="Ampliar vista del panel"><i class="fa fa-plus fa-2x text-primary" aria-hidden="true"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Dev</small>
                            <span class="h5 d-block text-white mt-1 mb-0">Proyecto web</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End -->


    