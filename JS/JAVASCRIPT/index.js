let nombre = prompt('¿Cómo te llamas?');
alert('Hola ' + nombre + ' bienvenido(@) a la calculdora creada por Ramiro');


// de esta manera accedemos al elemento html por id

const op1 = document.getElementById('op1');
const op2 = document.getElementById('op2');
const op3 = document.getElementById('op3');
const calcular = document.getElementById('enviar');
const resultado1 = document.getElementById('resultado');

// agregamos el evento al dar click 

calcular.addEventListener('click', enviar);

// creamos la función

function enviar(){
 const operador = op2.value    // accedemos al valor para no permitir otros valores
 const op1R = parseFloat(op1.value)  // convertimos a enteros y decimales
 const op3R = parseFloat(op3.value)

 if ((operador == '+' || operador == '-' || operador == '*' || operador == '/') && !isNaN(op1R) && !isNaN(op3R)){
  let resultado;
  switch(operador){
    case '+':
    resultado = op1R + op3R
    break;
    case '-':
    resultado = op1R - op3R
    break;
    case '*':
    resultado = op1R * op3R
    break;
    case '/':
    resultado = op1R / op3R
    break;
  }
  resultado1.style = 'color:blue'
  resultado1.innerText = '= ' + resultado  // mostramos los posibles resul en pantalla
 } else {
  resultado1.style = 'color:red'
  resultado1.innerText = 'calculo imposible ' + nombre 
 };
};


// autoplay para los textos

// var typed = new Typed(".typing",{
//   strings:["HOLA, ESTAS USANDO UNA CALCULADORA", "HECHA POR RAMIRO."],
//   typeSpeed: 55,
//   BackSpeed: 60,
//   loop: true
// })