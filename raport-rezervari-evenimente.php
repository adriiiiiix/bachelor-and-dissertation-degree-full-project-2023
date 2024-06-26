<?php
session_start();
$con = mysqli_connect("localhost", "root", "root", "BeSocial");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Link-uri către fișierele CSS și fonturi -->
    <link rel="stylesheet" href="static/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Iconiță pentru favicon -->
    <link rel="shortcut icon" href="img/icons/icon-48x48.png">
    <!-- Fișierele JavaScript -->
    <script src="static/js/app.js" defer></script>
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

<body>
    <div class="wrapper">
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <center>
                    <a class="sidebar-brand" href="index.html">
                        <!-- <img height="75" src="images/logo.png" style="background-color: white;"> -->
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
                <!-- <h1 class="h3 mb-3"><strong>Raport</strong> rezervări evenimente</h1> -->
                <div class="row">
                    <div class="col-xl-6 col-xxl-5 d-flex">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body" id="print">
                                            <center>
                                                 <img height="75" src="images/logo.png" style="background-color: white;">
                                            </center>
                                            <br>
                                        <h1 class="h3 mb-3"><strong>Raport</strong> rezervări evenimente</h1>
                                            <?php
                                            $x = mysqli_query($con, "SELECT * FROM RezervareEveniment ORDER BY ID;");
                                            echo "<table class='table table-bordered table-striped' id='myTable' data-toggle='table'>
                                                <thead align='left'>
                                                    <tr>
                                                            <th>ID</th>
                                                            <th>Nume</th>
                                                            <th>Prenume</th>
                                                            <th>Denumire</th>
                                                            <th>Data</th>
                                                            <th>Detalii</th>
                                                            <th>Buget</th>
                                                            <th>Serviciu</th>
                                                    </tr>
                                                 </thead>
                                             <tbody>";
                                            while ($z = mysqli_fetch_assoc($x)) {
                                                echo "<tr>
                                                        <td>" . $z['ID'] . "</td>
                                                        <td>" . $z['Nume'] . "</td>
                                                        <td>" . $z['Prenume'] . "</td>
                                                        <td>" . $z['Denumire'] . "</td>
                                                        <td>" . $z['Data'] . "</td>
                                                        <td>" . $z['Detalii'] . "</td>
                                                        <td>" . $z['Buget'] . "</td>
                                                        <td>" . $z['Cod_Serviciu'] . "</td>
                                                        </tr>";
                                            }
                                            echo "</tbody></table>";
                                            ?>
                                        </div>
                                        <script type="text/javascript">
                                            function rezervarievenimente() {
                                                const invoice = this.document.getElementById("print");
                                                console.log(invoice);
                                                console.log(window);
                                                //document.getElementById("exportButton").style.display = "none";
                                                var opt = {
                                                    margin: 0.3,
                                                    filename: `raport rezervari evenimente ${new Date().toISOString().slice(0, 10)}`,
                                                    image: {type: 'jpeg', quality: 0.98},
                                                    html2canvas: {scale: .98},
                                                    jsPDF: {unit: 'in', format: 'a4', orientation: 'landscape'}
                                                };
                                                setTimeout(function () {
                                                    html2pdf().from(invoice).set(opt).save();
                                                }, 2000);
                                            }
                                        </script>
                                        </br>
                                        <center>
                                            <button onclick="rezervarievenimente()" id="exportButton"
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

</body>
</html>