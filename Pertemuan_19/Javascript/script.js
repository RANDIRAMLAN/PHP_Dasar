var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tambah event ketika keyword ditulis
keyword.addEventListener('keyup', function() {
//buat object ajax
var xhr =  new XMLHttpRequest();

// Mengecek ajax siap digunakan
xhr.onreadystatechange =  function() {
    if ( xhr.readyState == 4 && xhr.status == 200) {
        container.innerHTML = xhr.responseText;
    }
}

xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
xhr.send();

});
