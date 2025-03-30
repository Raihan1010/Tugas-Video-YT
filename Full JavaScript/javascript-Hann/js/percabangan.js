if (false) {
    console.log('dijalankan jika salah');
}else{
    console.log('dijalankan jika benar')
}


let nilai = 0;
let kkm = 75;
let baik = 'Kamu Lulus';
let buruk = 'Kamu Tidak Lulus';
let batasatas = 100;
let batasbawah = 0;
let alert = 'Nilai salah';

if (nilai <= batasatas && nilai >= batasbawah) {
    if (nilai >= kkm) {
        console.log(baik);
    }else{
        console.log(buruk);
    }
} else{
    console.log(alert);
}

