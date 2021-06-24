<!doctype html>
<html>
<head>
    <title>Input Paket</title>
</head>
<body>
    <?php
    require_once("koneksi.php");
    
    $query = "SELECT * FROM penghuni";
    $result = mysqli_query($connect, $query);
    ?>

    <h1>Front Office</h1>
    ---------------------------------
    <h2>Input Paket</h2>
    <form action="inputpaket.php" method="post">
        <table>
            <tr>
                <td>Isi Paket</td>
                <td><input type="text" name="isipaket"></td>
            </tr>
            <tr>
                <td>Tujuan Paket</td>
                <td><select name="tujuan">
                    <option value="kosong">---select----</option>
                    <?php
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <option value="<?php echo $row['nik'];?>"><?php echo "$row[nama]";?></option>
                    <?php 
                        }
                    ?>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Submit" />
    </form> 
    <p><button><a href='main.php' style='text-decoration:none; color:black'>Back</a></button></p>
</body>
</html>