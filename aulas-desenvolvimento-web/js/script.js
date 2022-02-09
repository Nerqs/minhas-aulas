function autorizar() {
    let num = document.getElementById('num')
    let nome = document.getElementById('nome')
    if (num.value == 2) {
        nome.disabled = false
    } else {
        nome.disabled = true
    }
}
