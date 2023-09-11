<?php 
include("template_header.php");
include("accessibility.html");
include("pdo.php");
?>
<link href="./styles/nagrade/nagrade.css" rel="stylesheet" type="text/css" />
<link href="./styles/filter/filter.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript"> 
    document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('pretrazi');
    const rows = document.getElementsByTagName('tr');

    searchInput.addEventListener('input', function () {
        const searchText = searchInput.value.toLowerCase();

        for (let i = 1; i < rows.length; i++) {
            const rowData = rows[i].textContent.toLowerCase();
            if (rowData.includes(searchText)) {
                rows[i].style.display = 'table-row';
            } else {
                rows[i].style.display = 'none';
            }
        }
    });
});
</script>
<?php


$upit = $db->query("
    SELECT * 
    FROM nagrade
");
$rezultati = $upit->fetchAll();

echo "</br>";
echo "</br>";
?>


    

    <div class="table-container"> <!-- New div for the table -->
    
    <div class="wrapper">
    <input class="input" type="search" id="pretrazi" name="pretrazi" placeholder="Pretraživanje">
        <?php
        echo  isset($_SESSION["username"]) ? "<a class='table-button input-default' href='nagrade_form.php'>Dodaj nagradu</a>" : "";
        ?>
    </div>

    <div class="wrapper">

    <table class="table">
            <tr class="table-menu">
                <td class="text text-default">Naziv nagrade</td>
                <td class="text text-default">Organizator</td>
                <td  class="text text-default">Prva godina dodjele</td>
                <?php echo isset($_SESSION["username"]) ?
                "<td class='text text-default'>
                </td><td class='text text-default'></td>" : "";  ?>
            </tr>
            <?php
            foreach ($rezultati as $nagrada) {
                echo "<tr class='table-rows'><td><a class='link text text-default' href='nagrada.php?id=" . $nagrada["id_nagrade"] . "'>
        " . $nagrada["naziv_nagrade"] . "</a></td>
        <td class='text text-default'>" . $nagrada["organizator"] . "</td>
        <td class='text text-default'> " . $nagrada["god_dodjele"] . "</td>";

                echo isset($_SESSION["username"]) ?
                    "<td><a class='link text text-default  button-uredi' href='nagrade_form.php?id=" . $nagrada["id_nagrade"] . "'>Uredi</a></td>
        <td><a class='link text text-default button-brisu' href='nagrade_sql.php?brisanje=" . $nagrada["id_nagrade"] . "'>Briši</a></td>
        </tr>" : "";
            }
            ?>
        </table>
    </div>

    </div> <!-- End of the table-container div -->


<?php
include("template_footer.html");
?>
