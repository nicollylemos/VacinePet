function proximaEtapa(etapa) {
    document.querySelector('#etapa' + (etapa - 1)).classList.add('hidden');
    document.querySelector('#etapa' + etapa).classList.remove('hidden');
}

function anteriorEtapa(etapa) {
    
    document.querySelector('#etapa' + (etapa + 1)).classList.add('hidden');
    document.querySelector('#etapa' + etapa).classList.remove('hidden');
}

function enviarForm() {
    
    proximaEtapa(6); 
}

function finalizar() {
    window.location.href = 'index.php';
}

function agendamento() {
    window.location.href = 'agendamento.php';
}
 //! mascara para o telefone
const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
  }
  
  const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
  }


//? validar cpf 

//* limpar formulário

function clearForm() {
    document.getElementById('formulario').reset(); // Limpa todos os campos após o envio
}