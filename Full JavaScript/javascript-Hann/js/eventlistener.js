function coba(){
    a = document.querySelector('.isi');
    a.innerHTML = 'eventlistener menampilkan p';
    console.log('coba eventlistener');
}
//judul.addEventListener('click', coba);
//judul.onclick = coba;
//judul.onmouseover = coba;
judul.onclick = function(){
    console.log('coba eventlistener function anonymouse');
}