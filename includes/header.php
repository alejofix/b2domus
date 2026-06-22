<?php
$current_page = basename($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo defined('PAGE_TITLE') ? PAGE_TITLE . ' | ' . SITE_NAME : SITE_NAME . ' - ' . SITE_DESC; ?></title>
    <meta name="description" content="<?php echo defined('PAGE_DESC') ? PAGE_DESC : SITE_DESC . ' en ' . COVERAGE; ?>">
    <link rel="icon" type="image/png" href="assets/images/logo-sm.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav id="mainNav" class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/images/logo.png" alt="B2 Domus" height="45" class="navbar-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page === 'index.php' ? 'active' : ''; ?>" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page === 'servicios.php' ? 'active' : ''; ?>" href="servicios.php">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page === 'portafolio.php' ? 'active' : ''; ?>" href="portafolio.php">Portafolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page === 'proceso.php' ? 'active' : ''; ?>" href="proceso.php">Proceso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page === 'nosotros.php' ? 'active' : ''; ?>" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-primary btn-sm" href="contacto.php">
                        <i class="fas fa-arrow-right me-1"></i> Contáctanos
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
