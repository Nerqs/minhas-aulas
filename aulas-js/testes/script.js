function copiar() {
    var res = document.querySelector('div#res')
    res.innerHTML = 'Bom dia'
}

var txt = 'Nenhum arquivo carregado'

function analizar(files) {
    const reader = new FileReader()
    reader.onloadend = (event) => {
        console.log(event)
        let data = event.target.result
        txt = data
    }
    reader.readAsText(files[0])
}

function comecar() {
    var texto =  document.querySelector("div#texto")
    texto.innerHTML = txt
}