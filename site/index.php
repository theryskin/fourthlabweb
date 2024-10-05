<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <style>
        body { font-family: Arial, sans-serif; }
        header { background-color: #4CAF50; color: white; padding: 10px; text-align: center; }
        footer { background-color: #4CAF50; color: white; padding: 10px; text-align: center; position: fixed; bottom: 0; width: 100%; }
        .selected_menu { background-color: #45a049; }
        nav a { color: white; text-decoration: none; padding: 10px; display: inline-block; }
        nav a:hover { background-color: #45a049; }
    </style>
</head>
<body>
    <header>
        <h1>Лабораторная работа № 3</h1>
        <nav>
            <?php
            $menu = array(
                "Главная" => "index.php",
                "О нас" => "about.php",
                "Контакты" => "contact.php"
            );

            foreach ($menu as $name => $link) {
                $class = ($link == basename($_SERVER['PHP_SELF'])) ? ' class="selected_menu"' : '';
                echo "<a href=\"$link\"$class>$name</a>";
            }
            ?>
        </nav>
    </header>

    <main>
        <h1>Добро пожаловать на главную страницу!</h1>
        <p>Это пример статического текста на главной странице.</p>
        <ul>
            <?php
            $items = array("Пункт 1", "Пункт 2", "Пункт 3");
            foreach ($items as $item) {
                echo "<li>$item</li>";
            }
            ?>
        </ul>
        <div>
            <?php
            $photos = array("fotos/foto1.jpg", "fotos/foto2.jpg");
            $index = date("s") % 2;
            echo "<img src=\"$photos[$index]\" alt=\"Меняющаяся фотография\" style=\"width: 300px; height: auto;\">";
            ?>
        </div>
    </main>

    <footer>
        <?php
        $date = date("d.m.Y H:i:s");
        echo "Сформировано $date";
        ?>
    </footer>
</body>
</html>
