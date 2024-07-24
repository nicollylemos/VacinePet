const today = new Date();

let year = today.getFullYear();

document.getElementById("year").textContent = year;

function prevYear() {
  year = year - 1;
  document.getElementById("year").textContent = year;

  updateDays();
}

document.getElementById("prevYear").addEventListener("click", prevYear);

function nextYear() {
  year = year + 1;
  document.getElementById("year").textContent = year;

  updateDays();
}

document.getElementById("nextYear").addEventListener("click", nextYear);

let month = today.getMonth() + 1;

const monthNames = {
  1: "Janeiro",
  2: "Fevereiro",
  3: "Março",
  4: "Abril",
  5: "Maio",
  6: "Junho",
  7: "Julho",
  8: "Agosto",
  9: "Setembro",
  10: "Outubro",
  11: "Novembro",
  12: "Dezembro",
};

document.getElementById("month").textContent = monthNames[month];

function prevMonth() {
  month = month - 1;
  if (month < 1) {
    month = 12;
    year = year - 1;
    document.getElementById("year").textContent = year;
  }

  document.getElementById("month").textContent = monthNames[month];

  updateDays();
}

document.getElementById("prevMonth").addEventListener("click", prevMonth);

function nextMonth() {
  month = month + 1;
  if (month > 12) {
    month = 1;
    year = year + 1;
    document.getElementById("year").textContent = year;
  }

  document.getElementById("month").textContent = monthNames[month];

  updateDays();
}

document.getElementById("nextMonth").addEventListener("click", nextMonth);

const day = today.getDate();

function daysInMonth(month, year) {
  return new Date(year, month, 0).getDate();
}

function generateDays() {
  for (let i = 1; i <= days; i++) {
    const dayElement = document.createElement("span");
    dayElement.classList.add("day__item");
    dayElement.addEventListener("click", selectDay);
    dayElement.textContent = i;

    document.getElementById("days__container").appendChild(dayElement);
  }
}

function updateDays() {
  const daysContainer = document.getElementById("days__container");
  daysContainer.innerHTML = "";

  days = daysInMonth(month, year);
  generateDays();
}

let days = daysInMonth(month, year);

generateDays();

function selectDay(event) {
  const selectedDay = event.target.textContent;

  const selectedDate = `Data selecionada: ${selectedDay} de ${monthNames[month]} de ${year}`;

  alert(selectedDate);
}
