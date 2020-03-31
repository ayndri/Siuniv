<?php

session_start();

if(!(isset($_SESSION['user'])))
{
    header("location: ../login/form-login.php");
}

include '../connect.php';

$query = "SELECT * FROM dosen";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>

<html>
    <head>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<script src="script.js" type="text/javascript"></script>
<title></title>
</head>

    <body>
    <div id="kiri" class="normal-kiri">
   <a id="satu" href="#" >  <img  src="user.png" alt="" height="230px" width="230px">  Profil</a>
    <a id="satu" href="read.php">Data Dosen</a>
    <a id="satu" href="../matakuliah/read.php">Data Matakuliah</a>
    <a id="satu" href="../login/logout.php">Logout</a>
    </div>

    <div id="kanan" class="normal-kanan">
    <div id="kanan-atas">
    <button onclick="slide()"> <img src="menu.png" alt="" height="30px"></button>
    <h1 id="nama">SIUNIV</h1>
    </div>
    </div>

<div class="content">

    <table cellpadding="7">
        
    <h2 id="data">Data Dosen</h2>

    
    <tr>
    <form action="search.php" method="get">
        <div class="button">
                <input type="search" name="cari" placeholder="  Masukkan Pencarian..." id="cari1">
                <button id="cari"><img src="cari.png" alt="" height="30px" width="30px"></button>
                </div>
                </form>
        <th>No.</th>
        <th>Nama Dosen</th>
        <th>Telepon</th>
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
                echo "<td>" . $data['nama_dosen'] . "</td>";
                echo "<td>" . $data['telp'] . "</td>";
                echo "<td><a id='link' href='form-update.php?id_dosen=" . $data['id_dosen'] . "'>Edit</a> | ";
                echo "<a id='link' href='delete.php?id_dosen=" . $data['id_dosen'] . "'onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a>";
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
    <h2 class="tambahdata"><a id="tambahdata" href="from-create.php"> <img src="plus.png" alt="" height="30px" width="30px"> Tambah Data Dosen</a></h2>
    
    </div>
   
</body>
</html>