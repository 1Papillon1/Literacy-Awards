<?php
include("pdo.php");

if(isset($_GET["brisanje"])){
    $brisi = $db->query("DELETE FROM nastavnici 
    WHERE id = " . $_GET["brisanje"]);
}

if(isset($_GET["odsjek"])){
    $povratak = "?odsjek=" . $_GET["odsjek"];
}else{
    $povratak = "";
}

header("Location:nastavnici.php" . $povratak);

?>