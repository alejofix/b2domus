<?php
define('PAGE_TITLE', 'Inicio');
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<!-- Hero -->
<section class="hero" id="hero">
    <div class="hero-bg">
        <img src="assets/images/principal.jpeg" alt="B2 Domus - Proyecto principal">
    </div>
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <span class="hero-badge"><i class="fas fa-trophy me-1"></i> Mobiliario a Medida</span>
        <h1>Diseñamos el mobiliario que tu espacio merece</h1>
        <p>Diseño, fabricación e instalación de mobiliario a medida en Bogotá, Funza y alrededores. Transformamos tus ideas en piezas únicas con acabados premium.</p>
        <div class="hero-cta d-flex flex-wrap gap-3">
            <a href="https://wa.me/<?php echo WHATSAPP_NUM; ?>?text=<?php echo WHATSAPP_MSG; ?>" target="_blank" class="btn btn-gold btn-lg">
                <i class="fab fa-whatsapp me-2"></i>Cotiza por WhatsApp
            </a>
            <a href="portafolio.php" class="btn btn-outline-light btn-lg">
                Ver Proyectos <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="section" id="servicios">
    <div class="container">
        <div class="text-center reveal">
            <div class="section-divider"></div>
            <h2 class="section-title">Nuestros Servicios</h2>
            <p class="section-subtitle">Soluciones integrales en mobiliario a medida con diseño personalizado y fabricación de alta calidad.</p>
        </div>
        <div class="row g-4 mt-2">
            <?php foreach ($services as $s): ?>
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="fas <?php echo $s['icon']; ?>"></i></div>
                    <h5><?php echo $s['title']; ?></h5>
                    <p><?php echo $s['desc']; ?></p>
                    <a href="contacto.php" class="btn-outline-custom btn-sm">Solicitar Cotización <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Featured Projects -->
<section class="section bg-pattern" id="portafolio">
    <div class="container">
        <div class="text-center reveal">
            <div class="section-divider"></div>
            <h2 class="section-title">Proyectos Destacados</h2>
            <p class="section-subtitle">Cada proyecto es único. Conoce algunos de nuestros trabajos recientes.</p>
        </div>
        <div class="portfolio-grid mt-4">
            <?php foreach (array_slice($portfolio_items, 0, 4) as $item): ?>
            <div class="portfolio-item">
                <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
                <div class="portfolio-overlay">
                    <h5><?php echo $item['title']; ?></h5>
                    <p><i class="fas fa-map-marker-alt me-1"></i> <?php echo $item['location']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-5 reveal">
            <a href="portafolio.php" class="btn btn-primary">Ver Todos los Proyectos <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</section>

<!-- Process Preview -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 reveal">
                <div class="section-divider" style="margin:0 0 1.5rem"></div>
                <h2 class="section-title">¿Cómo trabajamos?</h2>
                <p class="text-muted mb-4">Desde la primera visita hasta la instalación final, te acompañamos en cada paso para garantizar un resultado impecable.</p>
                <a href="proceso.php" class="btn btn-primary">Conoce el Proceso <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
            <div class="col-lg-6 offset-lg-1 mt-4 mt-lg-0">
                <div class="process-timeline">
                    <?php foreach ($process_steps as $i => $step): ?>
                    <div class="process-step">
                        <div class="process-step-number"><?php echo $step['step']; ?></div>
                        <h4><?php echo $step['title']; ?></h4>
                        <p><?php echo $step['desc']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="section" style="background: var(--dark-green); padding: 5rem 0;">
    <div class="container text-center reveal">
        <h2 class="text-white mb-3" style="font-weight: 800; font-size: 2.2rem;">¿Listo para transformar tu espacio?</h2>
        <p class="text-white-50 mb-4" style="max-width: 550px; margin-left: auto; margin-right: auto;">Cuéntanos tu idea y te daremos una cotización personalizada sin compromiso. Tu mueble soñado está más cerca de lo que crees.</p>
        <a href="https://wa.me/<?php echo WHATSAPP_NUM; ?>?text=<?php echo WHATSAPP_MSG; ?>" target="_blank" class="btn btn-gold btn-lg">
            <i class="fab fa-whatsapp me-2"></i> Solicitar Cotización
        </a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
