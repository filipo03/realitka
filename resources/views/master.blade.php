<!DOCTYPE html>
<html lang="sk">
<title>Mrkvosoft realitka</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
    body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
    body {font-size:16px;}
    .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
    .w3-half img:hover{opacity:1}
</style>

<!-- menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container">
        <h1 class="w3-padding-64"><b>Mrkvosoft<br>Realitka</b></h1>
    </div>
    <div class="w3-bar-block">
<?php if(Auth::guest()):?>
        <a href="<?php echo url(); ?>/home" class="w3-bar-item w3-button w3-hover-white">Domov</a>
        <a href="<?php echo url(); ?>/inzerat/inzeraty" class="w3-bar-item w3-button w3-hover-white">Inzeráty</a>
        <a href="<?php echo url(); ?>/auth/register" class="w3-bar-item w3-button w3-hover-white">Registrácia</a>
        <a href="<?php echo url(); ?>/auth/login" class="w3-bar-item w3-button w3-hover-white">Prihlásenie</a>
    <?php endif; ?>
    <?php if(Auth::user()):?>
    <a href="<?php echo url(); ?>/home" class="w3-bar-item w3-button w3-hover-white">Domov</a>
    <a href="<?php echo url(); ?>/inzerat/inzeraty" class="w3-bar-item w3-button w3-hover-white">Inzeráty</a>
    <a href="<?php echo url(); ?>/user/user" class="w3-bar-item w3-button w3-hover-white">Používateľ</a>
    <a href="<?php echo url(); ?>/auth/logout" class="w3-bar-item w3-button w3-hover-white">Odhlásenie</a>
    <?php endif; ?>
    </div>
</nav>

<!--  menu na smartphonoch -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
    <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
    <span>Mrkvosoft Realitka</span>
</header>

<!-- daký efekt (neviem aký) -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }

    </script>
