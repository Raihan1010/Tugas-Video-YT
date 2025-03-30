function tampil(b){
    a = document.querySelector('p');
    a.innerText = 'menampilkan p' + b;
    console.log('Belajar DOM event JS');
}


judul.onclick = function(){
    console.log('Belajar DOM event JS (dengan ID)');
    document.querySelector('.isi').innerHTML = 'menampilkan p dengan ID';
}