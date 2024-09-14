// Simulação dos dados de disponibilidade
const disponibilidade = {
    '2024-08-14': ['09:00', '11:00', '14:00', '16:00'],
    '2024-08-15': ['10:00', '13:00', '15:00','17:00','18:00','19:00','20:00','21:00','22:00'],
    '2024-08-16': ['08:00', '12:00', '17:00'],
    '2024-08-17': ['09:00', '12:00', '14:00'],
    '2024-08-18': ['10:00', '11:00', '13:00', '16:00'],
    '2024-08-19': ['08:00', '10:00', '12:00', '15:00']
};

// Variável para armazenar o horário selecionado
let horarioSelecionado = null;

// Função para mostrar os horários disponíveis
function mostrarHorarios(data) {
    const horariosContainer = document.getElementById('horarios-disponiveis');
    horariosContainer.innerHTML = '';

    const horarios = disponibilidade[data];
    if (horarios) {
        horarios.forEach(horario => {
            const horarioElemento = document.createElement('div');
            horarioElemento.classList.add('horario');
            horarioElemento.innerText = horario;

            // Adiciona o evento de clique para selecionar o horário
            horarioElemento.addEventListener('click', () => {
                // Remove a classe selecionado do horário anterior, se existir
                if (horarioSelecionado) {
                    horarioSelecionado.classList.remove('selecionado');
                }
                // Marca o horário atual como selecionado
                horarioElemento.classList.add('selecionado');
                horarioSelecionado = horarioElemento;
            });

            horariosContainer.appendChild(horarioElemento);
        });
    } else {
        horariosContainer.innerHTML = '<p style="position:relative; left:12%;">Não há horários disponíveis<br> para esta data.</p>';
    }
}

// Evento de mudança na data
document.getElementById('data').addEventListener('change', (event) => {
    const dataSelecionada = event.target.value;
    mostrarHorarios(dataSelecionada);
});

