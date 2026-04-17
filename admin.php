<?php
$teade = "";

if (isset($_GET['updated']) && $_GET['updated'] == 1) {
    $teade = "Muudetud!";
}

if (isset($_GET['deleted']) && $_GET['deleted'] == 1) {
    $teade = "Kustutatud!";
}
?>

<?php if (!empty($teade)) { ?>
    <div id="teaderiba" style="
        background-color: #fff3cd;
        color: #856404;
        border: 1px solid #ffeeba;DD
        padding: 12px 18px;
        margin: 15px 0;
        border-radius: 6px;
        width: fit-content;
        font-family: Arial, sans-serif;
    ">
        <?php echo $teade; ?>
    </div>
<?php } ?>

<script>
setTimeout(function() {
    var teade = document.getElementById("teaderiba");
    if (teade) {
        teade.style.display = "none";
    }
}, 3000);
</script>

<h1>Admin</h1>
<a href="lisa.php">+ Lisa auto</a><br>

<table border="1">
    <tr>
        <td><strong>ID</td>
        <td><strong>Mark</td>
        <td><strong>Model</td>
        <td><strong>Engin</td>
        <td><strong>Fuel</td>
        <td><strong>Price</td>
        <td><strong>Image</td>
        <td><strong>Kustuta</td>
        <td><strong>Muuda</td>
    </tr>


<?php

include("config.php"); 

$paring = "SELECT * FROM cars ORDER BY id DESC";
$valjund = mysqli_query($yhendus, $paring); // mysql käsu saatmine andmebaasile

while($rida = mysqli_fetch_assoc($valjund)){
    //var_dump($rida);
    echo "<tr>
    <td>".$rida['id']."</td>
    <td>".$rida['mark']."</td>
    <td>".$rida['model']."</td>
    <td>".$rida['engin']."</td>
    <td>".$rida['fuel']."</td>
    <td>".$rida['price']."</td>
    <td>".$rida['image']."</td>
    <td><a href='kustuta.php?id=".$rida['id']."'>Kustuta</a></td>
    <td><a href='muuda.php?id=".$rida['id']."'>Muuda</a></td>



    </tr>";
}

?>

</table>
