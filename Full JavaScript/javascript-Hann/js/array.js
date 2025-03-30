let coba = function(){
    return 'coba-coba';
}
let buah = ['jeruk', 'mangga', 'pisang',100, coba(),    
    tes = ()=>'hasil return arrow function',
    function nama(){
        return 'HannKc';
    }
];

console.log(buah);
console.log('------------------------');

console.log(buah[2]);
console.log('------------------------');

for (let i in buah){
    console.log(buah[i]);
}
console.log('------------------------');

console.log(buah[5]());
console.log('------------------------');

console.log(buah[6]());