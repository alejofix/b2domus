<?php
define('PAGE_TITLE', 'Contacto');
require_once 'includes/config.php';
require_once 'includes/header.php';

$success = false;
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telefono = trim($_POST['telefono'] ?? '');
    $servicio = trim($_POST['servicio'] ?? '');
    $mensaje = trim($_POST['mensaje'] ?? '');

    if (!$nombre || !$email || !$mensaje) {
        $error = 'Por favor completa los campos obligatorios (nombre, email y mensaje).';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Por favor ingresa un email válido.';
    } else {
        $to = EMAIL_CONTACT;
        $subject = 'Nuevo contacto desde B2 Domus Web - ' . $nombre;
        $body = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\nServicio: $servicio\n\nMensaje:\n$mensaje";
        $headers = "From: $email\r\nReply-To: $email";
        if (mail($to, $subject, $body, $headers)) {
            $success = true;
        } else {
            $error = 'Hubo un error al enviar el mensaje. Intenta de nuevo o escríbenos por WhatsApp.';
        }
    }
}
?>

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 reveal">
                <span class="hero-badge"><i class="fas fa-comment me-1"></i> Contacto</span>
                <h1>Háblanos de tu proyecto</h1>
                <p>Cuéntanos tus ideas, no importa lo que te imagines, nosotros lo hacemos realidad.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7 reveal">
                <div class="contact-form-wrapper">
                    <?php if ($success): ?>
                    <div class="text-center py-5">
                        <i class="fas fa-check-circle" style="font-size: 4rem; color: var(--gold);"></i>
                        <h3 class="mt-3">¡Mensaje enviado!</h3>
                        <p class="text-muted">Gracias por contactarnos. Te responderemos a la brevedad posible.</p>
                        <a href="index.php" class="btn btn-primary mt-3">Volver al Inicio</a>
                    </div>
                    <?php else: ?>
                    <?php if ($error): ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    <form method="POST" action="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Nombre *</label>
                                <input type="text" name="nombre" class="form-control" required value="<?php echo htmlspecialchars($_POST['nombre'] ?? ''); ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email *</label>
                                <input type="email" name="email" class="form-control" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Teléfono</label>
                                <input type="tel" name="telefono" class="form-control" value="<?php echo htmlspecialchars($_POST['telefono'] ?? ''); ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Servicio de Interés</label>
                                <select name="servicio" class="form-select">
                                    <option value="">Selecciona uno...</option>
                                    <?php foreach ($services as $s): ?>
                                    <option value="<?php echo $s['title']; ?>" <?php echo ($_POST['servicio'] ?? '') === $s['title'] ? 'selected' : ''; ?>><?php echo $s['title']; ?></option>
                                    <?php endforeach; ?>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Cuéntanos tu proyecto *</label>
                                <textarea name="mensaje" class="form-control" rows="5" required placeholder="Describe tu proyecto, dimensiones aproximadas, materiales preferidos..."><?php echo htmlspecialchars($_POST['mensaje'] ?? ''); ?></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg w-100">
                                    <i class="fas fa-paper-plane me-2"></i> Enviar Mensaje
                                </button>
                            </div>
                            <div class="col-12">
                                <p class="text-muted small mb-0">* Campos obligatorios. Te responderemos en máximo 24 horas.</p>
                            </div>
                        </div>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-5 reveal">
                <div class="contact-info-card">
                    <h4 class="text-white mb-4" style="font-weight: 700;">Información de Contacto</h4>
                    <div class="contact-item">
                        <i class="fab fa-whatsapp"></i>
                        <div>
                            <strong>WhatsApp</strong>
                            <small><a href="https://wa.me/<?php echo WHATSAPP_NUM; ?>" class="text-white text-decoration-none">317 553 1220</a></small>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="far fa-envelope"></i>
                        <div>
                            <strong>Email</strong>
                            <small><a href="mailto:<?php echo EMAIL_CONTACT; ?>" class="text-white text-decoration-none"><?php echo EMAIL_CONTACT; ?></a></small>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Cobertura</strong>
                            <small><?php echo COVERAGE; ?></small>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <strong>Horario</strong>
                            <small>Lun - Sáb: 8:00 AM - 6:00 PM</small>
                        </div>
                    </div>
                    <hr class="border-light opacity-25 my-4">
                    <h5 class="text-white mb-3" style="font-weight: 600;">Síguenos</h5>
                    <div class="social-links">
                        <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Coverage Map -->
<section class="section pt-0">
    <div class="container">
        <div class="text-center reveal">
            <div class="section-divider"></div>
            <h2 class="section-title">Zona de Cobertura</h2>
            <p class="section-subtitle">Atendemos Bogotá, Funza y alrededores con puntualidad y calidad.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 reveal">
                <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 40px rgba(29,55,46,0.08);">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15905.635!2d-74.1256023!3d4.7147823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f835648501d2d%3A0xdc0d5907410efaec!2sCra.%20112A%20%2373A-80%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1"
                        width="100%" height="400" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="col-lg-8 reveal">
                <div class="d-flex flex-wrap align-items-center justify-content-center gap-3 p-3" style="background: var(--white); border-radius: 16px; box-shadow: 0 5px 20px rgba(29,55,46,0.05);">
                    <span><i class="fas fa-map-pin" style="color: var(--gold);"></i> <strong>Cra. 112A #73A-80, Bogotá</strong></span>
                    <span class="opacity-25 d-none d-sm-inline">|</span>
                    <span><i class="fas fa-map-marked-alt" style="color: var(--gold);"></i> Cobertura: Bogotá, Funza y alrededores</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
