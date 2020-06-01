var valor1 = Number(prompt("numero1"));
var valor2 = Number(prompt("numero2"));
if(Number.isInteger(valor1) && Number.isInteger(valor2)){
    if(valor1<valor2) {
        alert("numero1 no es mayor que numero2");
    }
    if(valor2>0) {
        alert("numero2 es positivo");
    }
    if(valor1!=0) {
        alert("numero1 distinto de cero");
    }
}
else
    alert("Uno o ambos ingresos no son enteros");