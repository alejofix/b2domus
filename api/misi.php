<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../includes/config.php';

$input = json_decode(file_get_contents('php://input'), true);
$message = trim($input['message'] ?? '');

if (empty($message)) {
    echo json_encode(['response' => '¡Miau! ¿En qué puedo ayudarte?']);
    exit;
}

// If API key is set, use OpenAI
if (!empty(OPENAI_API_KEY)) {
    $response = queryOpenAI($message);
    if ($response) {
        echo json_encode(['response' => $response]);
        exit;
    }
}

// Fallback: return empty so JS uses predefined responses
echo json_encode(['response' => null]);

function queryOpenAI($message) {
    $systemPrompt = "Eres Misi, una gatica virtual y asistente amigable de B2 Domus, una empresa colombiana de diseño, fabricación e instalación de mobiliario a medida en Bogotá, Funza y alrededores. Tus respuestas deben ser cortas, cálidas y usar emojis de gato 🐱. No muestras precios, solo invitas a cotizar. Información clave:
- Servicios: Cocinas integrales, Closets y vestieres, Centros de entretenimiento, Muebles para oficina, Diseño y visualización 3D.
- Proceso: Visita y medidas → Diseño 3D → Cotización → Fabricación → Instalación.
- Contacto: WhatsApp 317 553 1220, email contacto@b2domus.com.
- Sin precios: siempre invitar a pedir cotización personalizada.
Sé breve, amigable y útil. Siempre termina ofreciendo ayuda adicional.";

    $ch = curl_init('https://api.openai.com/v1/chat/completions');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . OPENAI_API_KEY
        ],
        CURLOPT_POSTFIELDS => json_encode([
            'model' => OPENAI_MODEL,
            'messages' => [
                ['role' => 'system', 'content' => $systemPrompt],
                ['role' => 'user', 'content' => $message]
            ],
            'max_tokens' => 200,
            'temperature' => 0.7
        ]),
        CURLOPT_TIMEOUT => 15
    ]);

    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode === 200) {
        $data = json_decode($result, true);
        return $data['choices'][0]['message']['content'] ?? null;
    }

    return null;
}
