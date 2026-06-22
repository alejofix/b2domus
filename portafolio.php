<?php
define('PAGE_TITLE', 'Portafolio');
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 reveal">
                <span class="hero-badge"><i class="fas fa-images me-1"></i> Portafolio</span>
                <h1>Proyectos realizados</h1>
                <p>Cada proyecto cuenta una historia. Explora nuestros trabajos y descubre lo que podemos hacer por ti.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row mb-5 reveal">
            <div class="col-lg-6">
                <div class="section-divider" style="margin:0 0 1.5rem"></div>
                <h2 class="section-title">Nuestra galería</h2>
                <p class="text-muted">Cada pieza es diseñada y fabricada con precisión, utilizando materiales de primera calidad y acabados impecables.</p>
            </div>
        </div>
        <div class="portfolio-grid">
            <?php foreach ($portfolio_items as $item): ?>
            <div class="portfolio-item">
                <div class="img-placeholder portfolio-placeholder" data-label="<?php echo $item['title']; ?>"></div>
                <div class="portfolio-overlay">
                    <h5><?php echo $item['title']; ?></h5>
                    <p><i class="fas fa-palette me-1"></i> <?php echo $item['materials']; ?></p>
                    <p><i class="fas fa-map-marker-alt me-1"></i> <?php echo $item['location']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section" style="background: var(--ivory); padding: 4rem 0;">
    <div class="container text-center reveal">
        <h3 class="mb-3" style="font-weight: 700; color: var(--dark-green);">¿Te gustó algún proyecto?</h3>
        <p class="text-muted mb-4">Podemos crear algo similar o totalmente nuevo para ti. Solicita una cotización personalizada.</p>
        <a href="https://wa.me/<?php echo WHATSAPP_NUM; ?>?text=<?php echo WHATSAPP_MSG; ?>" target="_blank" class="btn btn-primary btn-lg">
            <i class="fab fa-whatsapp me-2"></i> Solicitar Cotización
        </a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
