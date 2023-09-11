<?php
include("template_header.php");
include("accessibility.html");
include("pdo.php");
?>
<link href="./styles/dobitnici/dobitnici_form.css" rel="stylesheet" type="text/css" />
<?php


if(!isset($_SESSION["username"])) {
    echo "<center><h1>You are not supposed to be here!</h1><center>";
    exit();
}
if(isset($_GET["id"])){
    $id_dobitnika = $_GET["id"];
    $upit = $db->query("SELECT * FROM dobitnici WHERE id_dobitnika=$id_dobitnika");
    $rezultati = $upit->fetchAll();
    $ime = $rezultati[0]["ime_autora"];
    $prezime = $rezultati[0]["prezime_autora"];
    $spol_autora = $rezultati[0]["spol_autora"];
    $naslov_djela = $rezultati[0]["naslov_djela"];
    $gumb = "Uredi"; 
}else{
    $id_dobitnika="";
    $ime = "";
    $prezime = "";
    $spol_autora = "";
    $naslov_djela = "";
    $gumb = "Unesi";
}

?>
<div class="layout">
<div id="wrapper" class="wrapper wrapperform">
<form method="post" action="dobitnici_sql.php">
<h2 class="form__title text title-default">Unos Dobitnika</h2>

<div class="form__container">
<label class="text label list__item-default" for="naslov_djela">NASLOV DJELA</label>
<input class="text input input-default" type="text" required placeholder="Naslov djela" name="naslov_djela" id="naslov_djela" value='<?php echo $naslov_djela?>'>

<label class="text label list__item-default" for="ime_autora">IME AUTORA</label>
<input class="text input input-default"  placeholder="Ime autora" required type="text" name="ime_autora" id="ime_autora" value='<?php echo $ime?>'>

<label class="text label list__item-default" for="prezime_autora">PREZIME AUTORA</label>
<input class="text input input-default"  placeholder="Prezime autora" required type="text" name="prezime_autora" id="prezime_autora" value='<?php echo $prezime?>'>

<label class="text label list__item-default" for="spol_autora">SPOL AUTORA</label>
<select class="input" name="spol_autora" required>
    <option value="M" <?php 
    if($spol_autora == "M") echo "selected";  ?>
    >Muško</option>
    <option value="Ž" <?php 
    if($spol_autora == "Ž") echo "selected";  ?>
    >Žensko</option>
</select>


<label class="text label list__item-default" for="naziv_nagrada[]">NAGRADA</label>
<select class="select" name="naziv_nagrada[]" multiple>
<?php
if(isset($_GET["id"])){
    $upit_nagrade = $db->query("SELECT * FROM nagrade");
    $rezultati_nagrade = $upit_nagrade->fetchAll();
    $upit_nagrade_dobitnici = $db->query("SELECT * FROM dobitnici_nagrade WHERE id_dobitnika = ". $id_dobitnika);
    $rezultati_nagrade_dobitnici = $upit_nagrade_dobitnici->fetchAll();
    foreach($rezultati_nagrade as $nagrada){
        $selected = "";
            foreach($rezultati_nagrade_dobitnici as $nagrada_dobitnik) {
            if($nagrada_dobitnik["id_nagrade"] == $nagrada["id_nagrade"]){
                $selected = " selected";
                break;
            }else{
                $selected = "";
            }
        }
        echo "<option value='" . $nagrada["id_nagrade"] . "'$selected>
        " . $nagrada["naziv_nagrade"]  . "
        </option>";
    }
}else {
    $upit_nagrade = $db->query("SELECT * FROM nagrade");
    $rezultati_nagrade = $upit_nagrade->fetchAll();
    foreach($rezultati_nagrade as $nagrada){
        if($nagrada_dobitnik["id_nagrade"] == $nagrada["id_nagrade"]){
            $selected = " selected";
        }else{
            $selected = "";
        }
        echo "<option value='" . $nagrada["id_nagrade"] . "'$selected>
        " . $nagrada["naziv_nagrade"]  . "
        </option>";
    }
}
?>
</select>

<input type="hidden" name="id" value='<?php echo $id_dobitnika?>'>
<input class="text form__button input-default" type="submit" name="submit" value="<?php echo $gumb?>">
<a class="wrapper__button"href='dobitnici.php'>
    <button class="form__button form__button--secondary">Odustani</button>
</a>
</div>
</form>
<br><br>
</div>

<?php
include("template_footer.html");
?>