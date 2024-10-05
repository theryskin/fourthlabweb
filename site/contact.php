<?php
include 'header.html';
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    $category = $_POST['category'];
    $attachment = isset($_POST['attachment']) ? htmlspecialchars($_POST['attachment']) : '';

    echo "<p>Здравствуйте, $name!</p>";

    if ($category == 'propose') {
        echo "<p>Спасибо за ваше предложение:</p>";
    } else {
        echo "<p>Мы рассмотрим Вашу жалобу:</p>";
    }

    echo "<textarea readonly>$message</textarea>";

    if ($attachment) {
        echo "<p>Вы приложили следующий файл: $attachment</p>";
    }

    echo "<a class='btn' href='index.php?name=$name&email=" . urlencode($_POST['email']) . "&source=" . urlencode($_POST['source']) . "'>Заполнить снова</a>";
} else {
    echo "<p>Ошибка: данные формы не были отправлены.</p>";
}
?>
