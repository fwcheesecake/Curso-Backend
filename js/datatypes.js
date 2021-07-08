let a = 10;
let b = 10.11010;
let c = "string";
let d = null;
let x = true;

console.log(a, b, c, d);

let e = [1, 2, 3, 4, 5, 6];

console.log(typeof e);

let f = {
    nombre: c,
    apellido: b,
    titulo: c,
    edad: a,
    comples: x,
    perro: {
        nombre: "firulais",
        edad: "7",
        adoptado: true
    },
    materias: [
        {nombre: "Redes", calificacion: 70},
        {nombre: "BD", califcacion: 80},
        "Cosa",
        20,
        false
    ]
};

console.log(f);

if(f.materias[2].nombre) {
    console.log(f.materias[2].nombre);
}