<?php
include("template_header.php");
include("accessibility.html");
include("pdo.php");
?>

<link href="./styles/nagrade/nagrada.css" rel="stylesheet" type="text/css" />

<?php


$id = isset($_GET["id"]) ? $_GET["id"] : 0;
$upit = $db->query("
SELECT * 
FROM nagrade
WHERE id_nagrade = $id
");
$rezultati = $upit->fetchAll();

echo "<center><br><br><br>";

echo "<center><table><tr>" .
"<td class='text text-default'>Naziv nagrade</td><td class='text text-default'>" . $rezultati[0]["naziv_nagrade"] ."</td></tr>" .
"<td class='text text-default'>Organizator</td><td class='text text-default'>" . $rezultati[0]["organizator"] ."</td></tr>" .
"<td class='text text-default'>Učestalost</td><td class='text text-default'>" . $rezultati[0]["ucestalost"] ."</td></tr>" .
"<td class='text text-default'>Godina prve dodjele</td><td class='text text-default'>" . $rezultati[0]["god_dodjele"] ."</td></tr>" .
"<td class='text text-default'>Više informacija</td><td class='text text-default'>" . $rezultati[0]["vise_informacija"] ."</td></tr>" .
"<td class='text text-default'>Link na stranicu</td><td class='text text-default'><a class='text link' href='".$rezultati[0]["url_link"]."'>" . $rezultati[0]["url_link"] ."<a/></td></tr></table>" .
"<hr><br><br><button class='pink-button' onclick=\"location.href='nagrade.php'\">Povratak</button></center>";

include("template_footer.html");
?>