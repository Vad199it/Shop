<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalog of product</title>
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

        <section class="store">

            <div class="tittle-store">
                <h1>Каталог</h1>
            </div>

            <div class="basket">
                <div class="element-title">
                    <h3>Моя корзина</h3>
                </div>
                <div class="calculator-pair">
                    <h2>Карандаши</h2>
                    <input type="text" class="counter1" id="counterPencil-calculator" value="0" disabled>
                </div>
                <div class="calculator-pair">
                    <h2>Ластики</h2>
                    <input type="text" class="counter1" id="rubber-calculator" value="0" disabled>
                </div>
                <div class="calculator-pair">
                    <h2>Ручки</h2>
                    <input type="text" class="counter1" id="pen-calculator" value="0" disabled>
                </div>
                <div class="calculator-pair">
                    <h2>Корректоры</h2>
                    <input type="text" class="counter1" id="corrector-calculator" value="0" disabled>
                </div>
                <div class="calculator-pair">
                    <h2>Линейки</h2>
                    <input type="text" class="counter1" id="ruler-calculator" value="0" disabled>
                </div>
                <div class="calculator-pair">
                    <h2>Пастель</h2>
                    <input type="text" class="counter1" id="pastel-calculator" value="0" disabled>
                </div>
                <div class="calculator-pair">
                    <h2>Пеналы</h2>
                    <input type="text" class="counter1" id="pencilCase-calculator" value="0" disabled>
                </div>
                <div class="calculator-pair">
                    <h2>Фломастеры</h2>
                    <input type="text" class="counter1" id="markers-calculator" value="0" disabled>
                </div>
                <div class="calculator-pair">
                    <h2>Точилки</h2>
                    <input type="text" class="counter1" id="pencilSharpener-calculator" value="0" disabled>
                </div>
                <div class="calculator-pair common-price">
                    <h2>Сумма к оплате</h2>
                    <input type="text" class="counter1" id="commonPrice" value="0" disabled>
                </div>
            </div>

            <div class="elements-set">
                <table class="table">
                    <tr>
                        <td class="element">
                            <div class="img img-1"></div>
                            <div class="calculator">
                                <input type="text" class="counter" id="counterPencil" value="0"
                                       onchange="doMatchValue( x = counterPencil )">
                                <div class="active-part-calculate">
                                    <button class="button" onclick="decrement( x = counterPencil )">&mdash;</button>
                                    <button class="button" onclick="increment( x = counterPencil )">&#10010;</button>
                                </div>
                            </div>
                            <div class="element-title">
                                <h3>Карандаши</h3>
                            </div>
                            <div class="element-price">
                                <span>15 рублей</span>
                            </div>
                        </td>
                        <td class="element">
                            <div class="img img-2"></div>
                            <div class="calculator">
                                <input type="text" class="counter" id="rubber" value="0" onchange="doMatchValue( x = rubber )">
                                <div class="active-part-calculate">
                                    <button class="button" onclick="decrement(x = rubber )">&mdash;</button>
                                    <button class="button" onclick="increment(x = rubber )">&#10010;</button>
                                </div>
                            </div>
                            <div class="element-title">
                                <h3>Ластики</h3>
                            </div>
                            <div class="element-price">
                                <span>1.5 рубля</span>
                            </div>
                        </td>
                        <td class="element">
                            <div class="img img-3"></div>
                            <div class="calculator">
                                <input type="text" class="counter" id="pen" value="0"
                                       onchange="doMatchValue( x = pen )">
                                <div class="active-part-calculate">
                                    <button class="button" onclick="decrement(x = pen )">&mdash;</button>
                                    <button class="button" onclick="increment(x = pen )">&#10010;</button>
                                </div>
                            </div>
                            <div class="element-title">
                                <h3>Ручки</h3>
                            </div>
                            <div class="element-price">
                                <span>3 рубля</span>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="element">
                            <div class="img img-4"></div>
                            <div class="calculator">
                                <input type="text" class="counter" id="corrector" value="0"
                                       onchange="doMatchValue( x = corrector )">
                                <div class="active-part-calculate">
                                    <button class="button" onclick="decrement(x = corrector )">&mdash;</button>
                                    <button class="button" onclick="increment(x = corrector )">&#10010;</button>
                                </div>
                            </div>
                            <div class="element-title">
                                <h3>Корректоры</h3>
                            </div>
                            <div class="element-price">
                                <span>5 рублей</span>
                            </div>
                        </td>
                        <td class="element">
                            <div class="img img-5"></div>
                            <div class="calculator">
                                <input type="text" class="counter" id="ruler" value="0"
                                       onchange="doMatchValue( x = ruler )">
                                <div class="active-part-calculate">
                                    <button class="button" onclick="decrement(x = ruler )">&mdash;</button>
                                    <button class="button" onclick="increment(x = ruler )">&#10010;</button>
                                </div>
                            </div>
                            <div class="element-title">
                                <h3>Линейки</h3>
                            </div>
                            <div class="element-price">
                                <span>1 рубль</span>
                            </div>
                        </td>
                        <td class="element">
                            <div class="img img-6"></div>
                            <div class="calculator">
                                <input type="text" class="counter" id="pastel" value="0"
                                       onchange="doMatchValue( x = pastel )">
                                <div class="active-part-calculate">
                                    <button class="button" onclick="decrement(x = pastel )">&mdash;</button>
                                    <button class="button" onclick="increment(x = pastel )">&#10010;</button>
                                </div>
                            </div>
                            <div class="element-title">
                                <h3>Пастель</h3>
                            </div>
                            <div class="element-price">
                                <span>25 рублей</span>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="element">
                            <div class="img img-7"></div>
                            <div class="calculator">
                                <input type="text" class="counter" id="pencilCase" value="0" onchange="doMatchValue( x = pencilCase )">
                                <div class="active-part-calculate">
                                    <button class="button" onclick="decrement(x = pencilCase )">&mdash;</button>
                                    <button class="button" onclick="increment(x = pencilCase )">&#10010;</button>
                                </div>
                            </div>
                            <div class="element-title">
                                <h3>Пеналы</h3>
                            </div>
                            <div class="element-price">
                                <span>10 рублей</span>
                            </div>
                        </td>
                        <td class="element">
                            <div class="img img-8"></div>
                            <div class="calculator">
                                <input type="text" class="counter" id="markers" value="0" onchange="doMatchValue( x = markers )">
                                <div class="active-part-calculate">
                                    <button class="button" onclick="decrement(x = markers )">&mdash;</button>
                                    <button class="button" onclick="increment(x = markers )">&#10010;</button>
                                </div>
                            </div>
                            <div class="element-title">
                                <h3>Фломастеры</h3>
                            </div>
                            <div class="element-price">
                                <span>20 рублей</span>
                            </div>
                        </td>
                        <td class="element">
                            <div class="img img-9"></div>
                            <div class="calculator">
                                <input type="text" class="counter" id="pencilSharpener" value="0" onchange="doMatchValue( x = pencilSharpener )">
                                <div class="active-part-calculate">
                                    <button class="button" onclick="decrement(x = pencilSharpener )">&mdash;</button>
                                    <button class="button" onclick="increment(x = pencilSharpener )">&#10010;</button>
                                </div>
                            </div>
                            <div class="element-title">
                                <h3>Точилки</h3>
                            </div>
                            <div class="element-price">
                                <span>2.5 рубля</span>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

        </section>

        <footer class="footer">
            <div class="footer_text">
                <span>(с) 1761-2018 Faber-Castell</span>
            </div>
            <div class="footer_SS">
                <div class="footer_SS_img VK">
                    <a href="https://vk.com/id137656634"></a>
                </div>
            </div>
            <div class="caption">
                <span>Автор: Минин Вадим</span>
            </div>
        </footer>
    </div>

<script src="js/js.js"></script>
</body>
</html>