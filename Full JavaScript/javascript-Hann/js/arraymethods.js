//array bisa berbentuk -> string, number, objek, function, campuran
let nilai = [
    {nama:'budi', ipa:90, BI:70, mtk:70},
    {nama:'joni', ipa:80, BI:90, mtk:60},
    {nama:'tejo', ipa:75, BI:70, mtk:90},
    {nama:'siti', ipa:90, BI:80, mtk:90},
]

let nama = ['budi','joni','tejo','siti'];
let mapel = ['ipa', 'BI', 'mtk'];


//#19
//nama.push('ani','isa');                       //push = menambah
//console.log(nama.pop());                      //pop = mengambil nilai terakhir
//console.log(nama.shift());                    //shift = mengambil nilai pertama/awal
//nama.unshift('biboi','el manuk');             //unshift = menambah di bagian depan
//console.log(nama.splice(3, 4));               //splice = mengambil dan menghapus array 
//console.log(nama.slice(0,3));                 //slice = mengambil tetapi tidak menghapus array



//#20
//console.log(nama.concat(mapel));                            //concat = menggabungkan antara 2 array
//console.log(nama.concat(['ips', 'pkn', 'sejarah']));

//versi for
// for (let index = 0; index < nama.length; index++) {
//     console.log(nama[index]);
// }
//versi forEach biasa
// nama.forEach(function(a){                                   //forEach = memanggil semua array
//     console.log(a);
// })
//versi forEach arrow function
// nama.forEach((a) => console.log(a));

//versi filter biasa
// nilai.filter(function(a){
//     if(a.ipa >= 80){
//         console.log(a.nama);                                 //filter = seleksi/memilih array
//     }
// })
//versi filter arrow function
//nilai.filter((a) => (a.ipa >= 80 && a.mtk >= 90  ? console.log(a.nama) : null));



//#21
//versi map biasa
// let siswa = nilai.map(function(a){
//     return a.nama;
// })                                                   //map = menghasilkan array baru yg diambil dari sebuah array
// console.log(siswa);
//versi map arrow function
// let siswa = nilai.map((a) => [a.nama, a.ipa, a.BI, a.mtk]);
// console.log(siswa);

// mapel.sort();                                        
// console.log(mapel);                                  //sort = mengembalikan array dalam bentuk berurutan

//versi Reduce biasa
// let hasil = nilai.reduce(function(a,b){
//     return a = a + b.ipa;
// },0)
// console.log(hasil);                                  //Reduce = menjumlahkan nilai
//versi Reduce arrow function
let hasil = nilai.reduce((a,b) => (a += b.mtk),0);
console.log(hasil);




//console.log(nilai[0].nama); 
//console.log(nama);