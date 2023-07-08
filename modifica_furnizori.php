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
                    <a class="sidebar-link" href="admin.html">
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
                    <a class="sidebar-link" href="management-evidenta_evenimente.php">
                        <i class="align-middle" data-feather="bar-chart-2"></i> <span
                                class="align-middle">Evenimente</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="management-evidenta_furnizori.php">
                        <i class="align-middle" data-feather="map"></i> <span class="align-middle">Furnizori</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="management-evidenta_produse.php">
                        <i class="align-middle" data-feather="bar-chart-2"></i> <span
                                class="align-middle">Produse</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="management-evidenta_servicii.php">
                        <i class="align-middle" data-feather="map"></i> <span class="align-middle">Servicii</span>
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
                            <img src="images/AdrianaNastase.jpg" class="avatar img-fluid rounded me-1"/> <span
                                    class="text-dark">Adry</span>
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

                <h1 class="h3 mb-3"><strong>Modifică</strong> furnizor</h1>

                <div class="row">
                    <div class="col-xl-6 col-xxl-5 d-flex">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header" align="center">
                                            <br>
                                            <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                                                    id="add-task" style="background: #ab0c1e; color: white;"
                                                    onclick="document.location='management-evidenta_furnizori.php'"><b>ÎNAPOI</b>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <form action="modificafurnizori.php" method="POST">
                                                <div class="mb-3">
                                                    <label class="form-check-label">ID</label>
                                                    <input type="text" name="id">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-check-label">Denumire</label>
                                                    <input type="text" name="denumire">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-check-label">Adresă</label>
                                                    <input type="text" name="adresa">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-check-label">E-mail</label>
                                                    <input type="text" name="email">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-check-label">Telefon</label>
                                                    <input type="text" name="telefon">
                                                </div>
                                                <div class="mb-3">
                                                    <br>
                                                    <button type="submit" name="update_event"
                                                            class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                                                            style="background: #0d9443; color: white;"><b>ACTUALIZEAZĂ
                                                            FURNIZOR</b></button>
                                                </div>
                                            </form>
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