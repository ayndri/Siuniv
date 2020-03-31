
<?php

session_start();

if(!(isset($_SESSION['user'])))
{
    header("location: ../user/form-login.php");
}

include '../connect.php';



if(isset($_POST['btnSimpan']))
{
    $id_dosen = $_POST['id_dosen'];
    $nama_dosen = $_POST['nama_dosen'];
    $telp = $_POST['telp'];
    
    $query = "UPDATE dosen SET nama_dosen = '$nama_dosen',
                                telp = '$telp',
                                WHERE id_dosen = '$id_dosen'";

    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if($num >= 0)
    {
    
        echo '<div id="tampil_modal">
        <div id="modal">
        <div id="modal_atas">Informasi</div>
        <p>Berhasil Update Data!</p>
        <a href="read.php"><button id="oke">Oke</button></a>
        </div></div>';
    }
    else
    {
        echo '<div id="tampil_modal">
        <div id="modal">
        <div id="modal_atas">Informasi</div>
        <p>Gagal Update Data!</p>
        <a href="form-update.php"><button id="oke">Oke</button></a>
        </div></div>';
    }
    
}
    mysqli_close($connect);












?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title>Edit Data Guru</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="update1.css">
</head>
<body>
    </form>
</body>

</html>