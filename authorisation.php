<?php
    require 'db.php';?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorization</title>
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/style.css?<?echo time();?>">
    <link rel="shortcut icon" href="img/1.ico">
</head>
<body>
    <div class="wrapper">
        <div class="authorisation">
            <div class="border-authorisation">
                <form action="authorisation.php" method="POST">
                <p class="word-authorisation">Авторизация</p><br/>
                <p class="login-and-password">Логин:</p> <input type="text" name="login" value="<?php echo @$data['login']; ?>"><br/>
                <p class="login-and-password">Пароль:</p> <input type="password" name="password" value="<?php echo @$data['password']; ?>">
                <br/>
                <button type="submit" name="do_login">Войти</button>
                </form>
                <?php   $data = $_POST;               
                if(isset($data['do_login']))
                {
                    $errors = array();
                    $user = R::findOne('users', 'login = ?', array($data['login']));
                    if($user)
                    {
                        if(password_verify($data['password'], $user->password))
                        {
                            $_SESSION['logged_user'] = $user;
                            header("Location: http://localhost:8080/ANASTASIYa/index.php");
                        }else
                        {
                        $errors[] = 'Неверно введён пароль!'; 
                        }
                    }else
                    {
                    $errors[] = 'Пользователь с таким логином не найден!';
                    }
                    if(!empty($errors))
                    {
                        echo '<div style="margin-top: 20px; color: red;" id="errors">'.array_shift($errors).'</div>';
                    }			            
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>