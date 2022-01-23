function contar() {
    let inicio = document.getElementById('txti')
    let fim = document.getElementById('txtf')
    let passo = document.getElementById('txtp')
    let res = document.getElementById('res')

    if (inicio.value.length == 0 || fim.value.length == 0) {
        res.innerHTML = `Impossivel contar \u{1F62C}`
        //window.alert('[Erro] Faltam dados!')
    } else {
        res.innerHTML = 'Contando: <br>'
        let i = Number(inicio.value)
        let f = Number(fim.value)
        let p = Number(passo.value)
        if (p <= 0 || p.value.length == 0) {
            alert('Passo invalido! Considerando passo 1')
            p = 1
        }
        if (i < f) { //contagem crescente
            for (let c = i; c <= f; c += p) {
                res.innerHTML += ` ${c} \u{1F449}` //va em https://unicode.org/emoji/charts/full-emoji-list.html, copie o codigo do emogi, tire o "U+" e coloque "\u{code}" no lugar, só funciona entre crases.
            }
        } else { //contagem regressiva
            for (let c = i; c >= f; c -= p) {
                res.innerHTML += ` ${c} \u{1F449}`
            }
        }
        res.innerHTML += ` \u{1F3C1}`
    }
}