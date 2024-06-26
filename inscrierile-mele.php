<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- Link-uri către fișierele CSS și fonturi -->
    <link rel="stylesheet" href="static/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Iconiță pentru favicon -->
    <link rel="shortcut icon" href="img/icons/icon-48x48.png">
    <!-- Fișierele JavaScript -->
    <script src="static/js/app.js" defer></script>
    <!-- Stiluri CSS pentru formular și alte elemente -->
    <style>
        input[type=text],
        input[type=date],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav class="sidebar js-sidebar" id="sidebar">
            <div class="sidebar-content js-simplebar">
                <!-- Logo și link către pagina principală -->
                <center>
                    <a class="sidebar-brand" href="index.html">
                        <img height="75" src="images/logo.png" style="background-color: white;">
                    </a>
                </center>
                <!-- Meniu lateral -->
                <ul class="sidebar-nav">
                    <!-- Elemente de meniu -->
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

        <!-- Antetul (Navbar) -->
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <!-- Buton pentru toggle-ul sidebar-ului -->
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <!-- Conținutul antetului (elemente de meniu și profil utilizator) -->
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <!-- Dropdown pentru notificări -->
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" data-bs-toggle="dropdown" href="#" id="alertsDropdown">
                            </a>
                            <!-- Meniu dropdown pentru notificări -->
                            <div aria-labelledby="alertsDropdown" class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"></div>
                        </li>
                        <!-- Dropdown pentru setări și profil utilizator -->
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" data-bs-toggle="dropdown" href="#">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>
                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" data-bs-toggle="dropdown" href="#">
                                <!-- Imagine avatar utilizator și nume utilizator din sesiune -->
                                <img class="avatar img-fluid rounded me-1" src="images/user.jpg" />
                                <span class="text-dark">
                                    <?php
                                    // Verificare sesiuni pentru nume și prenume utilizator
                                    if (isset($_SESSION['Prenume'], $_SESSION['Nume'])) {
                                        echo $_SESSION['Prenume'] . ' ' . $_SESSION['Nume'];
                                    } else {
                                        echo "Numele utilizatorului";
                                    }
                                    ?>
                                </span>
                            </a>
                            <!-- Meniu dropdown pentru setări și deconectare -->
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                    <i class="align-middle me-1" data-feather="user"></i> Profil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login-register.html">Deconectare</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Conținutul principal (formular pentru rezervare și listă de servicii disponibile) -->
            <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3"><strong>Înscrierile</strong> mele</h1>

                <div class="row">
                    <div class="col-xl-6 col-xxl-5 d-flex">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header" align="center">
                                        </div>
                                        <div class="card-body">
                                            <?php
                                            $x = mysqli_query($con, "SELECT * FROM RezervareBilet ORDER BY ID;");
                                            echo "<table class='table table-bordered table-striped'>
								<thead align='left'>
													<tr>
														<th>ID</th>
														<th>Nume</th>
														<th>Prenume</th>
														<th>Funcție</th>
														<th>E-mail</th>
														<th>Telefon</th>
														<th>Webinar</th>
														<th>Taxă</th>
														<th>Plată</th>
														<th>Chitanță</th>
													</tr>
												</thead>
								<tr>";

                                            while ($z = mysqli_fetch_assoc($x)) {
                                                echo "<tr>
										<td>" . $z['ID'] . "</td>
										<td>" . $z['Nume'] . "</td>
										<td>" . $z['Prenume'] . "</td>
										<td>" . $z['GradProfesional'] . "</td>
										<td>" . $z['Email'] . "</td>
										<td>" . $z['Telefon'] . "</td>
										<td>" . $z['Webinar'] . "</td>
										<td>" . $z['TotalPlata'] . "</td>
										<td>" . $z['MetodaPlata'] . "</td>
										<td><a href='confirmare-comanda-redefining-ldl-c-management-for-very-high-risk-patients.html'>Vezi chitanță</a></td>
										</tr>";
                                            }
                                            echo "</table>";
                                            ?>
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

</body>

</html>