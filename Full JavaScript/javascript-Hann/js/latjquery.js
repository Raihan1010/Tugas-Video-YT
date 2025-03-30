// jquery adalah perpustakaan / kumpulan function dari javascript
// $(function) = mengambil function dari jquery


$( document ).ready(function() {
    console.log( "ready!" );
});

$(function() {
    $('#isi').html('<h1>Haloooo</h1>');

    $('#klik').click(function (e) { 
        e.preventDefault();
        alert('hai');
        console.log('klik');
    });

    $('#isi').mouseleave(function () { 
        //alert('mouse leave');
    });
});