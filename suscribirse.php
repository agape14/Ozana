<?php
include 'db_connection.php';
$secretKey = '6LdpwS8qAAAAABw5AEVOYsAJO4nOu4A_j_QP6Vxu'; // Cambia esto por tu clave secreta de reCAPTCHA
// Recoger el correo electrónico del formulario
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$recaptchaResponse = $_POST['g-recaptcha-response'];

// Verificar el CAPTCHA
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptchaResponse");
$responseKeys = json_decode($response, true);

if (intval($responseKeys["success"]) !== 1) {
    echo json_encode(['success' => false, 'message' => 'Por favor completa el CAPTCHA.']);
    exit();
}

// Validar el correo electrónico
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Preparar la consulta
    $stmt = $conn->prepare("INSERT INTO suscripciones (email) VALUES (?)");
    $stmt->bind_param("s", $email);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Responder con éxito
        echo json_encode(['success' => true, 'message' => '¡Gracias por suscribirte!']);
    } else {
        // Responder con error
        echo json_encode(['success' => false, 'message' => 'Error: ' . $stmt->error]);
    }

    // Cerrar la declaración
    $stmt->close();
} else {
    // Responder con correo inválido
    echo json_encode(['success' => false, 'message' => 'Correo electrónico inválido.']);
}


// Cerrar la conexión
$conn->close();
?>
