<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<h2>Pendaftaran Personil</h2>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
	Nama: <input type="text" name="nama">
	<br><br>
        <input type="hidden" name="tanggal" value="<?php echo date("d-m-Y  H:i:s"); ?>">
	<input type="submit" name="submit" value="Submit">  
</form>
    <?php
    $name = "";
    $tanggal = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["nama"];
        $tanggal = $_POST["tanggal"];

        echo "<h2>Hasil:</h2>";
	echo "Nama : ".$name;
        echo "<br>";
        echo "Tanggal Sekarang dan Waktu Sekarang : ".$tanggal;
    }
    ?>

</body>
</html>