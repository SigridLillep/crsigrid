<?php
    include("config.php");

    // if (!empty($_GET)) {
    //     $mark = $_GET['mark'];
    //     $model = $_GET['model'];
    //     $engin = $_GET['engin'];
    //     $fuel = $_GET['fuel'];
    //     $price = $_GET['price'];
    //     $image = $_GET['image'];

        // $paring = "INSERT INTO cars (mark, model, engin, fuel, price, image) VALUES ('".$mark."', '".$model."', '".$engin."', '".$fuel."', '".$price."', '".$image."')";
        
        $paring = "SELECT * FROM cars WHERE id=".$_GET['id']."";
        $valjund = mysqli_query($yhendus, $paring);
        $rida = mysqli_fetch_assoc($valjund);
       // $tulemus = mysqli_affected_rows($yhendus);
    //     if ($tulemus == 1) {
    //         header("Location: admin.php");
    //     }
    // }
?>

<form action="lisa.php" method="get">
    Mark <input type="text" name="mark" value="<?php echo $rida['mark']; ?>"><br>
    Model <input type="text" name="model" value="<?php echo $rida['model']; ?>"><br>
    Engin <input type="text" name="engin" value="<?php echo $rida['engin']; ?>"><br>
    Fuel <input type="text" name="fuel" value="<?php echo $rida['fuel']; ?>"><br>
    Price <input type="number" name="price" value="<?php echo $rida['price']; ?>"><br>
    Image <input type="text" name="image" value="<?php echo $rida['image']; ?>"><br>
    <input type="submit" value="Muuda"><br>

</form>