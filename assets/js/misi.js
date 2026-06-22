document.addEventListener('DOMContentLoaded', function() {

    const misiBtn = document.getElementById('misiButton');
    const misiPanel = document.getElementById('misiPanel');
    const misiClose = document.getElementById('misiClose');
    const misiOverlay = document.getElementById('misiOverlay');
    const misiInput = document.getElementById('misiInput');
    const misiSend = document.getElementById('misiSend');
    const misiMessages = document.getElementById('misiMessages');
    const misiSuggestions = document.getElementById('misiSuggestions');

    if (!misiBtn) return;

    // Toggle panel
    function openMisi() {
        misiPanel.classList.add('open');
        misiOverlay.classList.add('open');
        misiInput.focus();
    }

    function closeMisi() {
        misiPanel.classList.remove('open');
        misiOverlay.classList.remove('open');
    }

    misiBtn.addEventListener('click', openMisi);
    misiClose.addEventListener('click', closeMisi);
    misiOverlay.addEventListener('click', closeMisi);

    // Fallback responses
    const fallbackResponses = [
        {
            keywords: ['hola', 'buenas', 'hey', 'buenos días', 'buenas tardes', 'misi'],
            response: '¡Miau! 🐱 Soy Misi, tu gatica virtual de B2 Domus. ¿En qué puedo ayudarte? Puedes preguntarme sobre nuestros servicios, cotizaciones, el proceso de trabajo o agendar una visita.'
        },
        {
            keywords: ['servicio', 'qué hacen', 'producto', 'mueble', 'mobiliario', 'cocina', 'closet', 'vestier', 'entretenimiento', 'oficina'],
            response: '¡Con gusto te cuento! 🏠 En B2 Domus ofrecemos:\n\n✨ Cocinas Integrales\n✨ Closets y Vestieres\n✨ Centros de Entretenimiento\n✨ Muebles para Oficina\n✨ Diseño y Visualización 3D\n\nTodo diseñado y fabricado a medida. ¿Te gustaría cotizar alguno de nuestros servicios?'
        },
        {
            keywords: ['cotización', 'cotizar', 'precio', 'cuánto', 'valor', 'presupuesto'],
            response: '¡Claro! 🛋️ Me encantaría ayudarte con una cotización personalizada. Escríbenos al WhatsApp 317 553 1220 o dime brevemente: ¿qué tipo de mueble necesitas y las dimensiones aproximadas del espacio?'
        },
        {
            keywords: ['proceso', 'cómo trabajan', 'pasos', 'etapas', 'fabricación', 'instalación'],
            response: '¡Nuestro proceso es muy sencillo! 🎯\n\n1️⃣ Visita y toma de medidas\n2️⃣ Diseño 3D fotorrealista\n3️⃣ Cotización sin compromiso\n4️⃣ Fabricación con materiales premium\n5️⃣ Instalación profesional\n\n¿Quieres agendar una visita?'
        },
        {
            keywords: ['contacto', 'teléfono', 'whatsapp', 'celular', 'dirección', 'ubicación', 'dónde están'],
            response: 'Puedes contactarnos por:\n\n📱 WhatsApp: 317 553 1220\n📧 Email: contacto@b2domus.com\n📍 Cobertura: Bogotá, Funza y alrededores\n\n¡Estamos listos para ayudarte! 🐱'
        },
        {
            keywords: ['nosotros', 'quienes', 'historia', 'empresa', 'trayectoria', 'experiencia'],
            response: 'B2 Domus nace de la pasión por el diseño y la carpintería de alta calidad. 🪵 Somos especialistas en mobiliario a medida con experiencia en diseño digital y visualización arquitectónica. Contamos con fabricación e instalación propia, lo que garantiza calidad y puntualidad en cada proyecto. 🎯'
        },
        {
            keywords: ['gracias', 'ok', 'vale', 'perfecto', 'excelente'],
            response: '¡De nada! 🐱✨ Siempre estoy aquí para ayudarte. Si tienes más preguntas, solo escríbeme. ¡Miau!'
        }
    ];

    function findFallbackResponse(msg) {
        const msgLower = msg.toLowerCase();
        for (const item of fallbackResponses) {
            if (item.keywords.some(kw => msgLower.includes(kw))) {
                return item.response;
            }
        }
        return '¡Miau! 🐱 No entendí muy bien. ¿Podrías ser más específico? Puedo ayudarte con información sobre servicios, cotizaciones, proceso de trabajo o contacto. ¡Dime cómo te ayudo!';
    }

    // API call via PHP
    async function askMisiAPI(message) {
        try {
            const res = await fetch('api/misi.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ message: message })
            });
            const data = await res.json();
            return data.response || null;
        } catch (e) {
            return null;
        }
    }

    // Add message to chat
    function addMessage(text, type) {
        const div = document.createElement('div');
        div.className = 'misi-msg misi-msg-' + type;
        div.textContent = text;
        misiMessages.appendChild(div);
        misiMessages.scrollTop = misiMessages.scrollHeight;
    }

    // Show typing indicator
    function showTyping() {
        const div = document.createElement('div');
        div.className = 'misi-msg misi-msg-typing';
        div.id = 'misiTyping';
        div.textContent = '🐱 Misi está escribiendo...';
        misiMessages.appendChild(div);
        misiMessages.scrollTop = misiMessages.scrollHeight;
    }

    function hideTyping() {
        const typing = document.getElementById('misiTyping');
        if (typing) typing.remove();
    }

    // Handle message
    async function handleMessage(msg) {
        if (!msg.trim()) return;
        addMessage(msg, 'user');
        misiInput.value = '';
        showTyping();

        // Try API first, fallback to predefined
        let response = await askMisiAPI(msg);
        if (!response) {
            response = findFallbackResponse(msg);
        }

        setTimeout(() => {
            hideTyping();
            addMessage(response, 'bot');
        }, 600 + Math.random() * 400);
    }

    // Send events
    misiSend.addEventListener('click', () => handleMessage(misiInput.value));
    misiInput.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') handleMessage(misiInput.value);
    });

    // Suggestion chips
    misiSuggestions.addEventListener('click', (e) => {
        const chip = e.target.closest('.suggestion-chip');
        if (chip) {
            handleMessage(chip.dataset.msg);
        }
    });

});
