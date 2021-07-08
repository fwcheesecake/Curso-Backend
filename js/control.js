//if

console.log(1 < 2 < 3);
console.log(3 > 2 > 1);

let a = true;
let b = "true";

console.log(a == b);
console.log(a === b);

//for
for (let i = 0; i < 10; i++) {
    console.log(i);
}

c = ['j', 'k', 'l'];
for (const bKey in c) {
    console.log(bKey, c[bKey]);
}
d = {nombre: "Antonio", apellidoP: "Reyna", apellidoM: "Espinoza"}
for (const dKey in d) {
    console.log(dKey + ":", d[dKey]);
}

//forof
for (const bElement of ["a", "b", 'c']) {
    console.log(bElement);
}

for (const bElement of c) {
    console.log(bElement);
}

//while

//do while