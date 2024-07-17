// etapas
function proximaEtapa(etapa) {
    document.getElementById('etapa' + (etapa - 1)).classList.add('hidden');
    document.getElementById('etapa' + etapa).classList.remove('hidden');
}

function anteriorEtapa(etapa) {
    document.getElementById('etapa' + (etapa + 1)).classList.add('hidden');
    document.getElementById('etapa' + etapa).classList.remove('hidden');
}

function enviarForm() {
    // simula o envio do formulário e exibindo a tela de agradecimento, com data e hora (ainda não puxa os dados)
    let dataHoraAtual = new Date();
    let dataFormatada = dataHoraAtual.toLocaleDateString('pt-BR');
    let horaFormatada = dataHoraAtual.toLocaleTimeString('pt-BR', { hour: 'numeric', minute: '2-digit' });
    let dataHoraFormatada = `${dataFormatada} às ${horaFormatada}`;
    document.getElementById('dataHoraAgendamento').textContent = dataHoraFormatada;
    proximaEtapa(6); // avança para a tela de agradecimento (Etapa 6)
}

function finalizar() {
    window.location.href = 'index.php';
}
