    <footer class="site-footer">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <img src="assets/images/logo-footer.jpg" alt="B2 Domus" class="mb-3 footer-logo">
                    <p class="text-muted mb-4">Diseño, fabricación e instalación de mobiliario a medida en Bogotá, Funza y alrededores.</p>
                    <div class="social-links">
                        <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://wa.me/<?php echo WHATSAPP_NUM; ?>" target="_blank" class="social-link" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="footer-heading">Servicios</h5>
                    <ul class="footer-links">
                        <li><a href="servicios.php#cocinas">Cocinas Integrales</a></li>
                        <li><a href="servicios.php#closets">Closets y Vestieres</a></li>
                        <li><a href="servicios.php#entretenimiento">Centros de Entretenimiento</a></li>
                        <li><a href="servicios.php#oficina">Muebles para Oficina</a></li>
                        <li><a href="servicios.php#diseno3d">Diseño y Visualización 3D</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="footer-heading">Enlaces</h5>
                    <ul class="footer-links">
                        <li><a href="portafolio.php">Portafolio</a></li>
                        <li><a href="proceso.php">Proceso de Trabajo</a></li>
                        <li><a href="nosotros.php">Nosotros</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="footer-heading">Contacto</h5>
                    <ul class="footer-contact">
                        <li><i class="fab fa-whatsapp"></i> <a href="https://wa.me/<?php echo WHATSAPP_NUM; ?>">317 553 1220</a></li>
                        <li><i class="far fa-envelope"></i> <a href="mailto:<?php echo EMAIL_CONTACT; ?>"><?php echo EMAIL_CONTACT; ?></a></li>
                        <li><i class="fas fa-map-marker-alt"></i> <?php echo COVERAGE; ?></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom text-center">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float -->
    <a href="https://wa.me/<?php echo WHATSAPP_NUM; ?>?text=<?php echo WHATSAPP_MSG; ?>" target="_blank" class="whatsapp-float" aria-label="WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Misi AI Float -->
    <button id="misiButton" class="misi-float" aria-label="Misi asistente">
        <span class="misi-icon">🐱</span>
    </button>

    <!-- Misi Chat Panel -->
    <div id="misiPanel" class="misi-panel">
        <div class="misi-header">
            <span class="misi-header-icon">🐱</span>
            <div>
                <h6 class="mb-0">Misi</h6>
                <small class="opacity-75">Tu gatica virtual</small>
            </div>
            <button id="misiClose" class="btn-close btn-close-white ms-auto"></button>
        </div>
        <div class="misi-body" id="misiMessages">
            <div class="misi-msg misi-msg-bot">
                ¡Miau! Soy Misi 🐱, tu asistente virtual de B2 Domus. ¿En qué puedo ayudarte hoy?
            </div>
        </div>
        <div class="misi-footer">
            <div class="input-group">
                <input type="text" id="misiInput" class="form-control" placeholder="Escribe tu mensaje..." autocomplete="off">
                <button id="misiSend" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
            <div class="misi-suggestions" id="misiSuggestions">
                <button class="suggestion-chip" data-msg="¿Qué servicios ofrecen?">Servicios</button>
                <button class="suggestion-chip" data-msg="Quiero una cotización">Cotización</button>
                <button class="suggestion-chip" data-msg="¿Cómo es el proceso?">Proceso</button>
            </div>
        </div>
    </div>

    <div id="misiOverlay" class="misi-overlay"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="assets/js/misi.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
