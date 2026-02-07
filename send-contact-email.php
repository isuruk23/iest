<?php
declare(strict_types=1);

// Always return JSON
header('Content-Type: application/json; charset=utf-8');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods: POST, OPTIONS');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method not allowed']);
    exit;
}

// PHPMailer (manual include based on your folder structure)
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

// Read incoming form fields (FormData -> $_POST)
$name    = trim((string)($_POST['name'] ?? ''));
$email   = trim((string)($_POST['email'] ?? ''));
$phone   = trim((string)($_POST['phone'] ?? ''));
$subject = trim((string)($_POST['subject'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));

// Basic validation
$errors = [];
if ($name === '') $errors[] = 'Customer name is required';
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
if ($phone === '') $errors[] = 'Contact number is required';
if ($subject === '') $errors[] = 'subject  is required';
//if ($remark === '') $errors[] = 'Remark is required';

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Validation failed', 'errors' => $errors]);
    exit;
}

// Default response
http_response_code(200);
$response = ['ok' => false, 'message' => 'Unknown error'];

try {
    $mail = new PHPMailer(true);

    // SMTP Settings (Gmail)
    $mail->isSMTP();
    $mail->Host       = 'smtp.titan.email';
    $mail->SMTPAuth   = true;
     $mail->Username   = 'info@iest.lk';  //host username (email)
     $mail->Password   = 'Iea@34d56U'; // host Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Sender / Receiver
    $mail->setFrom('info@iest.lk', 'Website Contact Form'); // sender
     $mail->addAddress('info@iest.lk', 'IEST Sales Team');   // receiver
    // $mail->addBCC('nethsaradilshan97@gmail.com');




    // Reply-to: customer
    $mail->addReplyTo($email, $name);

    // Email Content
    $mail->isHTML(true);
    // $mail->Subject = "New Inquiry - " . ($product ?: 'Product') . " - " . $name;
    $mail->Subject = "IEST - New Contact Form Submission from " . $name;

    $safeName    = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $safeEmail   = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $safePhone   = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
    $safesubject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
    $safeMessage = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

    $mail->Body = "
        <h3>New Customer Inquiry</h3>
        <p><b>Name:</b> {$safeName}</p>
        <p><b>Email:</b> {$safeEmail}</p>
        <p><b>Phone:</b> {$safePhone}</p>
        <p><b>subject:</b> {$safesubject}</p>
        <p><b>Message:</b> {$safeMessage}</p>
    ";

    $mail->AltBody =
        "New Customer Inquiry\n\n" .
        "Name: $name\n" .
        "Email: $email\n" .
        "Phone: $phone\n" .
        "subject: $subject\n" .
        "Message: $message\n";

    $mail->send();

    $response = ['ok' => true, 'message' => 'Email sent successfully'];
} catch (Exception $e) {
    http_response_code(500);
    $response = [
        'ok' => false,
        'error' => 'Email sending failed',
        'details' => $mail->ErrorInfo,
    ];
}

echo json_encode($response);
exit;
?> 