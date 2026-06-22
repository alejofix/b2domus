<?php
define('PAGE_TITLE', 'Gracias');
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<section class="section" style="min-height: 70vh; display: flex; align-items: center;">
    <div class="container text-center reveal">
        <i class="fas fa-check-circle" style="font-size: 5rem; color: var(--gold);"></i>
        <h1 class="section-title mt-4">¡Gracias por contactarnos!</h1>
        <p class="section-subtitle">Hemos recibido tu mensaje y te responderemos a la brevedad posible. Mientras tanto, te invitamos a conocer más de nuestros proyectos.</p>
        <div class="d-flex justify-content-center gap-3 mt-4">
            <a href="portafolio.php" class="btn btn-primary"><i class="fas fa-images me-2"></i>Ver Portafolio</a>
            <a href="https://wa.me/<?php echo WHATSAPP_NUM; ?>" target="_blank" class="btn btn-gold"><i class="fab fa-whatsapp me-2"></i>WhatsApp</a>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
