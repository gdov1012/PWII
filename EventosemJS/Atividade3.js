function calcular(operacao){
 const n1 = parseFloat(document.getElementById('numero1').value);
 const n2 = parseFloat(document.getElementById('numero2').value);

 let resultado = 0;

 switch (operacao){
    case 'Somar':
        resultado = numero1 + numero2;
        break;
    case 'Subtrair':
        resultado = numero1 - numero1;
        break;
    case 'Multiplicar':
        resultado = numero1 * numero2;
        break;
    case 'Dividir':
        if (numero2 === 0){
            alert("Nenhum número é divisível por 0!");
            return;
        }    
        resultado = numero1 / numero2;
        break;
 }
 
 document.getElementById('resultado').textContent = "O resultado é: " +resultado;
}