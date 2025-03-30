//JSON adalah format data yg mudah dibaca dan ditulis, yg digunakan utk pertukaran antar aplikasi
//ditulis berpasangan antara "KEY" dan Value : string,number,boolean,array,object,null. 



//#28
//mengambil json dengan fetch
document.querySelector('#klik').addEventListener('click',tampil);

function tampil(){

    let url = 'js/tblmenu.json';

    fetch(url) //mengambil dari url
    .then(function(res){ //mengubah yg diambil => mengubah ke dalam json
        return res.json();
    })
    .then(function(data){    //menampilkan => dari json ke bentuk innerHTML
        let output = '<h1>Data Menu</h1> <table> <th>Menu</th> <th>Harga</th> <th>Warna</th>';
        data.forEach(element => {
            output += `<tr>
                <td>${element.menu}</td>
                <td>${element.harga}</td>
                <td>${element.warna[0]}</td>
            </tr>`;
        });
        output += '</table>';
        document.querySelector('#isi').innerHTML= output;
    })

    
}









//#27
//contoh penulisan json
// let tblmenu = [

//     {
//     "idmenu" : 1,
//     "idkategori" : 1,
//     "menu" : "Apel Manalagi",
//     "harga" : 3000,
//     "warna" : ["merah","kuning","hijau"],
//     "stok" : true,
//     "keterangan" : null
// },

// {
//     "idmenu" : 2,
//     "idkategori" : 1,
//     "menu" : "Pisang",
//     "harga" : 2000,
//     "warna" : ["merah","kuning"],
//     "stok" : false,
//     "keterangan" : null
// }

// ]


// console.log(tblmenu[1].menu);