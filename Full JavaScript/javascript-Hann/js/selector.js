const hari = 9;
let hariapa;

switch (hari) {
    case 1:
        hariapa = 'hari senin';
        break;
    case 2:
        hariapa = 'hari selasa';
        break;
    case 3:
        hariapa = 'hari rabu';
        break;
    case 4:
        hariapa = 'hari kamis';
        break;
    case 5:
        hariapa = 'hari jumat';
        break;
    case 6:
        hariapa = 'hari sabtu';
        break;
    case 7:
        hariapa = 'hari minggu';
        break;

    default:
        hariapa = 'hari tidak diketahui';
        break;
}
console.log(hariapa);




const bln = 'februari';
let bulan;

switch (bln) {
    case 'januari':
        bulan = 1;
        break;

    case 'februari':
        bulan = 2;
        break;

    case 'april':
        bulan = 3;
        break;

    default:
        bulan = 'bulan belum dibuat';
        break;
}
console.log(bulan);