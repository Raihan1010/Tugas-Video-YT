//menyimpan / menambah nilai ke dalam local storage
localStorage.setItem('coba',100);
localStorage.setItem('tes', 'saya belajar js');
localStorage.setItem('belajar', 'saya belajar local Storage');

console.log(localStorage.getItem('coba')); //getItem = menampilkan
console.log(localStorage.getItem('tes'));

//localStorage.removeItem('coba');  //removeItem = menghapus localStorage

//localStorage.clear();  //clear = menghapus semua localStorage

console.log(localStorage.key(1));  //key = menampilkan key localStorage

console.log(localStorage.length);  //length = melihat berapa localStorage yg dibuat