let a = true;
let b = false;
let c = true;
let d = false;

//OR (||)
//akan bernilai true jika salah satu bernilai true
console.log(d || b);  //false
console.log(b || d || a); //true


//AND (&&)
//akan bernilai false jika salah satu bernilai false
console.log(a && c); //true
console.log(a && c && b); //false


//operator pembanding
let x = 10;
let y = 20;
let z = 10;
let lima = '10';
console.log(x < y); //true
console.log(x > y); //false
console.log(x == z); //true
//sama dengan (sama isi)
console.log(lima == z); //true
//identik (sama isi dan tipe data)
console.log(lima === z); //true