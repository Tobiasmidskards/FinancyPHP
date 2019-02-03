<?php

session_start();

?>

<!DOCTYPE html>

<html>
<head>

	<meta charset="utf-8">
	<title>CV - Tobias</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body>

<header>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="/"><i style="font-size:18px" class="fa fa-area-chart"></i> Financy</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="nav navbar-nav">
				<?php
				if (isset($_SESSION['userId'])) {
		      echo '<li class="nav-item">
		        <a class="nav-link" href="#">Kontoret<span class="sr-only">(current)</span></a>
		      </li>
					<li class="nav-item">
						<a class="nav-link" href="#">Arbejdere<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Markedet<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Produkter<span class="sr-only">(current)</span></a>
					</li>';
				}
				?>

	    </ul>

			<div class="collapse navbar-collapse" id="navbarNav">

			</div>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link disabled" href="#"><small>aplha, patch 0.90</small><span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#">FAQ<span class="sr-only">(current)</span></a>
				</li>
				<?php
				if (isset($_SESSION['userId'])) {
					echo '<li class="nav-item"><a class="nav-link" href="/includes/logout.inc.php">Log ud</a></li>';
				}
				else{
					echo '<li class="nav-item"><a class="nav-link" href="login.php">Log ind</a></li>';
					echo '<li class="nav-item"><a class="nav-link" href="signup.php">Opret bruger</a></li>';
				}
				?>

			</ul>
			</div>
	</nav>
	<br>

</header>
