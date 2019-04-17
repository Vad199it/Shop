<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/style.css?<?echo time();?>">
    <title>History of company</title>
    <link rel="shortcut icon" href="img/1.ico">
</head>
<body>
<?php  require "db.php"; ?>
    <div class="wrapper">
        <header class="header">
            <div class="author">
            <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
            <script src="//yastatic.net/share2/share.js"></script>
            <div style="margin-right: 100px;" class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,twitter"></div>
                <p class="index-reg">
                    <?php if(isset($_SESSION['logged_user'])) :?>
                        Добро пожаловать, <?php echo $_SESSION['logged_user']->login; ?>!<br>
                        <a href="logout.php" style="color: #f0d133;">Выйти</a>
                    <?php else : ?>   
                        <a href="authorisation.php" style="color: #f0d133;">Авторизоваться</a><br>
                        <a href="registration.php" style="color: #f0d133;">Зарегистрироваться</a>
                    <?php endif; ?> 
                </p>
            </div>
<div class="wrapper">
    <header class="header">
        <div class="logo-container">
            <div class="logo"><a href="index.php"><img  src="img/logo.png"></a></div>
        </div>
        <div class="nav-container">
            <ul class="nav">
                <li>
                    <a href="index.php">Главная</a>
                </li>
                <li>
                    <a href="index-history.php">История</a>
                </li>
                <li>
                    <a href="index-catalog.php">Каталог</a>
                </li>
                <li>
                    <a href="index-videos.php">Видео</a>
                </li>
                <li>
                    <a href="index-author.php">Об авторе</a>
                </li>
                <li>
                    <a href="index-contest.php">Конкурс</a>
                </li>
            </ul>
        </div>
    </header>

    <section class="history-object">
        <h1 class="history-title">История</h1>
        <div class="history-first-part">
            <div class="img-author"></div>
            <div class="info-first-history">
                <h2 class="history-subtitle">Kaспар Фабер (1730 - 1784)</h2>
                <p class="history-paragraph" id="history-paragraph1">
                    Первые упоминания о производителях карандашей
                    в имперском городе Нюрнберге были найдены около
                    1960 г. Многие ремесленники также открывали магазины
                    в близлежащих деревнях, особенно в Штейне,  в пределах
                    владений маркиза Ансбаха. Там ремесленники не подвергались
                    такому же строгому контролю как в Нюрнберге, поэтому у них
                    было конкурентное преимущество.
                </p>
                <p class="history-paragraph">
                    Одним из них был производитель мебели Каспар Фабер. Сначала
                    он работал на местных продавцов, но в свободное время он
                    производил карандаши за свой счет. Скоро он стал настолько
                    успешным, что смог открыть свой собственный бизнес. С этих
                    скромных начинаний компании суждено было стать в будущем всемирно известной.
                </p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer_text">
            <span>(с) 1761-2018 Faber-Castell</span>
        </div>
        <div class="footer_SS">
            <a href="https://vk.com/id137656634">
                <div class="footer_SS_img VK">
                </div>
            </a>
        </div>
        <div class="caption">
            <span>Автор: Минин Вадим</span>
        </div>
    </footer>
</div>
</body>
</html>