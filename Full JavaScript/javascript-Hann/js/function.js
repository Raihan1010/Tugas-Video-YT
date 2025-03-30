//function = blog penyimpanan
function test() {
    let p = 'Halo';
    console.log(p);
    console.log('Saya sedang belajar');
}
test();

// for (let i = 0; i < 5; i++) {
//     test();
// }
console.log('------------------------');


function segitiga(a, t){
    luas = a*t/2;
    console.log(luas);
}
segitiga(8, 11);
console.log('------------------------');


//return berfungsi utk mengeluarkan sebuah nilai
function out() {
    return console.log('output function')
}
out();

function lingkaran(r){
    luas = 3.14 * r * r;
    return luas;
}

const t = 7;
let tabung = lingkaran(10) * t;

console.log(tabung);
