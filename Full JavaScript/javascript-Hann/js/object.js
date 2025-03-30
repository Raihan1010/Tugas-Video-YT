const objek = {
    nama : 'Hann',
    telp : '0812345678',

    buah : ['apel','jeruk','mangga'],

    coba : function (){
        return 'coba function dalam object';
    },

    boleh : true,

    'tulis saja' : 999
}

console.log(objek);
console.log('------------------------');

console.log(objek.nama);
console.log('------------------------');

console.log(objek.telp);
console.log('------------------------');

console.log(objek.buah[1]);
console.log('------------------------');

console.log(objek.coba());
console.log('------------------------');

console.log(objek.boleh);
console.log('------------------------');

console.log(objek['tulis saja']);
console.log('------------------------');
