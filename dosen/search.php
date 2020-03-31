<?php

include '../connect.php';

$cari = $_GET['cari'];
$kategori = $_GET['kategori'];

$query = "SELECT * FROM dosen
            WHERE $kategori LIKE '%$cari%'
            ORDER BY nama_dosen";

$result = mysqli_query($connect, $query);

$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<script src="script.js" type="text/javascript"></script>
<title>Data Guru</title>
</head>

<body>
<div id="sideNavigation" class="sidenav">

<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a id="satu" href="#" >  <img src="user.png" alt="" height="230px" width="230px">  Profil</a>
<a id="satu1" href="read.php">Data Guru</a>
<a id="satu2" href="../t_mapel/read.php">Data Matapelajaran</a>
<a id="satu3" href="../t_user/logout.php">Logout</a>
</div>

<nav class="topnav">
<a href="#" onclick="openNav()"> <img src="menu.png" alt="" width="30px" height="30px">
<svg width="30" height="30" id="icoOpen">
<path d="MO,5 30,5" stroke="#000" stroke-width="5"/>
<path d="MO,14 30,14" stroke="#000" stroke-width="5"/>
<path d="MO,23 30,23" stroke="#000" stroke-width="5"/>
</svg>
</a>

</nav>

<div id="main">


<h1 id="nama">Telkom School</h1>

<table cellpadding="7">
<form action="search.php" method="get">
    <input type="search" name="cari" placeholder="Cari" id="cari1">
    <select name="kategori" id="cari2">
        <option value="">Pilih Salah Satu</option>
        <option value="id_dosen">Kode Guru</option>
        <option value="nama_dosen">Nama Guru</option>
    </select>
    <button id="cari"><img src="cari.png" alt="" height="30px" width="30px"></button>
</form>
<h2 id="data">Data Guru</h2>





<tr>
    <th>No</th>
    <th>Kode Guru</th>
    <th>Nama Guru</th>
    <th>Jam Mengajar</th>
    <th>Alamat</th>
    <th>Telepon</th>
    <th>Email</th>
    <th>Aksi</th>

    </tr>
    

<?php
    if($num > 0)
    {
        $no = 1;
        while($data = mysqli_fetch_assoc($result))
        {
           
            
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $data['kode_guru'] . "</td>";
            echo "<td>" . $data['nama_guru'] . "</td>";
            echo "<td>" . $data['jumlah_jam'] . "</td>";
            echo "<td>" . $data['alamat'] . "</td>";
            echo "<td>" . $data['telp'] . "</td>";
            echo "<td>" . $data['email'] . "</td>";
            echo "<td><a id='link' href='form-update.php?kode_guru=" . $data['kode_guru'] . "'>Edit</a> | ";
            echo "<a id='link' href='delete.php?kode_guru=" . $data['kode_guru'] . "'onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a>";
            echo "</tr>";
            $no++;
        }
    }
    else
    {
        echo "<td colspan='3'> Tidak ada data </td>";
    }
?>

</table>
<h2 class="tambahdata"><a id="tambahdata" href="form-create.php"> <img src="plus.png" alt="" height="30px" width="30px"> Tambah Data Guru</a></h2>

</div>

</body>
</html>