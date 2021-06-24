<?php
    require_once("koneksi.php");

    $idpaket = NULL;
    $isipaket = $_POST['isipaket'];
    $tujuan = $_POST['tujuan'];

    if ($tujuan == "kosong"){
        echo "<h1>Tujuan Paket</h1>";
        echo "<p><button><a href='paket.php' style='text-decoration:none; color:black'>Back</a></button></p>";
    } else if($isipaket == ""){
        echo "<h1>Isi Paket</h1>";
        echo "<p><button><a href='paket.php' style='text-decoration:none; color:black'>Back</a></button></p>";
    } 
    else{
        $query = "INSERT INTO paket(id_paket, isi_paket, tujuan_paket) 
                    VALUES ('$idpaket','$isipaket','$tujuan')";
        $result = mysqli_query($connect, $query);
        header("location: main.php");
    }
?>