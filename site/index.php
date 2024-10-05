<?php
include 'header.html';

$name = $email = $source = '';
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    $email = htmlspecialchars($_GET['email']);
    $source = htmlspecialchars($_GET['source']);
}
?>

<form action="home.php" method="post">
    <label for="name">ФИО:</label>
    <input type="text" id="name" name="name" value="<?= $name ?>" required><br>

    <label for="email">Ваш е-майл:</label>
    <input type="email" id="email" name="email" placeholder="example@example.com" value="<?= $email ?>" required><br>

    <label for="message">Сообщение:</label>
    <textarea id="message" name="message" required></textarea><br>

    <label for="category">Тема обращения:</label>
    <select id="category" name="category" required>
        <option value="propose">Предложение</option>
        <option value="complaint">Жалоба</option>
    </select><br>

    <label for="consent">
        <input type="checkbox" id="consent" name="consent">
        Даю согласие на обработку данных
    </label><br>

    <label>
        <input type="radio" name="source" value="internet" <?= $source == 'internet' ? 'checked' : '' ?>>
        Реклама из интернета
    </label><br>
    <label>
        <input type="radio" name="source" value="friends" <?= $source == 'friends' ? 'checked' : '' ?>>
        Рассказали друзья
    </label><br>

    <button type="submit">Отправить</button>
</form>
