<?php
define('PAGE_TITLE', 'Proceso de Trabajo');
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 reveal">
                <span class="hero-badge"><i class="fas fa-route me-1"></i> Proceso</span>
                <h1>¿Cómo trabajamos?</h1>
                <p>Un proceso claro y transparente desde la primera visita hasta la instalación final. Sin sorpresas, solo resultados.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="process-timeline">
                    <?php foreach ($process_steps as $step): ?>
                    <div class="process-step reveal">
                        <div class="process-step-number"><?php echo $step['step']; ?></div>
                        <div class="card process-card" style="border: none; background: var(--white); border-radius: 16px; padding: 2rem; box-shadow: 0 5px 30px rgba(29,55,46,0.05);">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <i class="fas <?php echo $step['icon']; ?>" style="font-size: 1.5rem; color: var(--gold);"></i>
                                <h4 class="mb-0"><?php echo $step['title']; ?></h4>
                            </div>
                            <p class="mb-0 text-muted" style="padding-left: 3rem;"><?php echo $step['desc']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="section" style="background: var(--dark-green);">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4 reveal">
                <div class="stat-item">
                    <div class="stat-number text-white" data-target="150">0</div>
                    <div class="stat-label text-white-50">Proyectos Completados</div>
                </div>
            </div>
            <div class="col-md-4 reveal">
                <div class="stat-item">
                    <div class="stat-number text-white" data-target="12">0</div>
                    <div class="stat-label text-white-50">Años de Experiencia</div>
                </div>
            </div>
            <div class="col-md-4 reveal">
                <div class="stat-item">
                    <div class="stat-number text-white" data-target="98">0<span class="stat-suffix">%</span></div>
                    <div class="stat-label text-white-50">Clientes Satisfechos</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container text-center reveal">
        <div class="section-divider"></div>
        <h2 class="section-title">¿Listo para empezar?</h2>
        <p class="section-subtitle">Agenda una visita sin compromiso y descubre cómo podemos transformar tu espacio.</p>
        <a href="https://wa.me/<?php echo WHATSAPP_NUM; ?>?text=Hola%20B2%20Domus%2C%20quiero%20agendar%20una%20visita" target="_blank" class="btn btn-primary btn-lg">
            <i class="fab fa-whatsapp me-2"></i> Agendar Visita
        </a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
