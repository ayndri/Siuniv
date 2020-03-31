<?php

include '../connect.php';

$id_dosen = $_GET['id_dosen'];

$query = "SELECT * FROM dosen WHERE id_dosen = '$id_dosen'";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data Guru</title>
    <link rel="stylesheet" href="update.css">
    <script src="update.js"></script>
    </head>
</html>
<body>

    <form action="update.php" method="post">
    <h1 id="ubah">Ubah Data</h1>
        <div class="tengah">
        <table>
       
        <tr>
        <td><label for="nama">Nama Guru</label></td>

        <td><input type="text" name="nama_dosen" class="nama" id="nama_dosen" value="<?php echo $row['nama_dosen']; ?>"></td>
        </tr>

        <tr>
        <td><label for="nama">Telepon</label></td>
 
        <td><input type="number" name="telp" class="nama" id="telp" value="<?php echo $row['telp']; ?>"></td>
        </tr>

        <tr>
        <td></td>
        <td><input type="hidden" name="id_dosen" value="<?php echo $row['id_dosen']; ?>"></td>
        <td><input type="submit" value="Simpan" name="btnSimpan" class="submit" onclick="return update()"></td>
        

    </tr>
        
        </table>
        </div>
    </form>
<a href="update.php"></a>
</body>