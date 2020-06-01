var valor1 = Number(prompt("valor1"));
var valor2 = Number(prompt("valor2"));
if(Number.isInteger(valor1) && Number.isInteger(valor2))
    alert("El resultado es: "+(valor1*valor2));
else
    alert("Uno o ambos ingresos no son enteros");