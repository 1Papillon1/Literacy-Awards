<?php
include("template_header.php");
include("accessibility.html");
include("pdo.php");
?>
<link href="./styles/nagrade/nagrada.css" rel="stylesheet" type="text/css" />

<?php


$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$upit = $db->query("SELECT id_nagrade 
FROM dobitnici_nagrade WHERE id_dobitnika = $id");
$id_nagrada = $upit->fetchAll();

$upit = $db->query("SELECT *
FROM dobitnici WHERE id_dobitnika = $id");
$dobitnik = $upit->fetchAll();

echo "<center><br><br><br>";

echo "<center><table><tr><td class='text text-default'>Naslov djela</td><td class='text text-default'>" . $dobitnik[0]["naslov_djela"] ."</td></tr>" .
"<tr><td class='text text-default'>Ime autora</td><td class='text text-default'>" . $dobitnik[0]["ime_autora"] . "</td></tr>" .
"<tr><td class='text text-default'>Prezime autora</td><td class='text text-default'>" . $dobitnik[0]["prezime_autora"] . "</td></tr>" .
"<tr><td class='text text-default'>Spol autora</td><td class='text text-default'>" . ($dobitnik[0]["spol_autora"]=="M" ? "Muško" : "Žensko") . "</td></tr></table></center>";

echo "<center><p class='text text-default'>Dobivene nagrade:</p><center>";
foreach($id_nagrada as $id_nagrade) {
    $upit = $db->query("SELECT id_nagrade, naziv_nagrade FROM nagrade WHERE id_nagrade = ". $id_nagrade["id_nagrade"]);
    $nagrada = $upit->fetchAll();
    if($nagrada == null) {
        echo "Trenutno nema dobivenih nagrada.";
        break;
    }
    echo "<center><h3><a class='text link list__item-default' href='nagrada.php?id=" . $id_nagrade["id_nagrade"] . "'>" . $nagrada[0]["naziv_nagrade"] . "</a></h3><center>";
}
echo "<hr><br><br><button class='pink-button' onclick=\"location.href='dobitnici.php'\">Povratak</button>";

include("template_footer.html");
?>
