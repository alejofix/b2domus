<?php
define('SITE_NAME', 'B2 Domus');
define('SITE_DESC', 'Diseño, fabricación e instalación de mobiliario a medida');
define('SITE_URL', 'https://b2domus.com');
define('WHATSAPP_NUM', '573175531220');
define('WHATSAPP_MSG', 'Hola%20B2%20Domus%2C%20quiero%20solicitar%20una%20cotizaci%C3%B3n');
define('EMAIL_CONTACT', 'contacto@b2domus.com');
define('INSTAGRAM_URL', 'https://instagram.com/b2domus');
define('FACEBOOK_URL', 'https://facebook.com/b2domus');
define('COVERAGE', 'Bogotá, Funza y alrededores');

// OpenAI API Key for Misi AI (leave empty to use fallback responses)
define('OPENAI_API_KEY', '');
define('OPENAI_MODEL', 'gpt-4o-mini');

// Color palette
define('COLOR_GOLD', '#DDBC6B');
define('COLOR_IVORY', '#F5EEDC');
define('COLOR_DARK_GREEN', '#1D372E');
define('COLOR_MED_GREEN', '#3F5A4E');
define('COLOR_SOFT_GRAY', '#E8E2D4');

// Services
$services = [
    [
        'id' => 'cocinas',
        'title' => 'Cocinas Integrales',
        'desc' => 'Diseño y fabricación de cocinas modulares con acabados premium, optimizando cada espacio para funcionalidad y estilo.',
        'icon' => 'fa-kitchen-set',
        'img' => 'https://picsum.photos/seed/cocina/800/500'
    ],
    [
        'id' => 'closets',
        'title' => 'Closets y Vestieres',
        'desc' => 'Armarios y vestidores personalizados con soluciones inteligentes de almacenamiento y acabados de alta calidad.',
        'icon' => 'fa-shirt',
        'img' => 'https://picsum.photos/seed/closet/800/500'
    ],
    [
        'id' => 'entretenimiento',
        'title' => 'Centros de Entretenimiento',
        'desc' => 'Muebles modulares para salas de estar y cine en casa, diseñados para integrar tecnología y confort.',
        'icon' => 'fa-tv',
        'img' => 'https://picsum.photos/seed/entretenimiento/800/500'
    ],
    [
        'id' => 'oficina',
        'title' => 'Muebles para Oficina',
        'desc' => 'Mobiliario ejecutivo y corporativo que combina ergonomía, diseño moderno y durabilidad.',
        'icon' => 'fa-building',
        'img' => 'https://picsum.photos/seed/oficina/800/500'
    ],
    [
        'id' => 'diseno3d',
        'title' => 'Diseño y Visualización 3D',
        'desc' => 'Modelado y renderizado 3D fotorrealista para que visualices tu proyecto antes de fabricarlo.',
        'icon' => 'fa-cubes',
        'img' => 'https://picsum.photos/seed/diseno3d/800/500'
    ]
];

// Process steps
$process_steps = [
    [
        'step' => 1,
        'title' => 'Visita y Toma de Medidas',
        'desc' => 'Agendamos una visita al espacio para tomar medidas exactas y entender tus necesidades.',
        'icon' => 'fa-ruler-combined',
        'duration' => '1 día'
    ],
    [
        'step' => 2,
        'title' => 'Diseño 3D',
        'desc' => 'Creamos un modelo tridimensional fotorrealista para que veas exactamente cómo quedará tu mueble.',
        'icon' => 'fa-cube',
        'duration' => '3-5 días'
    ],
    [
        'step' => 3,
        'title' => 'Cotización',
        'desc' => 'Te presentamos un presupuesto detallado sin compromiso, con total transparencia.',
        'icon' => 'fa-file-invoice-dollar',
        'duration' => '1-2 días'
    ],
    [
        'step' => 4,
        'title' => 'Fabricación',
        'desc' => 'Una vez aprobado, iniciamos la fabricación con materiales de primera calidad y mano de obra especializada.',
        'icon' => 'fa-industry',
        'duration' => '2-4 semanas'
    ],
    [
        'step' => 5,
        'title' => 'Instalación',
        'desc' => 'Entregamos e instalamos tu mobiliario con puntualidad y limpieza, dejando todo perfecto.',
        'icon' => 'fa-truck',
        'duration' => '1-2 días'
    ]
];

// Portfolio images (mapped from actual JPEG files in assets/images)
$portfolio_items = [
    ['img' => 'https://picsum.photos/seed/cocina-moderna/600/400', 'title' => 'Cocina Integral Moderna', 'materials' => 'Melamina blanca, granito negro', 'location' => 'Bogotá'],
    ['img' => 'https://picsum.photos/seed/closet-vestidor/600/400', 'title' => 'Closet Vestidor', 'materials' => 'Madera ébano, herrajes suaves', 'location' => 'Funza'],
    ['img' => 'https://picsum.photos/seed/centro-entretenimiento/600/400', 'title' => 'Centro de Entretenimiento', 'materials' => 'MDF lacado blanco, iluminación LED', 'location' => 'Bogotá'],
    ['img' => 'https://picsum.photos/seed/oficina-ejecutiva/600/400', 'title' => 'Oficina Ejecutiva', 'materials' => 'Nogal americano, vidrio templado', 'location' => 'Bogotá'],
    ['img' => 'https://picsum.photos/seed/cocina-abierta/600/400', 'title' => 'Cocina Abierta', 'materials' => 'Laminado mate, cuarzo blanco', 'location' => 'Funza'],
    ['img' => 'https://picsum.photos/seed/mueble-tv/600/400', 'title' => 'Mueble de TV y Biblioteca', 'materials' => 'Melamina texturizada, acero', 'location' => 'Bogotá']
];
