<html>
<head>
    <title>Paket Pos</title>
</head>
<body>
    <h2>Front Office Apartement</h2>
    <p><button><a href="paket.php" style='text-decoration:none; color:black'>Input Paket</a></button></p>
    <p><button><a href="penghuni.php" style='text-decoration:none; color:black'>Tambah Penghuni</a></button></p>
    
    <table border=1>
        <thead>
            <th>ID Paket</th>
            <th>Isi Paket</th>
            <th>Sasaran (Penghuni)</th>
        </thead>
        <?php
            require_once("koneksi.php");
            $query =  $query = "SELECT * FROM paket";
            $result = mysqli_query($connect, $query);
            while ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['id_paket'];?></td>
            <td><?php echo "$row[isi_paket]";?></td>
            <td><?php echo $row['tujuan_paket'];?></td>
        </tr>
            <?php } ?>
    </table>
</body>
</html>