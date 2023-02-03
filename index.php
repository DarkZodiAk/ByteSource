<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waterfall и Agile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header class="parent">
        <img src="img/logo.png" alt="logo" class="pic">
        <a href="#">Waterfall и Agile</a>
        <a href="#">Что такое DevOps?</a>
        <a href="#">Инструменты DevOps-инженера</a>
    </header>

    <div id="lside">
        <br>
        <span>Меню отображения</span>
        <a href="index.php?C=0">Отобразить все</a>
        <a href="index.php?C=1">Предыстория</a>
        <a href="index.php?C=2">Появление Waterfall</a>
        <a href="index.php?C=3">Методология Agile</a>
        <a href="index.php?C=4">Waterfall и Agile</a>
    </div>

    <div id="rside"></div>

    <input type="button" value="Поменять тему" id="theme" onclick="theme()">

    <div class="main">
        <h2>Технологии разработки: Waterfall и Agile</h2>
        <?php
        $C = 0;
        if(isset($_GET["C"]))
            $C = $_GET["C"];
        switch($C){
            case "0": echo(file_get_contents("files/all.html")); break;
            case "1": echo(file_get_contents("files/prehistory.html")); break;
            case "2": echo(file_get_contents("files/waterfall.html")); break;
            case "3": echo(file_get_contents("files/agile.html")); break;
            case "4": echo(file_get_contents("files/wat_agile.html")); break;
        }
        ?>

        <br><br>
        <form action="#" method="POST" id="form">
            <fieldset>
                <legend>Оставьте отзыв!</legend>
                Имя (на русском языке с большой буквы)
                <br>
                <input type="text" name="text" required placeholder="Имя" pattern="[А-ЯЁ][А-Яа-яЁё]+">
                <br><br>
                Адрес электронной почты
                <br>
                <input type="email" name="email" required placeholder="Адрес почты" pattern=".+@.+">
                <br><br>
                Пол
                <br>
                <input type="radio" name="radiobutton" required value="Мужской"> Мужской
                <input type="radio" name="radiobutton" required value="Женский"> Женский
                <br><br>
                <span>Ваша оценка: 6/10</span>
                <br>
                <input type="range" min="1" max="10" id="irange" name="irange" oninput="rate()">
                <br><br>
                Расскажите, что вам понравилось
                <br>
                <textarea name="textarea" placeholder="Необязательно"></textarea>
            </fieldset>
            <input type="submit" name="sender" value="Отправить" onclick="send(this.form)">
            <br>
            <input type="reset" value="Очистить">
        </form>
        <?php
            if(isset($_POST['text']) && isset($_POST['email']) && isset($_POST['radiobutton'])){
                $name = $_POST['text'];
                $email = $_POST['email'];
                $gender = $_POST['radiobutton'];
                $rate = $_POST['irange'];
                $text = "";
                if(isset($_POST['textarea'])){
                    $text = $_POST['textarea'];
                    $text = "Вот, что вы еще написали: $text";
                }
                echo "<div class='info'>Имя: $name, почта: $email, пол: $gender, оценка: $rate.   $text</div>";
            }  ?>
            
        <br><br>
        <form>
            Попробуйте написать свой текст!<br>
            <input type="text" placeholder="Заголовок" name="header">
            <br><textarea placeholder="Какой-то текст" name="sometxt"></textarea><br>
            <input type="button" value="Создать" onclick="add(this.form)">
            <input type="reset" value="Очистить">
        </form>

        <div id="addition"></div>

    </div>


    <footer>
        <div class="author">Автор работы: Павлусенко Евгений Максимович</div>
        <div class="email">Почта: pavlusenko_em@edu.surgu.ru</div>
    </footer>
    
    <script src="js/main.js" defer></script>
</body>
</html>