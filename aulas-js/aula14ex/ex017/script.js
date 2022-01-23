function gerar(){
    let numero = document.getElementById('numero')
    let tab = document.getElementById('tabuada')

    if (numero.value.length != 0) {
        let num = Number(numero.value)
        tab.innerHTML = ''
        for (c = 1; c <= 10; c++) {
            let item = document.createElement('option')
            item.text = `${c} x ${num} = ${c*num}`
            item.value = `tab${c}`
            tab.appendChild(item)
        }
    } else {
        alert('Por favor, digite um número!')
    }
}