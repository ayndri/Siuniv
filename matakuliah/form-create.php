<?php

include '../connect.php';

$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../siuniv/validasi.js" type="text/javascript"></script>
</head>
<body>
<div id="form">
    <form action="create.php" method="post">
    <h1>Tambah Data Matakuliah</h1>

    <tr>
    <td><label for="kode">Kode</label> <td> : </td> </td>
    <td><input type="text" name="kode" id="kode"></td>
    </tr> <br>

    <tr>
    <td><label for="nama_matkul">Matakuliah</label> <td> : </td> </td>
    <td><input type="text" name="nama_matkul" id="nama_matkul"> </td>
    </tr> <br>

    <tr>
    <td><label for="sks">SKS</label> <td> : </td> </td>
    <td><input type="text" name="sks" id="sks"> </td>
    </tr> <br>

    <tr>
    <td><label for="semester">Semester</label> <td> : </td> </td>
    <td><input type="text" name="semester" id="semester"> </td>
    </tr> <br>

    <tr>
    <td><label for="nama_dosen">Dosen Pengajar</label> <td> : </td> </td>
    <select name="id_dosen" id="nama_dosen">
    <option value="-">--Pilih salah satu--</option>
    <option value="NULL">Tidak ada pengajar</option>
    <?php
        while ($data = mysqli_fetch_assoc($result)) {
            ?>
        <option value="<?php echo $data['id_dosen']; ?>">
                <?php echo $data['nama_dosen']; ?>
        </option>
        <?php
        }
    ?>
    </select>
    </tr> <br>

    <tr>
    <input type="submit" value="Simpan" name="btnSimpan" onclick="validasiMatkul()">
    </tr>
    </form>
    </div>
</body>
</html>