function create() {
    var nama_guru = document.getElementById('nama_guru');
    var jumlah_jam = document.getElementById('jumlah_jam');
    var alamat = document.getElementById('alamat');
    var telp = document.getElementById('telp');
    var email = document.getElementById('email');

    if(nama_guru.value == "")
{
    alert("Anda belum mengisi guru pengajar");
    nama_guru.focus()
    return false;
}

else if(jumlah_jam.value == "")
{
    alert("Anda belum mengisi waktu pembelajaran");
    jumlah_jam.focus()
    return false;
}

else if(alamat.value == "")
{
    alert("Anda belum mengisi alamat");
    alamat.focus()
    return false;
}

else if(telp.value == "")
{
    alert("Anda belum mengisi nomor telepon");
    telp.focus()
    return false;
}

else if(email.value == "")
{
    alert("Anda belum mengisi email");
    email.focus()
    return false;
}

else 
{
    return true;
}
}

