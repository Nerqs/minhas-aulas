function verificar() {
    var data = new Date()
    var ano = data.getFullYear()
    var fAno = window.document.getElementById('txtano')
    var res = window.document.querySelector('div#res')
    if (fAno.value.length == 0 || fAno.value > ano) {//.lenght volta o a quantidade de unidades que existem no var
        window.alert('[ERRO] Verifique os dados e tente novamente!')
    } else {
        var fsex = window.document.getElementsByName('radsex')
        var idade = ano - Number(fAno.value)
        var genero = ''
        var img = window.document.createElement('img')
        img.setAttribute('id', 'foto')
        if (fsex[0].checked) {
            genero = 'um Homem'
            if (idade >= 0 && idade < 10) {
                //criança
                img.setAttribute('src', 'bebehomem.png')
            } else if (idade < 21) {
                //jovem
                img.setAttribute('src', 'jovemhomem.png')
            } else if (idade < 50) {
                img.setAttribute('src', 'adultohomem.png')
            } else {
                //idoso
                img.setAttribute('src', 'idosohomem.png')
            }
        } else if (fsex[1].checked) {
            genero = 'uma Mulher'
            if (idade >= 0 && idade < 10) {
                //criança
                img.setAttribute('src', 'bebemulher.png')
            } else if (idade < 21) {
                //jovem
                img.setAttribute('src', 'jovemmulher.png')
            } else if (idade < 50) {
                //adulto
                img.setAttribute('src', 'adultomulher.png')
            } else {
                //idoso
                img.setAttribute('src', 'idosomulher.png')
        }
        }
        res.style.textAlign = 'center' //centralizar o texto
        res.innerHTML = `Detectamos ${genero} com ${idade} anos.`
        res.appendChild(img) //faz a imagem carregar
    }
}