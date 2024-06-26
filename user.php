<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="Responsive User &amp; Dashboard Template based on Bootstrap 5" name="description">
    <meta content="User Dashboard" name="author">
    <meta content="User Dashboard, bootstrap, bootstrap 5, user, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"
          name="keywords">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="img/icons/icon-48x48.png" rel="shortcut icon"/>

    <title>User Dashboard</title>

    <link href="static/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    <nav class="sidebar js-sidebar" id="sidebar">
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
                        <a class="nav-icon dropdown-toggle" data-bs-toggle="dropdown" href="#" id="alertsDropdown">
                        </a>
                    </li>
                    <div aria-labelledby="alertsDropdown"
                         class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"></div>
                    <li class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" data-bs-toggle="dropdown" href="#">
                            <i class="align-middle" data-feather="settings"></i>
                        </a>

                        <a class="nav-link dropdown-toggle d-none d-sm-inline-block" data-bs-toggle="dropdown" href="#">
                            <img class="avatar img-fluid rounded me-1" src="images/user.jpg"/><span class="text-dark"><?php
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

                <h1 class="h3 mb-3">Dashboard</h1>

                <div class="row">
                    <div class="col-xl-6 col-xxl-5 d-flex">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col mt-0">
                                                    <h5 class="card-title">Numărul de evenimente solicitate</h5>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="stat text-primary">
                                                        <i class="align-middle" data-feather="truck"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <h1 class="mt-1 mb-3">2</h1>
                                            <div class="mb-0">
                                                <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.85% </span>
                                                <span class="text-muted">De săptămâna trecută</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col mt-0">
                                                    <h5 class="card-title">Numărul de înscrieri la evenimente</h5>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="stat text-primary">
                                                        <i class="align-middle" data-feather="dollar-sign"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <h1 class="mt-1 mb-3">4</h1>
                                            <div class="mb-0">
                                                <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 4.95% </span>
                                                <span class="text-muted">De săptămâna trecută</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Istoric activitate</h5>
                                </div>
                                <table class="table table-hover my-0">
                                    <thead align="left">
                                    <tr>
                                        <th>Acțiune</th>
                                        <th class="d-none d-xl-table-cell">Descriere</th>
                                        <th class="d-none d-xl-table-cell">Dată</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Autentificare</td>
                                        <td class="d-none d-xl-table-cell">Utilizatorul s-a autentificat în aplicație
                                        </td>
                                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    </tr>
                                    <tr>
                                        <td>Resetare parolă</td>
                                        <td class="d-none d-xl-table-cell">Utilizatorul și-a resetat parola</td>
                                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    </tr>
                                    <tr>
                                        <td>Înregistrare</td>
                                        <td class="d-none d-xl-table-cell">Utilizatorul s-a înregistrat în platformă
                                        </td>
                                        <td class="d-none d-xl-table-cell">15/06/2021</td>
                                    </tr>
                                    </tbody>
                                </table>
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