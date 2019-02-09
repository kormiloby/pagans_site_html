<?php
$requestBody = file_get_contents('php://input');
$requestBody = json_decode($requestBody, true);

if ($requestBody === null) {
    header('HTTP/1.1 400 Bad Request');
    echo json_encode([
        'errorMessage' => 'Please provide valid JSON',
    ]);
    die;
}

$subject = "Анкета новичка.";
$mailBody = "Имя: " . $requestBody['firstName'] . "\n";
$mailBody .= "Фамилия: " . $requestBody['lastName'] . "\n";
$mailBody .= "Email: " . $requestBody['email'] . "\n";
$mailBody .= "Телефон: " . $requestBody['phoneNumber'] . "\n";
$mailBody .= "Возраст: " . $requestBody['age'] . "\n";

if (mail("kormilo@tut.by", $subject, $mailBody)) {
    echo "Email send!!!!!";
} else {
    echo "Email not send!!!!!";
}
die;
?>
