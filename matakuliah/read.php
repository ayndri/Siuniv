<?php

include '../connect.php';

$query = "SELECT kode, nama_matkul, sks, semester, nama_dosen
          FROM matakuliah LEFT JOIN dosen
          USING (id_dosen)
          ORDER BY kode";

$result = mysqli_query($connect, $query);

$num = mysqli_num_rows($result);

?>







<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
        <script src="script.js" type="text/javascript"></script>
        <link rel="stylesheet" href="style.css">
    </head>


<body>

    <div id="kiri" class="normal-kiri">
   <a id="satu" href="#" >  <img  src="user.png" alt="" height="230px" width="230px">  Profil</a>
    <a id="satu" href="../dosen/read.php">Data Dosen</a>
    <a id="satu" href="read.php">Data Matakuliah</a>
    <a id="satu" href="../login/logout.php">Logout</a>
    </div>

    <div id="kanan" class="normal-kanan">
    <div id="kanan-atas">
    <button onclick="slide()"> <img src="menu.png" alt="" height="30px"></button>
    <h1 id="nama">SIUNIV</h1>
    </div>
    </div>

<div class="content">

<table>

    <h2 id="data">Data Matakuliah</h2>

    <tr>
        <form action="search.php" method="get">
        <div class="button">
        <input type="search" name="cari" placeholder="Masukkan Pencarian..." id="cari1">
        <select name="kategori" id="cari2">
            <option value="nama_matkul">Matakuliah</option>
            <option value="nama_dosen">Dosen</option>
            <option value="sks">SKS</option>
            <option value="semester">Semester</option>
        </select>
        <button id="cari"><img src="cari.png" alt="" height="30px" width="30px"></button>
        </div>
        </form>

        <th>No.</th>
        <th>Kode</th>
        <th>Matakuliah</th>
        <th>SKS</th>
        <th>Semester</th>
        <th>Dosen Pengajar</th>
        <th>Aksi</th>
    </tr>

<?php
    if($num > 0)
    {
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) { ?>
        
        <tr>
            <td> <?php echo $no; ?> </td> 
            <td> <?php echo $data['kode'] ?> </td> 
            <td> <?php echo $data['nama_matkul'] ?> </td> 
            <td> <?php echo $data['sks'] ?> </td> 
            <td> <?php echo $data['semester'] ?> </td> 
            <td> <?php 
                    if($data['nama_dosen'] != NULL )
                    { echo $data['nama_dosen']; }
                    else { echo "-"; }
                    ?>
            </td> 
            <td> <a id="link" href="form-update.php?kode=<?php echo $data['kode']; ?>"> Edit </a> |
                <a id="link" href="delete.php?kode=<?php echo $data['kode']; ?>" onclick="return confirm('Anda yakin ingin menghapus data?')"> Hapus </a> </td>
        </tr>
        
<?php
$no++;

        }
    }
    else
    {
        echo "<tr> <td colspan='7'> Tidak ada data </td></tr>";
    }
?>
</table>
<h2 class="tambahdata"><a id="tambahdata" href="form-create.php"> <img src="plus.png" alt="" height="30px" width="30px"> Tambah Data Matakuliah</a></h2>
</div>
</body>
</html>