<?php 
session_start();
require_once('connect.php'); 


?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">
    <head>
        <title>جيل الخير</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/fontawesome.css" />
        <link rel="stylesheet" type="text/css" href="css/w3.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        
    </head>
<body>
<div class="web-container">
  <img src="images/color-ribbon.jpeg" width="100%"  style="height:10px;display:block;">
<nav class="navbar navbar-expand-md   ">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo w3-card-4" alt="logo"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="custom-toggler navbar-toggler green-color" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon "></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item text-center nav-item-style ">
        <a class="nav-link" href="index.php"><i class="fas fa-home gold-color " > </i> <br class="w3-hide-small w3-hide-midume br-hide"> الصفحة الرئيسية</a>
      </li>
      <li class="nav-item text-center nav-item-style">
        <a class="nav-link" href="about-us.php"> <i class="fas fa-question text-center red-color" > </i> <br class="w3-hide-small w3-hide-midume br-hide"> من نحن</a>
      </li>
      <li class="nav-item text-center nav-item-style">
        <a class="nav-link" href="fees.php"> <i class="fas   fa-money-check-alt text-center " style="color:pink;"></i> <br class="w3-hide-small w3-hide-midume br-hide"> الرسوم </a>
      </li> 
      <li class="nav-item text-center nav-item-style">
        <a class="nav-link" href="register.php"> <i class="fas   fa-file-signature text-center blue-color" > </i> <br class="w3-hide-small w3-hide-midume br-hide"> التسجيل </a>
      </li> 
      <li class="nav-item text-center nav-item-style">
        <a class="nav-link" href="subjects.php"> <i class="fas fa-book-open text-center purple-color" > </i> <br class="w3-hide-small w3-hide-midume"> البرامج</a>
      </li> 
      <li class="nav-item text-center nav-item-style">
        <a class="nav-link" href="#"> <i class="fas fa-handshake text-center green-color" > </i> <br class="w3-hide-small w3-hide-midume br-hide"> المبادرات</a>
      </li> 
      <li class="nav-item text-center nav-item-style">
        <a class="nav-link" href="join-us.php"> <i class="fas fa-address-card text-center orange-color" > </i> <br class="w3-hide-small w3-hide-midume br-hide"> انضم الينا</a>
      </li> 
      <li class="nav-item text-center nav-item-style">
        <a class="nav-link" href="contact-us.php"><i class="fas fa-phone brown-color"></i> <br class="w3-hide-small w3-hide-midume br-hide"> اتصل بنا</a>
      </li> 
    </ul>
  </div> 
</nav>






