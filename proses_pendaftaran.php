<?php
include("config.php");
if(isset($_POST['nama'])){

    $nama = $_POST['nama'];

    $sql = "INSERT INTO peserta (nama) VALUE ('$nama')";
    $query = mysqli_query($db, $sql);

    if( $query ) {

        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} 
?>