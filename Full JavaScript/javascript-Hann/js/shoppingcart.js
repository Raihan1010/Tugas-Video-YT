
let tblmenu = [
    {idmenu:9, idkategori:29, menu:'Anggur', gambar:'anggur.jpeg', harga:15000},
    {idmenu:10, idkategori:29, menu:'Mangga', gambar:'mango.jpeg', harga:10000},
    {idmenu:11, idkategori:31, menu:'Burger', gambar:'bgbiasa.jpeg', harga:17000},
    {idmenu:12, idkategori:32, menu:'Es Milo', gambar:'milo.jpeg', harga:6000},
    {idmenu:13, idkategori:29, menu:'Pepaya', gambar:'ppy.jpeg', harga:12000},
]

let tampil = tblmenu.map(function(kolom){
    return `<div class="produk-content">
            <div class="image">
                <img src="images/${kolom.gambar}" alt="">
            </div>
            <div class="title">
                <h2>${kolom.menu}</h2>
            </div>
            <div class="harga">
                <h2>Rp. ${kolom.harga}</h2>
            </div>
            <div class="btn-beli">
                <button data-idmenu=${kolom.idmenu}>Beli</button>
            </div>
        </div>`;
})

let isi = document.querySelector('.produk');
isi.innerHTML = tampil;


let btnbeli = document.querySelectorAll('.btn-beli > button');

let cart = [];

for (let index = 0; index < btnbeli.length; index++) {
    btnbeli[index].onclick = function(){
        //console.log(btnbeli[index].dataset['idmenu']);
        //cart.push(btnbeli[index].dataset['idmenu']);

    tblmenu.filter(function(a){
        if (a.idmenu==btnbeli[index].dataset['idmenu']) {
            cart.push(a);
            console.log(cart);
        }
    })
    }
}

//console.log(cart);



