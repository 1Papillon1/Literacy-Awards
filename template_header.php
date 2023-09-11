<?php 
      session_start();
    ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Književne nagrade</title>
<link rel="stylesheet" href="./styles/header.css" />
<link rel="stylesheet" href="./styles/body.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap" rel="stylesheet">
</head>
<body>
<div id="header" class="header">
  <div class="header__navigation">
    <ul class="navigation__list">
      <?php 
      //var_dump($_SESSION); // Ispis sessije za lakse debugganje
      echo isset($_SESSION["username"]) ? '<li class="navigation__item navigation__item--secondary"><a class="navigation__link navigation__link--secondary" href="odjava.php">Odjava</a></li>' :
      '<li class="navigation__item navigation__item--secondary"><a class="navigation__link navigation__link--secondary menu-default" href="prijava.php">Prijava</a></li>';
      ?>
      <li class="navigation__item"><a class="navigation__link text menu-default" href="dobitnici.php">Dobitnici nagrada</a></li>
      <li class="navigation__item"><a class="navigation__link text menu-default" href="nagrade.php">Književne nagrade</a></li>
      <a class="wrapper" href="index.php"><img class="navigation__image" src="./media/logo/Logo.png" alt="logo"></a>
    </ul>
  </div>
</div>
<div class="row">
<div class="medium-12 columns">
