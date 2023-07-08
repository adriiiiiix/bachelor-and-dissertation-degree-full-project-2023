<?php
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
                    <a class="sidebar-link" href="user.html">
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
                    <a class="sidebar-link" href="diplomele-mele.html">
                        <i class="align-middle" style="padding-left: 22px;"></i> <span class="align-middle">Diplomele mele</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="calendar.html">
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
                            <img src="images/user.jpg" class="avatar img-fluid rounded me-1"/><span class="text-dark">Adriana Năstase</span>
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

                <h1 class="h3 mb-3"><strong>Solicită</strong> o rezervare</h1>

                <div class="row">
                    <div class="col-xl-6 col-xxl-5 d-flex">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header" align="center">
                                        </div>
                                        <div class="card-body">
                                            <form action="solicitarezervare.php" method="POST">
                                                <div class="mb-3">
                                                    <label class="form-check-label">Nume</label>
                                                    <input type="text" name="nume">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-check-label">Prenume</label>
                                                    <input type="text" name="prenume">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-check-label">Denumirea evenimentului</label>
                                                    <input type="text" name="denumire">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-check-label">Data</label>
                                                    <input type="date" name="data">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-check-label">Detalii</label>
                                                    <input type="text" name="detalii">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-check-label">Buget</label>
                                                    <input type="text" name="buget">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-check-label">Codul serviciului</label>
                                                    <input type="text" name="serviciu">
                                                </div>
                                                <div class="mb-3">
                                                    <br>
                                                    <button type="submit" name="add"
                                                            class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                                                            style="background: #0d9443; color: white;"><b>TRIMITE
                                                            REZERVAREA</b></button>
                                                </div>
                                            </form>
                                            <br>
                                            <h1 class="h4 mb-3">Servicii <strong>disponibile</strong></h1>
                                            <?php
                                            $x = mysqli_query($con, "SELECT * FROM Serviciu ORDER BY Cod_Serviciu;");
                                            echo "<table class='table table-bordered table-striped'>
								<thead align='left'>
													<tr>
														<th>ID</th>
														<th>Denumire</th>
														<th>Preț</th>
														<th>Detalii</th>
														<th>Nume furnizor</th>
													</tr>
												</thead>
								<tr>";

                                            while ($z = mysqli_fetch_assoc($x)) {
                                                echo "<tr>
										<td>" . $z['Cod_Serviciu'] . "</td>
										<td>" . $z['Denumire'] . "</td>
										<td>" . $z['Pret'] . "</td>
										<td>" . $z['Detalii'] . "</td>
										<td>" . $z['Cod_Furnizor'] . "</td>
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