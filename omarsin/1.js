var valor1 = Number(prompt("valor1"));
var valor2 = Number(prompt("valor2"));
var txt = "";
if(valor1>valor2){
    txt = "valor 1 es mayor";
}else if(valor1==valor2){
    txt = "valor 1 es igual a valor2";
}
else{
    txt = "valor 2 es mayor";
}
alert(txt);