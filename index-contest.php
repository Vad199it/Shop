<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contest</title>
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/style.css?<?echo time();?>">
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

    <section class="slider-contest">
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