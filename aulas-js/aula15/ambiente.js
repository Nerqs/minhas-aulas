let num = [5, 8, 2, 9, 3]

/*num[5] = 0
num.push(7) //cria um elemento no proximo espaço vazio
num.length //atributo que mostra quantos elementos tem no vetor
num.sort() //organiza os elementos em ordem crescente

console.log(`Nosso vetor é o ${num}`)

for (let c = 0; c < num.length; c++) { //use .length para ir até o maximo do vetor
    console.log(`A posição ${c} tem o valor ${num[c]}`)
}


for (let c in num) {
    console.log(`A posição ${c} tem o valor ${num[c]}`)
}

*/

console.log(num.indexOf(9)) //busca o valor no vetor, não o index
console.log(num.indexOf(1)) //se o valor não existir no vetor o JS retorna o valor -1