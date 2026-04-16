<h1>Admin</h1>

<table border="1">
    <tr>
        <td>Mark</td>
        <td>Model</td>
        <td>Engin</td>
        <td>Fuel</td>
        <td>Price</td>
        <td>Image</td>
        <td>Kustuta</td>
        <td>Muuda</td>
    </tr>


<?php

include("config.php"); 

$paring = "SELECT * FROM cars LIMIT 8";
$valjund = mysqli_query($yhendus, $paring); // mysql käsu saatmine andmebaasile

while($rida = mysqli_fetch_assoc($valjund)){
    //var_dump($rida);
    echo "<tr>
    <td>".$rida['mark']."</td>
    <td>".$rida['model']."</td>
    <td>".$rida['engin']."</td>
    <td>".$rida['fuel']."</td>
    <td>".$rida['price']."</td>
    <td>".$rida['image']."</td>
    <td><a href='kustuta.php'>Kustuta</a></td>
    <td><a href='muuda.php'>Muuda</a></td>


    </tr>";
}

?>

</table>
