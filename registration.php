<?php
    require 'db.php';?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/style.css?<?echo time();?>">
    <link rel="shortcut icon" href="img/1.ico">
</head>
<body>
    <div class="wrapper">
        <div style="width: 100%; height: 600px; display: flex; align-items: center;justify-content: center;">
            <div style="width: 500px;
                                                    height: 500px;
                                                    background-color: darkgreen;
                                                    border: 5px ridge #f0d133;
                                                    display: flex;
                                                    flex-direction: column;
                                                    justify-content: center;
                                                    align-items: center;
                                                    border-radius: 20px;">
                <form method="post" action="registration.php">
                    <p class="word-authorisation">Регистрация</p><br/>
                    <p class="login-and-password">Логин:</p> <input type="text" name="login" value="<?php echo @$data['login']; ?>"><br/>
                    <p class="login-and-password">Пароль:</p> <input type="password" name="password" value="<?php echo @$data['password']; ?>"><br />
                    <p class="login-and-password">Введите ваш пароль ещё раз:</p> <input type="password" name="password_2" value="<?php echo @$data['password_2']; ?>"><br />
                    <p class="login-and-password">Email:</p> <input type="email" name="email" value="<?php echo @$data['email']; ?>"><br />
                    <br/>
                    <button style="margin-left: 30px;" type="submit" name="do_signup">Зарегистрироваться</button>
                </form>                
                <?php   $data = $_POST;
	                    if( isset($data['do_signup']))
                        {
                            if(trim($data['login'])=='')
                            {
                                $errors[] = 'Введите логин!';
                            }

                            if($data['password']=='')
                            {
                                $errors[] = 'Введите пароль!';
                            }

                            if($data['password_2']!=$data['password'])
                            {
                                $errors[] = 'Повторный пароль введён неверно!';
                            }

                            if(trim($data['email'])=='')
                            {
                                $errors[] = 'Введите email!';
                            }

                            if(R::count('users', "login = ?", array($data['login'])) > 0)
                            {
                                $errors[] = 'Пользователь с таким логином уже существует!';
                            }

                            if(R::count('users', "email = ?", array($data['email'])) > 0)
                            {
                                $errors[] = 'Пользователь с таким email уже существует!';
                            }

                            if(empty($errors))
                            {
                                $user = R::dispense('users');
                                $user->login = $data['login'];
                                $user->password = password_hash($data['password'],PASSWORD_DEFAULT);
                                $user->email = $data['email'];
                                $user->brovser = $_SERVER['HTTP_USER_AGENT'];
                                R::store($user);
                                header("Location: http://localhost:8080/ANASTASIYa/index.php");
                            }else
                            {
                                echo '<div style="color: red; margin-top: 10px;" id="errors">'.array_shift($errors).'</div>';
                            }
                        }
                ?>
            </div>
        </div>
    </div>
</body>
</html>