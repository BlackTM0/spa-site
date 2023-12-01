<?php
require __DIR__ . '/auth.php'; 
$login = getCurrentUser(); 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<div class="social"> 
    <div class="social-logo">
     <h3 class="social-text"> Cтудия красоты<br> для подростков</h3></div>
    
    <div class="social-item">
    <a href="https://wa.me/79621508603"><img class="social-img" src="images/wa.png" alt="WhatsApp" title="Написать в WhatsAp"> </a>
    <a href=""><img class="social-img" src="images/tg.png" alt="telegram" title="Написать в Telegram"> </a>
    <img class="social-img" src="images/tk.png"  alt="TikTok" title="Это Зло">
    <a href="tel:+74212467091" class="social-phone">+7 (4212) 46 70 91</a></div>
</div>  

<div class="container">
    <header class="header">
        <div class = "header-wrap wrap">
            <div class ="header-top">
                <div class="header-logo logo"> 
                    <a class="logo-link" href="#"><img class="logo-img" src="images/logo.png" width="120px"></a>
                             </div>
                 <nav class="header-menu"> 
                   <ul class="menu-list">
                          <li class="menu-item"><a class="menu-link-actions" href="actions.html">Акции</a>
                       
                        </li>
                         <li class="menu-item"><a class="menu-link" href="#">Услуги</a></li>
                         <li class="menu-item"><a class="menu-link" href="#">Отзывы</a></li>
                         <li class="menu-item"><a class="menu-link" href="#">Контакты</a></li>
                         <?php if($login!== null):?><li class="menu-item"><a class="menu-link" href="lk.php">Ваш ЛК, <?=$login ?></a></li>
                         <?php else:?><li class="menu-item"><a class="menu-link" href="login.php">Войти в кабинет</a></li>
                            <?php endif; ?>
                    </ul>
                   </nav>
                  </div>
                </div>
   
</div>
            </header>

         
           
 <div class="content"> 
    <div class="content-left-div"> 
        <a href=""><img class="content-left-div-img" src="images/leftdiv.jpg" ></a>
</div>
<div class="content-right-div">
   
    <div class="content-right-div-top">
    <img class="content-right-div-top-img" src="images/sale50.jpg">
      
    </div>
    
    <div class="content-right-div-bottom">
    
    <div class="content-right-div-bottom-text">
    <?php if($login!== null):?>
    <h4 class="personal">Добро пожаловать <?=$login?><br><br><span style="color:red">Воспользуйся персональной скидкой 20% на уходовую косметику!</span> </h4>
<?php else:?>
    <h4 class="personal">Чтобы увидеть персональные предложения <a class="personal-link" href="login.php">авторизуйтесь</a></h4>
<?php endif; ?>
</div>
    </div>

    <div class="wellcome-text">
    <h3 class="main-text"> Успейте записаться по акции</h3>
    <input class="send-phone" placeholder="Телефон"></input><button class="btn-in">Записаться</button></div>
</div>
</div>
    <div class="string-text">
        <h2 class="string-text-text">Современное оборудование и интерьер</h2></div> 

<div class="int-div"> 
    <img class="int-div-img" src="images/int1.jpg"> 
    <img class="int-div-img" src="images/int2.jpg"> 
    <img class="int-div-img" src="images/int3.jpg"> 
    <img class="int-div-img" src="images/int4.jpg"> 
    <img class="int-div-img" src="images/int5.jpg"> 
    <img class="int-div-img" src="images/int6.jpg"> 

</div>

<div class="string-text">
        <h2 class="string-text-text">Услуги</h2></div> 

<div class="services">

    <div class="service-item"> 
        
        <img class="service-item-img" src="images/manik.png">
        <div class="service-opisanie">
        <h4 class="service-name">Маникюр</h4>
        <h4 class="service-item-text"> Выполняется в полном соответствии с мировыми стандртами. Этапы выполнения: <ul class="service-list-list"><li>Этап 1</li><li>Этап 2</li><li>Этап 3</li></ul></h4> 
        <h3 class="service-name-price">990 рублей</h3>
        <button class="btn-in">Записаться</button></div>
</div> 

<div class="service-item"> 
        
        <img class="service-item-img" src="images/epil.png">
        <div class="service-opisanie">
        <h4 class="service-name">Эпиляция</h4>
        <h4 class="service-item-text"> Выполняется в полном соответствии с мировыми стандртами. Этапы выполнения: <ul class="service-list-list"><li>Этап 1</li><li>Этап 2</li><li>Этап 3</li></ul></h4> 
        <h3 class="service-name-price">1790 рублей</h3>
        <button class="btn-in">Записаться</button></div>
</div> 

<div class="service-item"> 
        
        <img class="service-item-img" src="images/manik.jpg">
        <div class="service-opisanie">
        <h4 class="service-name">Обертывание деньгами</h4>
        <h4 class="service-item-text"> Выполняется в полном соответствии с мировыми стандртами. Этапы выполнения: <ul class="service-list-list"><li>Этап 1</li><li>Этап 2</li><li>Этап 3</li></ul></h4> 
        <h3 class="service-name-price">N++ рублей</h3>
        <button class="btn-in">Записаться</button></div>
</div> 

<div class="service-item"> 
        
        <img class="service-item-img" src="images/manik.jpg">
        <div class="service-opisanie">
        <h4 class="service-name">Педикюр</h4>
        <h4 class="service-item-text"> Выполняется в полном соответствии с мировыми стандртами. Этапы выполнения: <ul class="service-list-list"><li>Этап 1</li><li>Этап 2</li><li>Этап 3</li></ul></h4> 
        <h3 class="service-name-price">990 рублей</h3>
        <button class="btn-in">Записаться</button></div>
</div> 

<div class="service-item"> 
        
        <img class="service-item-img" src="images/manik.jpg">
        <div class="service-opisanie">
        <h4 class="service-name">Маникюр</h4>
        <h4 class="service-item-text"> Выполняется в полном соответствии с мировыми стандртами. Этапы выполнения: <ul class="service-list-list"><li>Этап 1</li><li>Этап 2</li><li>Этап 3</li></ul></h4> 
        <h3 class="service-name-price">990 рублей</h3>
        <button class="btn-in">Записаться</button></div>
</div> 

<div class="service-item"> 
        
        <img class="service-item-img" src="images/manik.jpg">
        <div class="service-opisanie">
        <h4 class="service-name">Маникюр</h4>
        <h4 class="service-item-text"> Выполняется в полном соответствии с мировыми стандртами. Этапы выполнения: <ul class="service-list-list"><li>Этап 1</li><li>Этап 2</li><li>Этап 3</li></ul></h4> 
        <h3 class="service-name-price">990 рублей</h3>
        <button class="btn-in">Записаться</button></div>
</div> 

</div>
<div class="string-text">
        <h2 class="string-text-text">Отзывы</h2></div> 
        
        <script src="https://res.smartwidgets.ru/app.js" defer></script>
<div class="sw-app" data-app="0000f71d30865433a71afe92b0d1fcce"></div>

<script src="https://res.smartwidgets.ru/app.js" defer></script>
<div class="sw-app" data-app="3aebb9c75a3277758f078eac2018a249"></div>
</div> 
</body>
</html>

