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

