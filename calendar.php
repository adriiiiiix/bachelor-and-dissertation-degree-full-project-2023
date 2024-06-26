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

                                            <div class="calendar">
                                                <div class="timeline">
                                                    <div class="spacer"></div>
                                                    <div class="spacer"></div>
                                                    <div class="time-marker">17 PM</div>
                                                    <div class="time-marker">18 PM</div>
                                                    <div class="time-marker">19 PM</div>
                                                </div>
                                                <div class="days">
                                                    <div class="day mon">
                                                        <div class="date">
                                                            <p class="date-num">10</p>
                                                            <p class="date-day">Lun.</p>
                                                        </div>
                                                        <br>
                                                        <div class="events" style="background-color: #0f5da1;">
                                                        </div>
                                                    </div>
                                                    <div class="day tues">
                                                        <div class="date">
                                                            <p class="date-num">11</p>
                                                            <p class="date-day">Mar.</p>
                                                        </div>
                                                        <br>
                                                        <div class="events" style="background-color: #0f5da1;">
                                                            <div class="event start-10 end-12 corp-fi" style="background-color: #ffffff; border-color: #ffffff;">
                                                                <p class="title" style="font-size: 13px;">REDEFINING LDL-C MANAGEMENT IN VERY HIGH RISK PATIENTS</p>
                                                                <p class="time" style="font-size: 12px;">17 PM - 19 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="day wed">
                                                        <div class="date">
                                                            <p class="date-num">12</p>
                                                            <p class="date-day">Mie.</p>
                                                        </div>
                                                        <br>
                                                        <div class="events" style="background-color: #0f5da1;">
                                                        </div>
                                                    </div>
                                                    <div class="day thurs">
                                                        <div class="date">
                                                            <p class="date-num">13</p>
                                                            <p class="date-day">Joi</p>
                                                        </div>
                                                        <br>
                                                        <div class="events" style="background-color: #0f5da1;">
                                                        </div>
                                                    </div>
                                                    <div class="day fri">
                                                        <div class="date">
                                                            <p class="date-num">14</p>
                                                            <p class="date-day">Vin.</p>
                                                        </div>
                                                        <br>
                                                        <div class="events" style="background-color: #0f5da1;">
                                                        </div>
                                                    </div>
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

</body>

</html>