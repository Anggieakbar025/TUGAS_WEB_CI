<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	 crossorigin="anonymous">

	<!-- My CSS -->
	<link rel="stylesheet" href="<?= base_url(  ); ?>assets/style.css">

	<!-- font-awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
	 crossorigin="anonymous">

	<title>
		<?= $judul;?>
	</title>
</head>
<style>
	/* body {
      background-image: linear-gradient(to bottom , #ffff99,#ff9999,#ff5050);
    } */
  </style>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark jalan" id="navbarTemplek">
  <a class="navbar-brand logo" href="#">
  <i class="fas fa-cog"></i>SM
  </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
	 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto item">
				<li class="nav-item active">
					<a class="nav-link " href="<?= base_url();?>index.php/welcome/utama">Home<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link " href="<?= base_url();?>index.php/welcome/event">Event <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link " href="<?= base_url();?>index.php/welcome/gallery">Gallery <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
					 aria-haspopup="true" aria-expanded="false">
						About Us
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?= base_url(); ?>index.php/welcome/contact">Contact</a>
						<a class="dropdown-item" href="<?= base_url(); ?>index.php/welcome/profil">My Profil</a>
    
					</div>
				</li>
			</ul>
		</div>
	</nav>

	</div>
