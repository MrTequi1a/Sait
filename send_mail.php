<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "forcallofduty38@gmail.com";
    $subject = "Новое сообщение с сайта";
    $body = "Имя: $name\nEmail: $email\nСообщение:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение отправлено успешно!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
} else {
    echo "Неправильный метод отправки.";
}
?>