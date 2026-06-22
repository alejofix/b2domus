<?php
define('PAGE_TITLE', 'Servicios');
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 reveal">
                <span class="hero-badge"><i class="fas fa-concierge-bell me-1"></i> Servicios</span>
                <h1>Soluciones en mobiliario a medida</h1>
                <p>Desde cocinas integrales hasta mobiliario corporativo, creamos piezas únicas que se adaptan a tu estilo y necesidades.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php foreach ($services as $index => $s): ?>
        <div class="row align-items-center mb-5 pb-4 <?php echo $index % 2 === 1 ? 'flex-lg-row-reverse' : ''; ?>" id="<?php echo $s['id']; ?>">
            <div class="col-lg-6 reveal">
                <div class="service-card" style="border: 1px solid var(--soft-gray);">
                    <div class="service-icon"><i class="fas <?php echo $s['icon']; ?>"></i></div>
                    <h4 style="font-size: 1.5rem;"><?php echo $s['title']; ?></h4>
                    <p style="font-size: 1rem;"><?php echo $s['desc']; ?></p>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: var(--gold);"></i> Diseño personalizado</li>
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: var(--gold);"></i> Materiales premium</li>
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: var(--gold);"></i> Fabricación e instalación propia</li>
                        <li class="mb-2"><i class="fas fa-check-circle" style="color: var(--gold);"></i> Visualización 3D incluida</li>
                    </ul>
                    <a href="https://wa.me/<?php echo WHATSAPP_NUM; ?>?text=Hola%20B2%20Domus%2C%20me%20interesa%20cotizar%20<?php echo urlencode($s['title']); ?>" target="_blank" class="btn btn-primary mt-2">
                        <i class="fab fa-whatsapp me-2"></i>Cotizar <?php echo $s['title']; ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 <?php echo $index % 2 === 1 ? '' : 'offset-lg-1'; ?> mt-4 mt-lg-0 reveal">
                <div class="about-image img-placeholder" data-label="<?php echo $s['title']; ?>"></div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- CTA -->
<section class="section" style="background: var(--dark-green); padding: 4rem 0;">
    <div class="container text-center reveal">
        <h3 class="text-white mb-3" style="font-weight: 700;">¿No encuentras lo que buscas?</h3>
        <p class="text-white-50 mb-4">Todo nuestro mobiliario es 100% personalizable. Cuéntanos tu idea y la hacemos realidad.</p>
        <a href="contacto.php" class="btn btn-gold btn-lg"><i class="fas fa-comment me-2"></i>Háblanos de tu proyecto</a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
