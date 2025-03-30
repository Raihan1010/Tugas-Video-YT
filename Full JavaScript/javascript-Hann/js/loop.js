//while
let start = 1;
let finish = 5;

while (start < finish) {
    console.log(start);

    start++; //naik
}
console.log('---------------');



//do while
let awal = 100;
let akhir = 110;

do {
    console.log(awal);
    awal = awal + 3;  //naik 3
} while (awal <= akhir);
console.log('---------------');



//for
let mulai = 205;
let selesai = 200;

for(mulai; mulai >= selesai; mulai--){  //turun
    console.log(mulai);
}
console.log('---------------');
for(let i=660; i>=650; i = i-3){ //turun 3
    console.log(i);
}