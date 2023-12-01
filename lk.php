<?php
require __DIR__ . '/auth.php'; 
$login = getCurrentUser(); 

?>

<!DOCTYPE html>
<html lang="en">
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
                    <a class="logo-link" href="index.php"><img class="logo-img" src="images/logo.png" width="120px"></a>
                             </div>
                 <nav class="header-menu"> 
                   <ul class="menu-list">
                          <li class="menu-item"><a class="menu-link-actions" href="actions.html">Акции</a>
                       
                        </li>
                         <li class="menu-item"><a class="menu-link" href="#">Услуги</a></li>
                         <li class="menu-item"><a class="menu-link" href="#">Отзывы</a></li>
                         <li class="menu-item"><a class="menu-link" href="#">Контакты</a></li>
                        
                         <li class="menu-item">  <a class="menu-link" href="#" id="out" onClick="clearLoginCookieAndRedirectToIndex()">                   
                         
                         Выйти из личного кабинета</a></li> 
                
                          
                    </ul>
                   </nav>
                  </div>
                </div>
   
</div>
            </header>

 <div class="container-lk"> 
    <div class="left-column"> 
        <div class="left-column-top"> 
            Мои заказы</div> 
            <ul class="order-list"><LI>1</LI>
            <LI>2</LI>
            <LI>3</LI>
            <LI>4</LI>
</ul> 
<div class="left-column-bottom">
    <h4 class="personal-discount" id="wet2">
    </h4> </div>
</div>




<div class="right-column"> 
    <div class="right-column-top"> 
        <h4 class="fio">ФИО клиента</h4></div> 

        <div class="right-column-bottom"> 
            <h4 class="dr"> Введите дату Вашего рождения и получите скидку 5% на всё!</h4> 
            <input type="date" class="date-type" id="birth"></input></div> 
            <button id="wet">Получить подарок</button> 
</div>
<script src="script.js"></script>
</body>


</script>
</html>