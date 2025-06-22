<?php
session_start();
$con = mysqli_connect("localhost", "root", "root", "BeSocial");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive User &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="User Dashboard">
    <meta name="keywords"
          content="User Dashboard, bootstrap, bootstrap 5, user, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png"/>

    <title>User Dashboard</title>

    <link href="static/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./calendar.css">
</head>
<style>
.calendar-header,
.calendar-grid {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  gap: 1px;
}

.day-name {
  background: #f0f4fa;
  text-align: center;
  padding: 10px 0;
  font-weight: bold;
  color: #34495e;
}

.day-cell {
  min-height: 100px;
  border: 1px solid #e4e9f0;
  padding: 4px;
  position: relative;
  background-color: #fff;
  cursor: pointer;
}

.day-cell.empty {
  background-color: #f9f9f9;
  cursor: default;
}

.date-label {
  font-size: 12px;
  color: #666;
  position: absolute;
  top: 4px;
  right: 6px;
}

.event {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 4px;
  padding: 1px 3px;
  margin-top: 2px;
  font-size: 11px;
  background-color: #4a90e2;
  color: white;
  border: 2px solid black;
  border-radius: 3px;
  max-width: 83%; /* să nu iasă din celulă */
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.event-title {
  display: block;            
  text-align: center;     
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  font-size: 11px;            
  max-width: 80px;             
  margin: 0 auto;              
}

.event-time {
  font-weight: bold;
}

/* Modal (container) */
.modal {
  display: none;
  position: fixed;
  z-index: 10;
  left: 0; top: 0;
  width: 100%; height: 100%;
  background-color: rgba(0, 0, 0, 0.6);
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Modal content */
.modal-content {
  background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
  padding: 25px 30px;
  border-radius: 12px;
  max-width: 400px;
  width: 90%;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
  color: #333;
  transition: transform 0.3s ease;
}

.modal-content:hover {
  transform: translateY(-4px);
}

/* Labels */
.modal-content label {
  font-size: 15px;
  font-weight: 600;
  color: #444;
  display: block;
  margin-bottom: 6px;
  user-select: none;
}

/* Inputs & textarea */
.modal-content input,
.modal-content textarea {
  width: 100%;
  padding: 10px 14px;
  margin-bottom: 16px;
  border-radius: 8px;
  border: 1.8px solid #a8b0bb;
  font-size: 14px;
  color: #333;
  background: #fff;
  box-sizing: border-box;
  transition: border-color 0.25s ease;
  font-family: inherit;
  outline-offset: 2px;
}

.modal-content input:focus,
.modal-content textarea:focus {
  border-color: #4a90e2;
  box-shadow: 0 0 6px rgba(74, 144, 226, 0.6);
  background: #f0f5ff;
}

/* Textarea resize */
.modal-content textarea {
  resize: vertical;
  min-height: 70px;
}

/* Buttons container */
.modal-buttons {
  text-align: right;
  margin-top: 10px;
}

/* Buttons style */
.modal-buttons button {
  cursor: pointer;
  font-weight: 600;
  padding: 8px 16px;
  border-radius: 8px;
  border: none;
  background-color: #4a90e2;
  color: white;
  font-size: 14px;
  margin-left: 10px;
  transition: background-color 0.3s ease;
  box-shadow: 0 3px 8px rgba(74, 144, 226, 0.4);
  user-select: none;
}

.modal-buttons button:hover {
  background-color: #357ABD;
  box-shadow: 0 6px 12px rgba(53, 122, 189, 0.6);
}

.modal-buttons button:active {
  background-color: #2c5cae;
  box-shadow: none;
  transform: scale(0.96);
}

.close-btn {
  position: absolute;
  top: 16px;
  right: 20px;
  font-size: 24px;
  font-weight: 700;
  color: #999;
  background: transparent;
  border: none;
  cursor: pointer;
  transition: color 0.3s ease;
  user-select: none;
  line-height: 1;
  padding: 0;
}

.close-btn:hover {
  color: #4a90e2;
}

.close-btn:focus {
  outline: none;
  color: #357ABD;
}

.calendar-btn {
  background-color: #4a90e2;
  border: none;
  color: white;
  font-size: 20px;
  font-weight: bold;
  padding: 8px 14px;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s ease, box-shadow 0.3s ease;
  user-select: none;
  box-shadow: 0 3px 8px rgba(74, 144, 226, 0.4);
  margin: 0 10px;
}

.calendar-btn:hover {
  background-color: #357ABD;
  box-shadow: 0 6px 12px rgba(53, 122, 189, 0.6);
}

.calendar-btn:active {
  background-color: #2c5cae;
  box-shadow: none;
  transform: scale(0.96);
}

/* Stil pentru butonul Salvează evenimentele */
button[onclick="saveToFile()"] {
  background-color: #28a745;
  border: none;
  color: white;
  font-weight: 600;
  padding: 10px 20px;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s ease, box-shadow 0.3s ease;
  box-shadow: 0 3px 8px rgba(40, 167, 69, 0.4);
  user-select: none;
  margin-top: 15px;
}

button[onclick="saveToFile()"]:hover {
  background-color: #218838;
  box-shadow: 0 6px 12px rgba(33, 136, 56, 0.6);
}

button[onclick="saveToFile()"]:active {
  background-color: #1e7e34;
  box-shadow: none;
  transform: scale(0.96);
}

.calendar-navigation {
  display: grid;
  place-items: center;
  grid-auto-flow: column;
  gap: 0.5rem;
  margin-block-end: 1rem;
}

.calendar-btn {
  background: linear-gradient(145deg, #6a98f0, #4a75d6);
  border: none;
  color: white;
  font-size: 16px;       
  font-weight: 700;
  padding: 8px 12px;      
  border-radius: 10px;    
  box-shadow: 0 4px 8px rgba(74, 144, 226, 0.6);
  cursor: pointer;
  transition: all 0.3s ease;
  user-select: none;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 38px;             
  height: 38px;
}

.calendar-btn:hover {
  background: linear-gradient(145deg, #5478c4, #3457a1);
  box-shadow: 0 8px 16px rgba(52, 87, 161, 0.8);
  transform: translateY(-2px);
}

.calendar-btn:active {
  background: linear-gradient(145deg, #2d4585, #1c2f60);
  box-shadow: none;
  transform: translateY(0) scale(0.95);
}

.calendar-btn:focus {
  outline: 3px solid #7ea7ff;
  outline-offset: 2px;
}

#yearInput {
  font-weight: 600;
  border-radius: 12px;
  border: 2px solid #4a90e2;
  box-shadow: inset 0 2px 6px rgba(74,144,226,0.3);
  transition: box-shadow 0.3s ease, border-color 0.3s ease;
}

#yearInput:focus {
  border-color: #2c5cae;
  box-shadow: 0 0 8px #2c5cae;
  background-color: #f0f5ff;
}

button#saveEventsBtn {
  background: linear-gradient(145deg, #34c759, #28a745);
  font-size: 14px;
  padding: 10px 20px;
  border-radius: 12px;
  box-shadow: 0 6px 12px rgba(40,167,69,0.6);
  margin-left: 20px;
  transition: background 0.3s ease, box-shadow 0.3s ease, transform 0.2s ease;
}

button#saveEventsBtn:hover {
  background: linear-gradient(145deg, #28a745, #1e7e34);
  box-shadow: 0 8px 16px rgba(30,126,52,0.8);
  transform: translateY(-2px);
}

button#saveEventsBtn:active {
  background: #1b5e2c;
  box-shadow: none;
  transform: translateY(0) scale(0.95);
}

</style>
<body>

<div class="wrapper">
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <center>
                <a class="sidebar-brand" href="index.html">
                    <img height="75" src="images/logo.png" style="background-color: white;">
                </a>
            </center>

            <ul class="sidebar-nav">
                <li class="sidebar-item active">
                    <a class="sidebar-link" href="user.php">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="solicita-rezervare.php">
                        <i class="align-middle" data-feather="square"></i> <span class="align-middle">Solicită o rezervare</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="produse-achizitionate.php">
                        <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Produse achiziționate</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="evenimente-solicitate.php">
                        <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Evenimente solicitate</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="inscrierile-mele.php">
                        <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Înscrierile mele</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="diplomele-mele.php">
                        <i class="align-middle" style="padding-left: 22px;"></i> <span class="align-middle">Diplomele mele</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="calendar.php">
                        <i class="align-middle" style="padding-left: 22px;"></i> <span class="align-middle">Calendarul meu</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg">
            <a class="sidebar-toggle js-sidebar-toggle">
                <i class="hamburger align-self-center"></i>
            </a>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav navbar-align">
                    <li class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                        </a>
                    </li>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                         aria-labelledby="alertsDropdown"></div>
                    <li class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                            <i class="align-middle" data-feather="settings"></i>
                        </a>

                        <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                            <img src="images/user.jpg" class="avatar img-fluid rounded me-1"/><span class="text-dark"><?php
                                                        // Verifică dacă sesiunile pentru Prenume și Nume există
                                                        if (isset($_SESSION['Prenume'], $_SESSION['Nume'])) {
                                                            echo $_SESSION['Prenume'] . ' ' . $_SESSION['Nume'];
                                                        } else {
                                                            echo "Numele utilizatorului";
                                                        }
                                                        ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="user"></i>
                                Profil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="login-register.html">Deconectare</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3"><strong>Calendarul</strong> meu</h1>

                <div class="row">
                    <div class="col-xl-6 col-xxl-5 d-flex">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header" align="center">
                                        </div>
                                        <div class="card-body">
                                            <div style="text-align: center; margin-bottom: 15px;">
                                             <div class="calendar-navigation" style="text-align: center; margin-bottom: 20px;">
                                            <button onclick="changeMonth(-1)" class="calendar-btn">⟵</button>

                                            <div class="calendar-date-container" style="display: inline-block;">
                                                <span id="currentMonthYear" class="month-year-display"></span>
                                                <br>
                                                <input type="number" id="yearInput" style="width: 80px; text-align: center;" min="1900" max="2100"
                                                    onchange="changeYear()" />
                                            </div>


                                            <button onclick="changeMonth(1)" class="calendar-btn">⟶</button>
                                            <br><br>
                                            <button onclick="saveToFile()">Salvează evenimentele</button>
                                        </div>

                                               <div class="calendar-container">
                                                    <div class="calendar-header" id="calendar-header"></div>
                                                    <div class="calendar-grid" id="calendar-grid"></div>
                                                </div>

                                               <!-- Modal -->
                                                <div class="modal" id="modal">
                                                <div class="modal-content">
                                                  <button class="close-btn" onclick="closeModal()">×</button>
                                                  <h3><span id="modalDateLabel"></span></h3>
                                                  <label>Titlu:</label>
                                                  <input type="text" id="eventTitleInput" placeholder="Titlu eveniment" />
                                                  <label>Ora început:</label>
                                                  <input type="time" id="eventStartInput" />
                                                  <label>Ora sfârșit:</label>
                                                  <input type="time" id="eventEndInput" />
                                                  <label>Locație:</label>
                                                  <input type="text" id="eventLocationInput" placeholder="Locația evenimentului" />
                                                  <label>Detalii:</label>
                                                  <textarea id="eventDescriptionInput" placeholder="Descriere..."></textarea>

                                                  <div class="modal-buttons">
                                                      <button onclick="saveEvent()">💾 Salvează</button>
                                                      <button onclick="deleteEvent()">🗑️ Șterge</button>
                                                      <!-- Butonul "Anulează" a fost scos de aici -->
                                                  </div>
                                              </div>

                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        
        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-6 text-start">
                        <p class="mb-0">
                            Toate drepturile sunt rezervate. © 2022 Media Med Publicis
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="static/js/app.js"></script>
<script>
const monthNames = ["Ianuarie", "Februarie", "Martie", "Aprilie", "Mai", "Iunie",
  "Iulie", "August", "Septembrie", "Octombrie", "Noiembrie", "Decembrie"];
const dayNames = ["Luni", "Marți", "Miercuri", "Joi", "Vineri", "Sâmbătă", "Duminică"];

let currentDate = new Date();
let currentYear = currentDate.getFullYear(); // anul activ vizualizat în calendar
let selectedDate = null;
let selectedCell = null;

function updateMonthYearHeader() {
  const monthYearText = `${monthNames[currentDate.getMonth()]} ${currentYear}`;
  document.getElementById("currentMonthYear").innerText = monthYearText;
  document.getElementById("yearInput").value = currentYear;
}

function generateCalendarGrid() {
  const header = document.getElementById("calendar-header");
  const grid = document.getElementById("calendar-grid");

  header.innerHTML = "";
  grid.innerHTML = "";

  dayNames.forEach(day => {
    const el = document.createElement("div");
    el.className = "day-name";
    el.innerText = day;
    header.appendChild(el);
  });

  const year = currentYear;
  const month = currentDate.getMonth();
  const firstDay = new Date(year, month, 1);
  const startDay = (firstDay.getDay() + 6) % 7;
  const daysInMonth = new Date(year, month + 1, 0).getDate();

  const eventsAll = JSON.parse(localStorage.getItem("events") || "{}");
  const yearEvents = eventsAll[year] || {};

  for (let i = 0; i < startDay; i++) {
    const empty = document.createElement("div");
    empty.className = "day-cell empty";
    grid.appendChild(empty);
  }

  for (let day = 1; day <= daysInMonth; day++) {
    const dateStr = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
    const cell = document.createElement("div");
    cell.className = "day-cell";
    cell.dataset.date = dateStr;
    cell.onclick = () => openModal(dateStr, cell);

    const label = document.createElement("div");
    label.className = "date-label";
    label.innerText = day;
    cell.appendChild(label);

    const ev = yearEvents[dateStr];
    if (ev) {
      const eventEl = document.createElement("div");
      eventEl.className = "event";
      eventEl.innerHTML = `<span class="event-time">${ev.start}</span> <span class="event-title" title="${ev.title}">${ev.title}</span>`;
      cell.appendChild(eventEl);
    }

    grid.appendChild(cell);
  }
}

function changeMonth(offset) {
  currentDate.setMonth(currentDate.getMonth() + offset);
  updateMonthYearHeader();
  generateCalendarGrid();
}

function changeYear() {
  const year = parseInt(document.getElementById("yearInput").value);
  if (!isNaN(year) && year >= 1900 && year <= 2100) {
    currentYear = year; // actualizezi anul activ
    updateMonthYearHeader();
    generateCalendarGrid();
  }
}

function openModal(date, cell) {
  selectedDate = date;
  selectedCell = cell;

  const events = JSON.parse(localStorage.getItem("events") || "{}");
  const yearEvents = events[currentYear] || {};
  const ev = yearEvents[date] || {};

  document.getElementById("modalDateLabel").innerText = date;
  document.getElementById("eventTitleInput").value = ev.title || "";
  document.getElementById("eventStartInput").value = ev.start || "";
  document.getElementById("eventEndInput").value = ev.end || "";
  document.getElementById("eventLocationInput").value = ev.location || "";
  document.getElementById("eventDescriptionInput").value = ev.desc || "";

  document.getElementById("modal").style.display = "flex";
}

function closeModal() {
  document.getElementById("modal").style.display = "none";
  selectedDate = null;
  selectedCell = null;
}

function saveEvent() {
  const title = document.getElementById("eventTitleInput").value.trim();
  const start = document.getElementById("eventStartInput").value;
  const end = document.getElementById("eventEndInput").value;
  const location = document.getElementById("eventLocationInput").value.trim();
  const desc = document.getElementById("eventDescriptionInput").value.trim();

  if (!selectedDate || !title || !start) return;

  const year = selectedDate.split('-')[0];
  console.log('Saving event for year:', year, 'date:', selectedDate);

  const events = JSON.parse(localStorage.getItem("events") || "{}");

  if (!events[year]) {
    events[year] = {};
  }

  events[year][selectedDate] = { title, start, end, location, desc };

  localStorage.setItem("events", JSON.stringify(events));

  generateCalendarGrid();
  closeModal();
}

function deleteEvent() {
  if (!selectedDate) return;

  const year = currentYear;
  const events = JSON.parse(localStorage.getItem("events") || "{}");

  if (events[year] && events[year][selectedDate]) {
    delete events[year][selectedDate];
    if (Object.keys(events[year]).length === 0) delete events[year];
    localStorage.setItem("events", JSON.stringify(events));
  }

  generateCalendarGrid();
  closeModal();
}

function saveToFile() {
  const events = JSON.parse(localStorage.getItem("events") || "{}");

  const blob = new Blob([JSON.stringify(events, null, 2)], { type: "application/json" });
  const link = document.createElement("a");
  link.href = URL.createObjectURL(blob);
  link.download = "calendar_events.json";
  link.click();
}

document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("modal").style.display = "none";  // forțează ascunderea modalului
  updateMonthYearHeader();
  generateCalendarGrid();
});
</script>

<!--
Șterge manual evenimentele din localStorage înainte de test (în consola browser):
localStorage.removeItem('events');
și începe cu un calendar curat ca să eviți evenimente vechi conflictuale.
-->

</body>

</html>