const calendar = document.querySelector(".calendar"),
    date = document.querySelector(".date"),
    daysContainer= document.querySelector(".days"),
    prev = document.querySelector(".prev"),
    next = document.querySelector(".next");
const tableDays = document.querySelector(".days")

let today = new Date();
let activeDay;
let month = today.getMonth();
let year = today.getFullYear();
let firstDayOfWeek = new Date(year,month, 1).getDay()-1;
let
const months = [
    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro",
];

// função para adicionar os dias

function initCalendar(){
    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);
    const prevlastDay = new Date (year, month, 0);
    const prevDays = prevlastDay.getDate();
    const ladtDate = lastDay.getDate();
    const day = firstDay.getDate();
    const nextDays = 7 - lastDay.getDay() - 1;

    //atualiza data do topo do calendário
    date.innerHTML = months[month] + " " + year;

   

    daysContainer.innerHTML = days;
}

initCalendar();