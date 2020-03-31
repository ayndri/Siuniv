function slide () {
    var kiri = document.getElementById('kiri');
    var kanan = document.getElementById('kanan');
    kiri.classList.toggle('normal-kiri');
    kiri.classList.toggle('slide-kiri');
    kanan.classList.toggle('normal-kanan');
    kanan.classList.toggle('slide-kanan');
}