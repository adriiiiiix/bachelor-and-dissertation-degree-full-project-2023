<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta content="IE=edge" http-equiv="X-UA-Compatible" />
		<meta
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
			name="viewport"
		/>
		<meta
			content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5"
			name="description"
		/>
		<meta content="Admin Dashboard" name="author" />
		<meta
			content="Admin Dashboard, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"
			name="keywords"
		/>

		<link href="https://fonts.gstatic.com" rel="preconnect" />
		<link href="img/icons/icon-48x48.png" rel="shortcut icon" />

		<title>Admin Dashboard</title>

		<link href="static/css/app.css" rel="stylesheet" />
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap"
			rel="stylesheet"
		/>
	</head>

	<body>
		<!-- <script>
    var password = prompt("Introduceți codul de acces:");
    if(password == "****"){
        confirm ("Acces permis!")
    }
    else{
        confirm ("Acces interzis!");
        location =  "login-register.html";
    }
</script> -->
		<div class="wrapper">
			<nav class="sidebar js-sidebar" id="sidebar">
				<div class="sidebar-content js-simplebar">
					<center>
						<a class="sidebar-brand" href="index.html">
							<img
								height="75"
								src="images/logo.png"
								style="background-color: white"
							/>
						</a>
					</center>
					<ul class="sidebar-nav">
						<li class="sidebar-header">Personal</li>

						<li class="sidebar-item active">
							<a class="sidebar-link" href="admin.html">
								<i
									class="align-middle"
									data-feather="sliders"
								></i>
								<span class="align-middle">Dashboard</span>
							</a>
						</li>

						<li class="sidebar-header">Rapoarte</li>

						<li class="sidebar-item">
							<a
								class="sidebar-link"
								href="raport-rezervari-bilete.php"
							>
								<i
									class="align-middle"
									data-feather="square"
								></i>
								<span class="align-middle"
									>Rezervări bilete</span
								>
							</a>
						</li>

						<li class="sidebar-item">
							<a
								class="sidebar-link"
								href="raport-rezervari-evenimente.php"
							>
								<i
									class="align-middle"
									data-feather="check-square"
								></i>
								<span class="align-middle"
									>Rezervări evenimente</span
								>
							</a>
						</li>

						<li class="sidebar-item">
							<a class="sidebar-link" href="raport-mesaje.php">
								<i class="align-middle" data-feather="grid"></i>
								<span class="align-middle">Mesaje</span>
							</a>
						</li>

						<li class="sidebar-item">
							<a class="sidebar-link" href="raport-abonati.php">
								<i
									class="align-middle"
									data-feather="align-left"
								></i>
								<span class="align-middle">Abonați</span>
							</a>
						</li>

						<li class="sidebar-item">
							<a class="sidebar-link" href="raport-vanzari.php">
								<i
									class="align-middle"
									data-feather="square"
								></i>
								<span class="align-middle">Vânzări</span>
							</a>
						</li>

						<li class="sidebar-item">
							<a
								class="sidebar-link"
								href="raport-utilizatori.php"
							>
								<i
									class="align-middle"
									data-feather="check-square"
								></i>
								<span class="align-middle">Utilizatori</span>
							</a>
						</li>

						<li class="sidebar-header">Management și evidență</li>
						<li class="sidebar-item">
                    <a class="sidebar-link" href="management-evidenta_anunturi.php">
                        <i class="align-middle"></i> <span
                                class="align-middle">Anunțuri</span>
                    </a>
                </li>
						<li class="sidebar-item">
							<a
								class="sidebar-link"
								href="management-evidenta_evenimente.php"
							>
								<i class="align-middle"></i>
								<span class="align-middle">Evenimente</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a
								class="sidebar-link"
								href="management-evidenta_produse.php"
							>
								<i class="align-middle"></i>
								<span class="align-middle">Produse</span>
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
								<a
									class="nav-icon dropdown-toggle"
									data-bs-toggle="dropdown"
									href="#"
									id="alertsDropdown"
								>
								</a>
							</li>
							<div
								aria-labelledby="alertsDropdown"
								class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
							></div>
							<li class="nav-item dropdown">
								<a
									class="nav-icon dropdown-toggle d-inline-block d-sm-none"
									data-bs-toggle="dropdown"
									href="#"
								>
									<i
										class="align-middle"
										data-feather="settings"
									></i>
								</a>

								<a
									class="nav-link dropdown-toggle d-none d-sm-inline-block"
									data-bs-toggle="dropdown"
									href="#"
								>
									<img
										class="avatar img-fluid rounded me-1"
										src="images/AdrianaNastase.jpg"
									/>
									<span class="text-dark"><?php
                                                        // Verifică dacă sesiunile pentru Prenume și Nume există
                                                        if (isset($_SESSION['Prenume'], $_SESSION['Nume'])) {
                                                            echo $_SESSION['Prenume'] . ' ' . $_SESSION['Nume'];
                                                        } else {
                                                            echo "Numele utilizatorului";
                                                        }
                                                        ?></span>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a class="dropdown-item" href="profil.html"
										><i
											class="align-middle me-1"
											data-feather="user"
										></i>
										Profil</a
									>
									<div class="dropdown-divider"></div>
									<a
										class="dropdown-item"
										href="login-register.html"
										>Deconectare</a
									>
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
															<h5
																class="card-title"
															>
																Vânzări
															</h5>
														</div>

														<div class="col-auto">
															<div
																class="stat text-primary"
															>
																<i
																	class="align-middle"
																	data-feather="truck"
																></i>
															</div>
														</div>
													</div>
													<h1 class="mt-1 mb-3">
														2.382
													</h1>
													<div class="mb-0">
														<span
															class="text-danger"
														>
															<i
																class="mdi mdi-arrow-bottom-right"
															></i>
															-3.65%
														</span>
														<span class="text-muted"
															>De săptămâna
															trecută</span
														>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col mt-0">
															<h5
																class="card-title"
															>
																Vizitatori
															</h5>
														</div>

														<div class="col-auto">
															<div
																class="stat text-primary"
															>
																<i
																	class="align-middle"
																	data-feather="users"
																></i>
															</div>
														</div>
													</div>
													<h1 class="mt-1 mb-3">
														14.212
													</h1>
													<div class="mb-0">
														<span
															class="text-success"
														>
															<i
																class="mdi mdi-arrow-bottom-right"
															></i>
															5.25%
														</span>
														<span class="text-muted"
															>De săptămâna
															trecută</span
														>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col mt-0">
															<h5
																class="card-title"
															>
																Câștiguri
															</h5>
														</div>

														<div class="col-auto">
															<div
																class="stat text-primary"
															>
																<i
																	class="align-middle"
																	data-feather="dollar-sign"
																></i>
															</div>
														</div>
													</div>
													<h1 class="mt-1 mb-3">
														21.300 RON
													</h1>
													<div class="mb-0">
														<span
															class="text-success"
														>
															<i
																class="mdi mdi-arrow-bottom-right"
															></i>
															6.65%
														</span>
														<span class="text-muted"
															>De săptămâna
															trecută</span
														>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col mt-0">
															<h5
																class="card-title"
															>
																Comenzi
															</h5>
														</div>

														<div class="col-auto">
															<div
																class="stat text-primary"
															>
																<i
																	class="align-middle"
																	data-feather="shopping-cart"
																></i>
															</div>
														</div>
													</div>
													<h1 class="mt-1 mb-3">
														64
													</h1>
													<div class="mb-0">
														<span
															class="text-danger"
														>
															<i
																class="mdi mdi-arrow-bottom-right"
															></i>
															-2.25%
														</span>
														<span class="text-muted"
															>De săptămâna
															trecută</span
														>
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
											<h5 class="card-title mb-0">
												Ultimele proiecte
											</h5>
										</div>
										<table class="table table-hover my-0">
											<thead align="left">
												<tr>
													<th>Nume</th>
													<th
														class="d-none d-xl-table-cell"
													>
														Data de început
													</th>
													<th
														class="d-none d-xl-table-cell"
													>
														Data de încheiere
													</th>
													<th>Stare</th>
													<th
														class="d-none d-md-table-cell"
													>
														Responsabil
													</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Proiectul Apollo</td>
													<td
														class="d-none d-xl-table-cell"
													>
														01/01/2021
													</td>
													<td
														class="d-none d-xl-table-cell"
													>
														31/06/2021
													</td>
													<td>
														<span
															class="badge bg-success"
															>Terminat</span
														>
													</td>
													<td
														class="d-none d-md-table-cell"
													>
														Adry
													</td>
												</tr>
												<tr>
													<td>Proiectul Fireball</td>
													<td
														class="d-none d-xl-table-cell"
													>
														01/01/2021
													</td>
													<td
														class="d-none d-xl-table-cell"
													>
														31/06/2021
													</td>
													<td>
														<span
															class="badge bg-danger"
															>Anulat</span
														>
													</td>
													<td
														class="d-none d-md-table-cell"
													>
														Adry
													</td>
												</tr>
												<tr>
													<td>Proiectul Nitro</td>
													<td
														class="d-none d-xl-table-cell"
													>
														01/01/2021
													</td>
													<td
														class="d-none d-xl-table-cell"
													>
														31/06/2021
													</td>
													<td>
														<span
															class="badge bg-warning"
															>În așteptare</span
														>
													</td>
													<td
														class="d-none d-md-table-cell"
													>
														Adry
													</td>
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
									Toate drepturile sunt rezervate. © 2022
									Media Med Publicis
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
