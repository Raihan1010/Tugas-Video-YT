let test = function(name){
    console.log(name + ' Belajar function');
}
test('Hannz');

let tambah = function(a,b){
    return a+b;
}
console.log(tambah(5,3));

console.log('------------------------');



let contoh = (nama) => {
    console.log(nama + ' Belajar mengaji');
}
contoh('Budi');

let plus = (c,d) => c+d;
console.log(plus(5,3));

let hasil = e => e*3;
console.log(hasil(6));

let sayHi = () => console.log("Hello!");
sayHi();

let coba = () => {
    console.log('barisan pertama');
    console.log('barisan kedua');
    console.log('barisan dst');
}
coba();

let umur = 3;
let uji = umur < 7 ?
() => console.log('Belum cukup umur') :
() => console.log('Sudah cukup umur');
uji(); 

let nilai = 87;
let cek = nilai >= 85 ?
() => (status = 'Berhasil') :
() => (status = 'Gagal');
console.log(cek());