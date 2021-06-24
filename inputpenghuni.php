<?php
    require_once("koneksi.php");

    $nik = null;
    $nama = $_POST['nama'];
    $kamar = $_POST['kamar'];

    if($nama == "" || $kamar == ""){
        echo "<h1>Silahkan Isi Data Anda</h1>";
        echo "<p><button><a href='penghuni.php' style='text-decoration:none; color:black'>Back</a></button></p>";
    } else {
        $query = "INSERT INTO penghuni(nama, nik, nomor_kamar)
                    VALUES ('$nama','$nik','$kamar')";
        $result = mysqli_query($connect, $query);
        header("location: main.php");
    }
?>