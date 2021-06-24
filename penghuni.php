<!doctype html>
<html>
<head>
    <title>Tambah Penghuni</title>
</head>
<body>
    <h1>Front Office</h1>
    
    <h2>Input Penghuni</h2>
    <form action="inputpenghuni.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nomor Kamar</td>
                <td><input type="text" name="kamar"></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Submit" />
    </form>
    <p><button><a href='main.php' style='text-decoration:none; color:black'>Back</a></button></p>
</body>
</html>
