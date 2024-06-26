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
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="Admin Dashboard">
    <meta name="keywords"
          content="Admin Dashboard, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png"/>

    <title>Admin Dashboard</title>

    <link href="static/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script type="text/javascript">
        window.onload = function () {
            var table = document.getElementById("type");
            for (let i = 0; i < table.childElementCount; i++) {
                table.children[i].setAttribute("class", table.children[i].children[2]);
            }
        }
    </script>
</head>
<style>
    /* Stilizare pentru modal */
    .modal {
        display: none; /* Modalul este ascuns inițial */
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5); /* Fundal semi-transparent */
    }

    .modal-content {
        background-color: #fefefe; /* Culoare fundal modal */
        margin: 10% auto; /* Ajustare margine pentru centrare */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Lățime modal */
        max-width: 600px; /* Lățime maximă pentru modal */
        border-radius: 8px; /* Colțuri rotunjite */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Umbră sub modal */
        position: relative;
    }

    .modal-content h2 {
        margin-top: 0;
        margin-bottom: 20px;
        text-align: center;
    }

    .close {
        color: #aaa;
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 24px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
    }

    .modal-content form {
        display: grid;
        gap: 15px;
    }

    .modal-content form input,
    .modal-content form textarea,
    .modal-content form button {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .modal-content form button {
        background-color: #007bff; /* Culoare de fundal pentru buton */
        color: white; /* Culoare text buton */
        cursor: pointer;
    }

    .modal-content form button:hover {
        background-color: #0056b3; /* Culoare de fundal la hover */
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
                <li class="sidebar-header">
                    Personal
                </li>

                <li class="sidebar-item active">
                    <a class="sidebar-link" href="admin.php">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-header">
                    Rapoarte
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="raport-rezervari-bilete.php">
                        <i class="align-middle" data-feather="square"></i> <span
                                class="align-middle">Rezervări bilete</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="raport-rezervari-evenimente.php">
                        <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Rezervări evenimente</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="raport-mesaje.php">
                        <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Mesaje</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="raport-abonati.php">
                        <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Abonați</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="raport-vanzari.php">
                        <i class="align-middle" data-feather="square"></i> <span class="align-middle">Vânzări</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="raport-utilizatori.php">
                        <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Utilizatori</span>
                    </a>
                </li>

                <li class="sidebar-header">
                    Management și evidență
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="management-evidenta_anunturi.php">
                        <i class="align-middle"></i> <span
                                class="align-middle">Anunțuri</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="management-evidenta_evenimente.php">
                        <i class="align-middle"></i> <span
                                class="align-middle">Evenimente</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="management-evidenta_produse.php">
                        <i class="align-middle"></i> <span
                                class="align-middle">Produse</span>
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
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                             aria-labelledby="alertsDropdown">
                    <li class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                            <i class="align-middle" data-feather="settings"></i>
                        </a>

                        <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                            <img src="images/AdrianaNastase.jpg" class="avatar img-fluid rounded me-1"/> <span class="text-dark"><?php
                                                        // Verifică dacă sesiunile pentru Prenume și Nume există
                                                        if (isset($_SESSION['Prenume'], $_SESSION['Nume'])) {
                                                            echo $_SESSION['Prenume'] . ' ' . $_SESSION['Nume'];
                                                        } else {
                                                            echo "Numele utilizatorului";
                                                        }
                                                        ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="profil.html"><i class="align-middle me-1"
                                                                           data-feather="user"></i> Profil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="login-register.html">Deconectare</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3"><strong>Management</strong> și evidență anunțuri</h1>

                <div class="row">
                    <div class="col-xl-6 col-xxl-5 d-flex">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header" align="center">
                                            <br>
                                            <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                                                    id="btn-add-event" style="background: #ab0c1e; color: white;"
                                                    onclick="openModal('modal-add')"><b>ADAUGĂ</b>
                                            </button>
                                            <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                                                    id="btn-edit-event" style="background: #ab0c1e; color: white;"
                                                    onclick="openModal('modal-edit')"><b>ACTUALIZEAZĂ</b>
                                            </button>
                                            <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                                                    id="btn-delete-event" style="background: #ab0c1e; color: white;"
                                                    onclick="openModal('modal-delete')"><b>ȘTERGE</b>
                                            </button>
                                            <div id="modal-add" class="modal">
                                                    <div class="modal-content">
                                                        <span class="close" onclick="closeModal('modal-add')">&times;</span>
                                                        <h2>Adaugă anunț</h2>
                                                        <form id="form-add-event" enctype="multipart/form-data" onsubmit="addEvent(event)">
                                                            <input type="text" id="modal-add-title" name="title" class="form-control mb-3" placeholder="Titlul anunțului" required>
                                                            <input type="text" id="modal-add-category" name="category" class="form-control mb-3" placeholder="Categoria" required>
                                                            <textarea id="modal-add-description" name="description" class="form-control mb-3" placeholder="Descrierea anunțului" required></textarea>
                                                            <input type="file" id="modal-add-image" name="image" class="form-control mb-3" accept="image/*" required>
                                                            <input type="text" id="modal-add-link" name="link" class="form-control mb-3" placeholder="Link" required>
                                                            <button type="submit" class="btn btn-primary">Publică</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                                <div id="modal-edit" class="modal">
                                                    <div class="modal-content">
                                                        <span class="close" onclick="closeModal('modal-edit')">&times;</span>
                                                        <h2>Modifică anunț</h2>
                                                        <form id="form-edit-event" enctype="multipart/form-data" onsubmit="editEvent(event)" method="POST">
                                                            <input type="text" id="modal-edit-id" name="id" placeholder="ID anunț">
                                                            <input type="text" id="modal-edit-title" name="title" class="form-control mb-3" placeholder="Titlul anunțului" required>
                                                            <input type="text" id="modal-edit-category" name="category" class="form-control mb-3" placeholder="Categoria" required>
                                                            <textarea id="modal-edit-description" name="description" class="form-control mb-3" placeholder="Descrierea anunțului" required></textarea>
                                                            <input type="file" id="modal-edit-image" name="image" class="form-control mb-3" accept="image/*">
                                                            <input type="text" id="modal-add-link" name="link" class="form-control mb-3" placeholder="Link" required>
                                                            <button type="submit" class="btn btn-primary">Actualizează</button>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div id="modal-delete" class="modal">
                                                    <div class="modal-content">
                                                        <span class="close" onclick="closeModal('modal-delete')">&times;</span>
                                                        <h2>Șterge anunț</h2>
                                                        <form id="form-delete-event" onsubmit="deleteEvent(event)">
                                                            <input type="text" id="modal-delete-id" name="id" placeholder="ID anunț">
                                                            <p>Sunteți sigur că doriți să ștergeți acest anunț?</p>
                                                            <button type="submit" class="btn btn-danger">Șterge</button>
                                                        </form>
                                                    </div>
                                                </div>

                                        <div class="card-body" id="print">
                                            <?php

                                            $x = mysqli_query($con, "SELECT * FROM ads ORDER BY ID;");
                                            echo "<table class='table table-bordered table-striped'>
                                                    <thead align='left'>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Imagine</th>
                                                        <th>Titlu</th>
                                                        <th>Categorie</th>
                                                        <th>Descriere</th>
                                                        <th>Link</th>
                                                    </tr>
                                                    </thead>
                                                    <tr>";

                                                    while ($z = mysqli_fetch_assoc($x)) {
                                                        echo "<tr>
                                                            <td>" . $z['ID'] . "</td>
                                                            <td>";
                                                        
                                                        if (!empty($z['Imagine1'])) {
                                                            echo "<img src='data:image/png;base64," . base64_encode($z['Imagine1']) . "' width='50px' height='50px' />";
                                                        }
                                                        
                                                        if (!empty($z['Imagine2'])) {
                                                            echo "<img src='data:image/jpeg;base64," . base64_encode($z['Imagine2']) . "' width='50px' height='50px' />";
                                                        }
                                                        
                                                        // Afișează Imagine3 dacă există, și așa mai departe...
                                                        // Adaugă aici condițiile pentru toate tipurile de imagini pe care le ai
                                                        
                                                        echo "</td>
                                                            <td>" . $z['Titlu'] . "</td>
                                                            <td>" . $z['Categorie'] . "</td>
                                                            <td>" . $z['Descriere'] . "</td>
                                                            <td>" . $z['Link'] . "</td>
                                                        </tr>";
                                                    }
                        
                                            echo "</table>";
                                            ?>

                                        </div>
                                        <script type="text/javascript">
                                            function evidentaevenimente() {
                                                const invoice = this.document.getElementById("print");
                                                console.log(invoice);
                                                console.log(window);
                                                //document.getElementById("exportButton").style.display = "none";
                                                var opt = {
                                                    margin: 0.3,
                                                    filename: `raport-evidenta-anunturi${new Date().toISOString().slice(0, 10)}`,
                                                    image: {type: 'jpeg', quality: 0.98},
                                                    html2canvas: {scale: .98},
                                                    jsPDF: {unit: 'in', format: 'a4', orientation: 'portrait'}
                                                };
                                                setTimeout(function () {
                                                    html2pdf().from(invoice).set(opt).save();
                                                }, 2000);
                                            }
                                        </script>
                                        </br>
                                        <center>
                                            <button onclick="evidentaevenimente()" id="exportButton"
                                                    class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                                                    style="background: #0d9443; color: white;"><b>PRINTEAZĂ</b></button>
                                        </center>
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
  function openModal(modalId) {
    document.getElementById(modalId).style.display = "block";
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}

function addEvent(event) {
    event.preventDefault();
    var form = document.getElementById("form-add-event");
    var formData = new FormData(form);

    fetch('adaugaanunt.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        closeModal('modal-add');
        alert('Anunț adăugat cu succes!');
        location.reload();
    })
    .catch(error => {
        console.error('Error:', error);
        alert('A apărut o eroare. Vă rugăm să încercați din nou.');
    });
}

function editEvent(event) {
    event.preventDefault();
    var form = document.getElementById("form-edit-event");
    var formData = new FormData(form);

    fetch('modificaanunt.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        alert('Anunț actualizat cu succes!');
        closeModal('modal-edit');
        location.reload();
    })
    .catch(error => {
        console.error('Error:', error);
        alert('A apărut o eroare. Vă rugăm să încercați din nou.');
    });
}

function deleteEvent(event) {
    event.preventDefault();
    var form = document.getElementById("form-delete-event");
    var formData = new FormData(form);

    fetch('stergeanunt.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        closeModal('modal-delete');
        location.reload();
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

</script>

</body>
</html>