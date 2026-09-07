<?php
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$pages = [
    'main' => 'main.php',
    'contact' => 'contact.php',
    '404' => '404.php',
];

$requestedPage = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);
$page = is_string($requestedPage) && isset($pages[$requestedPage]) ? $requestedPage : 'main';

if ($requestedPage !== null && (!is_string($requestedPage) || !isset($pages[$requestedPage]))) {
    http_response_code(404);
    $page = '404';
}

$pageFile = __DIR__ . '/' . $pages[$page];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Portafolio kymf</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="¿Necesitas una página web? Este es el sitio web que tanto buscabas, desarrollo web" name="keywords">
    <meta content="Bienvenido a mi portafolio, aquí encontrarás más información sobre mí." name="description">

    <!-- icon -->
    <link href="img/img_code.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="site-wrap">
        <?php require __DIR__ . '/navbar.php'; ?>
        <main id="main"><?php require $pageFile; ?></main>
        <?php require __DIR__ . '/footer.php'; ?>
    </div>

    <!-- Back to Top -->
    <a href="#main" class="btn btn-lg btn-dark btn-lg-square back-to-top pt-2" aria-label="Volver arriba"><i class="bi bi-arrow-up" aria-hidden="true"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>