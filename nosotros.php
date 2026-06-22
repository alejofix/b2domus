<?php
define('PAGE_TITLE', 'Nosotros');
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 reveal">
                <span class="hero-badge"><i class="fas fa-users me-1"></i> Nosotros</span>
                <h1>Conoce a B2 Domus</h1>
                <p>Diseñadores de mobiliario apasionados por crear espacios que inspiran.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 reveal">
                <div class="about-badge">
                    <i class="fas fa-star"></i> Nuestra Historia
                </div>
                <h2 class="section-title" style="font-size: 2rem;">Diseño, fabricación e instalación propia</h2>
                <p class="text-muted">En B2 Domus, cada proyecto nace de la pasión por el diseño y la carpintería de alta calidad. Somos una empresa especializada en mobiliario a medida, con experiencia en diseño digital y visualización arquitectónica.</p>
                <p class="text-muted">Nuestro equipo combina la precisión del diseño 3D con la artesanía tradicional, garantizando que cada pieza sea única y perfecta para tu espacio. Al contar con fabricación e instalación propia, aseguramos los más altos estándares de calidad y cumplimiento en cada proyecto.</p>
                <div class="row mt-4 g-4">
                    <div class="col-4">
                        <h3 style="font-weight: 800; color: var(--gold);">150+</h3>
                        <small class="text-muted">Proyectos realizados</small>
                    </div>
                    <div class="col-4">
                        <h3 style="font-weight: 800; color: var(--gold);">12+</h3>
                        <small class="text-muted">Años de experiencia</small>
                    </div>
                    <div class="col-4">
                        <h3 style="font-weight: 800; color: var(--gold);">100%</h3>
                        <small class="text-muted">Hecho en Colombia</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 mt-4 mt-lg-0 reveal">
                <div class="about-image img-placeholder" data-label="B2 Domus - Proyecto"></div>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="section bg-pattern">
    <div class="container">
        <div class="text-center reveal">
            <div class="section-divider"></div>
            <h2 class="section-title">Nuestros Pilares</h2>
            <p class="section-subtitle">Lo que nos define y nos impulsa a dar lo mejor en cada proyecto.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-md-4 reveal">
                <div class="service-card text-center">
                    <div class="service-icon" style="margin: 0 auto 1.5rem;"><i class="fas fa-ruler-combined"></i></div>
                    <h5>Diseño Personalizado</h5>
                    <p class="text-muted">Cada espacio es único. Escuchamos tus ideas y las transformamos en diseños a tu medida.</p>
                </div>
            </div>
            <div class="col-md-4 reveal">
                <div class="service-card text-center">
                    <div class="service-icon" style="margin: 0 auto 1.5rem;"><i class="fas fa-award"></i></div>
                    <h5>Calidad Premium</h5>
                    <p class="text-muted">Seleccionamos los mejores materiales y aplicamos procesos de fabricación de alta precisión.</p>
                </div>
            </div>
            <div class="col-md-4 reveal">
                <div class="service-card text-center">
                    <div class="service-icon" style="margin: 0 auto 1.5rem;"><i class="fas fa-handshake"></i></div>
                    <h5>Compromiso Total</h5>
                    <p class="text-muted">Te acompañamos en cada etapa, desde el diseño hasta la instalación, garantizando tu satisfacción.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team CTA -->
<section class="section" style="background: var(--dark-green); padding: 4rem 0;">
    <div class="container text-center reveal">
        <h3 class="text-white mb-3" style="font-weight: 700;">Trabajemos juntos</h3>
        <p class="text-white-50 mb-4">Cuéntanos tu proyecto y descubre cómo podemos hacerlo realidad.</p>
        <a href="contacto.php" class="btn btn-gold btn-lg"><i class="fas fa-comment me-2"></i>Contáctanos</a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
