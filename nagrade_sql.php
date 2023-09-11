<?php
include("pdo.php");
session_start();

if(!isset($_SESSION["username"])) {
    echo "<center><h1>You are not supposed to be here!</h1><center>";
    exit();
}

if(isset($_POST["submit"])){
    if($_POST["submit"] == "Uredi"){
        $upit = $db->query("UPDATE nagrade SET 
            naziv_nagrade = '" . $_POST["naziv_nagrade"] . "',
            organizator = '" . $_POST["organizator"] . "',
            god_dodjele = '" . $_POST["god_dodjele"] . "',
            ucestalost = '" . $_POST["ucestalost"] . "',
            vise_informacija = '" . $_POST["vise_informacija"] . "',
            url_link = '" . $_POST["url_link"] . "'
            WHERE id_nagrade = " . $_POST["id"]
        );
        header("Location: nagrade.php");
    }
    if($_POST["submit"] == "Unesi"){
        $upit = $db->query("
        INSERT INTO nagrade (naziv_nagrade, organizator, ziri, kriteriji, vise_informacija, god_dodjele, url_link, ucestalost)
        VALUES(
            '" . $_POST["naziv_nagrade"] . "',
            '" . $_POST["organizator"] . "',
            '" . $_POST["vise_informacija"] . "',
            '" . $_POST["god_dodjele"] . "',
            '" . $_POST["url_link"] . "',
            '" . $_POST["ucestalost"] . "'
            )
        ");
        header("Location: nagrade.php");
    }
}
if(isset($_GET["brisanje"])){
    $upit = $db->query("DELETE FROM nagrade WHERE id_nagrade = " . $_GET["brisanje"]);
    header("Location: nagrade.php");
}
?>