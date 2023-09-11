<?php
include("pdo.php");
session_start();

if(!isset($_SESSION["username"])) {
    echo "<center><h1>You are not supposed to be here!</h1><center>";
    exit();
}

if(isset($_POST["submit"])){
    if($_POST["submit"] == "Uredi"){
        $upit = $db->query("UPDATE dobitnici SET 
            ime_autora = '" . $_POST["ime_autora"] . "',
            prezime_autora = '" . $_POST["prezime_autora"] . "',
            spol_autora = '" . $_POST["spol_autora"] . "',
            naslov_djela = '" . $_POST["naslov_djela"] . "'  
            WHERE id_dobitnika = " . $_POST["id"]
        );
        $upit = $db->query("DELETE FROM dobitnici_nagrade WHERE id_dobitnika = " . $_POST["id"]);

        foreach($_POST["naziv_nagrada"] as $id_nagrade) {
            $upit = $db->query("INSERT INTO dobitnici_nagrade (id_dobitnika, id_nagrade)
             VALUES (" . $_POST["id"] . ", " . $id_nagrade . ")"
            );
        }
        header("Location: dobitnici.php");
    }
    if($_POST["submit"] == "Unesi"){
        $upit = $db->query("
        INSERT INTO dobitnici (ime_autora, prezime_autora, spol_autora, naslov_djela)
        VALUES(
            '" . $_POST["ime_autora"] . "',
            '" . $_POST["prezime_autora"] . "',
            '" . $_POST["spol_autora"] . "',
            '" . $_POST["naslov_djela"] . "'
            )
        ");
        $id_dobitnika = $db->lastInsertId();
        foreach($_POST["naziv_nagrada"] as $id_nagrade) {
            $upit = $db->query("INSERT INTO dobitnici_nagrade (id_dobitnika, id_nagrade)
             VALUES (" . $id_dobitnika . ", " . $id_nagrade . ")"
            );
        }

        header("Location: dobitnici.php");
    }
}
if(isset($_GET["brisanje"])){
    $upit = $db->query("DELETE FROM dobitnici WHERE id_dobitnika = " . $_GET["brisanje"]);
    header("Location: dobitnici.php");
}
?>