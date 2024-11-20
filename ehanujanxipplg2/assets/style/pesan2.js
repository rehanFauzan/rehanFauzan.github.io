const menuToggle = document.querySelector("#mobile-menu");
const navbar = document.querySelector("#navbar");

menuToggle.addEventListener("click", () => {
    navbar.classList.toggle("show");
});

var kopi_susu = 0;
var nasi_goreng = 0;
var brownies = 0;
var ayam_geprek = 0;
var teh_tarik = 0;

var angka_kopiSusu = document.getElementById("harga_makanan");
var nasgor = document.getElementById("harga_makanan1");
var brow = document.getElementById("harga_makanan2");
var aygep = document.getElementById("harga_makanan3");
var terik = document.getElementById("harga_makanan4");

function tambah() {
    kopi_susu++;
    angka_kopiSusu.textContent = kopi_susu;
    var total_harga = document.getElementById('rp');
    var rp = 20000;
total_harga.textContent = kopi_susu*rp;
}
function kurang() {
    kopi_susu--;
    angka_kopiSusu.textContent = kopi_susu;
     var total_harga = document.getElementById('rp');
    var rp = 20000;
total_harga.textContent = kopi_susu*rp;
}

function tambah1() {
    nasi_goreng++;
    nasgor.textContent = nasi_goreng;
     var total_harga = document.getElementById('rp');
    var rp = 20000;
total_harga.textContent = nasi_goreng*rp;
}
function kurang1() {
    nasi_goreng--;
    nasgor.textContent = nasi_goreng;
}

function tambah2() {
    brownies++;
    brow.textContent = brownies;
}
function kurang2() {
    brownies--;
    brow.textContent = brownies;
}

function tambah3() {
    ayam_geprek++;
    aygep.textContent = ayam_geprek;
}
function kurang3() {
    ayam_geprek--;
    aygep.textContent = ayam_geprek;
}

function tambah4() {
    teh_tarik++;
    terik.textContent = teh_tarik;
}
function kurang4() {
    teh_tarik--;
    terik.textContent = teh_tarik;
}
