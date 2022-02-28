<?php echo
"<script>
    function editar(id, texto_tarefa) {
        //criar um form de edição
        let form = document.createElement('form')
        form.action = 'tarefa_controller.php?acao=atualizar'
        form.method = 'POST'
        form.className = 'row'

        //criar um input para entrada do texto
        let inputTarefa = document.createElement('input')
        inputTarefa.type = 'text'
        inputTarefa.name = 'tarefa'
        inputTarefa.className = 'col-9 form-control'
        inputTarefa.value = texto_tarefa

        //criar um input hidden para guardar o id da tarefa
        let input_id = document.createElement('input')
        input_id.type = 'hidden'
        input_id.name = 'id'
        input_id.value = id

        //criar um button para envio do form
        let button = document.createElement('button')
        button.type = 'submit'
        button.className = 'col-3 btn btn-info'
        button.innerHTML = 'Atualizar'

        //incluir o inputTarafe no form
        form.appendChild(inputTarefa)
        
        //incluir o input_id no form
        form.appendChild(input_id)		

        //incluir o button no form
        form.appendChild(button)

        //selecionar a div tarefa
        let tarefa = document.getElementById('tarefa_'+id)

        //limpar o conteudo interno
        tarefa.innerHTML = ''

        //incluir o form
        tarefa.insertBefore(form, tarefa[0])

    }

    function remover(id) {
        if(confirm('Você tem certeza que deseja deletar essa tarefa?')) {
            location.href = 'todas_tarefas.php?acao=remover&id='+id
        }				
    }

    function confirmar(id) {
        location.href = 'todas_tarefas.php?acao=confirmar&id='+id
    }
</script>"
?>