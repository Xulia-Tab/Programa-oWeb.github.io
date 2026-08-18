function somarNumeros() {
    // 1. Recebe os números como string do usuário
    let num1String = window.prompt("Digite o primeiro número:");
    let num2String = window.prompt("Digite o segundo número:");

    // 2. Converte as strings para números inteiros
    let num1 = parseInt(num1String);
    let num2 = parseInt(num2String);

    // 3. Realiza a soma
    let resultado = num1 + num2;

    // 4. Exibe o resultado na tela
    window.alert("O resultado da soma é: " + resultado);
}

function somarVariosNumeros() {
    let numeros = []; // Array para armazenar os valores
    let continuar = true;

    while (continuar) {
        let entrada = window.prompt("Digite um número para somar (ou 's' para sair):");

        // Verifica se o usuário digitou 's' (aceita 's' minúsculo ou maiúsculo)
        if (entrada !== null && entrada.toLowerCase() === 's') {
            continuar = false;
        } else if (entrada !== null && entrada.trim() !== "") {
            // Converte a string em número inteiro e adiciona ao array
            let numero = parseInt(entrada);
            
            // Garante que só adicione se for um número válido
            if (!isNaN(numero)) {
                numeros.push(numero);
            } else {
                window.alert("Por favor, digite um número válido ou 's' para sair.");
            }
        }
    }

    // Calcula a soma de todos os números armazenados no array
    let soma = 0;
    for (let i = 0; i < numeros.length; i++) {
        soma += numeros[i];
    }

    // Exibe o resultado final
    window.alert("Números informados: " + numeros.join(", ") + "\nSoma total: " + soma);
}

// Executa a função
somarVariosNumeros();