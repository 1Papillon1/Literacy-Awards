<?php
include("template_header.php");
include("accessibility.html");
include("pdo.php");
?>
<link href="./styles/nagrade/nagrade_form.css" rel="stylesheet" type="text/css" />
<?php


if (!isset($_SESSION["username"])) {
    echo "<center><h1>You are not supposed to be here!</h1><center>";
    exit();
}

if (isset($_GET["id"])) {
    $id_nagrade = $_GET["id"];
    $upit = $db->query("SELECT * FROM nagrade WHERE id_nagrade=$id_nagrade");
    $rezultati = $upit->fetchAll();
    $naziv_nagrade = $rezultati[0]["naziv_nagrade"];
    $organizator = $rezultati[0]["organizator"];
    $ucestalost = $rezultati[0]["ucestalost"];
    $god_dodjele = $rezultati[0]["god_dodjele"];
    $vise_informacija = $rezultati[0]["vise_informacija"];
    $url_link = $rezultati[0]["url_link"];
    $gumb = "Uredi";
} else {
    $id_nagrade = "";
    $naziv_nagrade = "";
    $organizator = "";
    $god_dodjele = "";
    $vise_informacija = "";
    $ucestalost = "";
    $url_link = "";
    $gumb = "Unesi";
}
?>
<div class="layout">
    <div id="wrapper" class="wrapper wrapperform">
    <form class="form" method="POST" action="nagrade_sql.php">
    <h2 class="form__title text title-default">Unos Nagrade</h2>

        <div class="form__container">
        
        <label class="text label list__item-default" for="naziv_nagrade">NAZIV NAGRADE</label>
        <input class="text input input-default" type="text" required name="naziv_nagrade" id="naziv_nagrade" value='<?php echo $naziv_nagrade ?>'>

        <label class="text label list__item-default" for="organizator">ORGANIZATOR</label>
        <input class="text input input-default"  type="text"  name="organizator" id="organizator" value='<?php echo $organizator ?>'>

        <label class="text label list__item-default" for="ucestalost">UČESTALOST</label>
        <input class="text input input-default"   type="text" name="ucestalost" id="ucestalost" value='<?php echo $ucestalost ?>'>


        <label for="vise_informacija" class="text label list__item-default" id="vise_informacija">Više informacija</label>
        <textarea class="text input-default"  rows="4" name="vise_informacija"><?php echo $vise_informacija ?></textarea>

        <label class="text label list__item-default" for="url_link">URL LINK</label>
        <input class="text input input-default"  id="link" type="text" name="url_link" value='<?php echo $url_link ?>'>

        <label class="text label list__item-default" for="god_dodjele">GODINA DODJELE</label>
        <input class="text input input-default"   id="dodjela" type="number" max="<?php echo date('Y'); ?>" name="god_dodjele"
            value='<?php echo $god_dodjele ?>'>

        <input class="text input-default"  type="hidden" name="id" value='<?php echo $id_nagrade ?>'>
        <input class="text form__button input-default"  type="submit" name="submit" value="<?php echo $gumb ?>">
        <a class="wrapper__button" href='nagrade.php'><button class="form__button form__button--secondary" type="button">Odustani</button></a>
        </div>
    </form>
    </div>
</div>
<br><br>
<?php
include("template_footer.html");
?>
