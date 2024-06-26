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
</head>
<style>
    input[type=text] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    textarea {
        width: 100%;
        padding: 25px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    .tab {
        display: inline-block;
        margin-right: 1px;
        border: 1px solid #ccc;
        border-bottom: none;
        background-color: white;
        padding: 10px;
        cursor: pointer;
    }

    .tab.active {
        background-color: whitesmoke;
        border-color: #ddd;
    }

    .tabcontent {
        display: none;
        border: 1px solid #ddd;
        padding: 10px;
    }

    .tabcontent.active {
        display: block;
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

                <h1 class="h3 mb-3"><strong>Diplomele</strong> mele</h1>

                <div class="row">
                    <div class="col-xl-6 col-xxl-5 d-flex">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header" align="center">
                                        </div>
                                        <div class="card-body">
                                            <div class="tab" onclick="openTab(event, 'tab1')"><b style="color: rebeccapurple;">BAYER</b></div>
                                            <div class="tab" onclick="openTab(event, 'tab2')"><b style="color: midnightblue;">CMSB</b></div>

                                            <div id="tab1" class="tabcontent active">
                                                <ul>
                                                    <li><a href="diplome/Bayer/Diploma Webinar Bayer - Anticoagularea intre noutate si obisnuinta – 15 noiembrie 2022.pdf">Diplomă webinar Bayer - 15 noiembrie 2022</a></li>
                                                </ul>
                                            </div>
                                            <div id="tab2" class="tabcontent">
                                                <ul>
                                                    <li><a href="diplome/CMSB/CMSB_Certificat de participare.pdf">Diplomă student CMSB 2022</a></li>
                                                </ul>
                                            </div>

                                            <script>
                                                function openTab(evt, tabName) {
                                                    // Ascunde toate elementele de continut ale tabului
                                                    var tabcontent, tablinks;
                                                    tabcontent = document.getElementsByClassName("tabcontent");
                                                    for (var i = 0; i < tabcontent.length; i++) {
                                                        tabcontent[i].classList.remove("active");
                                                    }

                                                    // Dezactiveaza toate taburile
                                                    tablinks = document.getElementsByClassName("tab");
                                                    for (var i = 0; i < tablinks.length; i++) {
                                                        tablinks[i].classList.remove("active");
                                                    }

                                                    // Activeaza tabul apasat si afiseaza continutul corespunzator
                                                    document.getElementById(tabName).classList.add("active");
                                                    evt.currentTarget.classList.add("active");
                                                }
                                            </script>

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