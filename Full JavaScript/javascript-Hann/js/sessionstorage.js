console.log(localStorage.getItem('belajar'));

sessionStorage.setItem('contoh',100); //menambah
console.log(sessionStorage.getItem('contoh')); //menampilkan    

//sessionStorage.removeItem('contoh'); //menghapus

sessionStorage.setItem('panjang',599); //menambah

//sessionStorage.clear(); //menghapus semua

console.log(sessionStorage.length);

console.log(sessionStorage.key(0));