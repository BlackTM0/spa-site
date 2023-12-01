<?php
if(!empty($_POST)) { 
    $login =$_POST['login'] ??''; 
    $password =$_POST['password'] ??'';
    
    require __DIR__ . '/auth.php'; 
if(checkPassword($login, $password)) { 
  setcookie('login', $login, 0, '/'); 
  setcookie('password', $password, 0, '/');
  header('Location: /index.php'); 
} else {
$error = 'Ошибка авторизации'; 

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-login.css">

</head>
<body>

<?php 
if(isset($error)): ?>
<span style="color:red"><?=$error?></span><?php endif; ?>
<form action="login.php" method="post">
<div class="login">
           <input name="login" type="text" placeholder="Логин" class="login-login">
           <input name="password" type="password" placeholder="Пароль" class="login-login" >
           <input name="submit" type="submit" value="Войти" class="login-btn">
           </div>
       </form>

</body>
</html>