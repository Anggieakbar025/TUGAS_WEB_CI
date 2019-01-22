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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
		$(document).ready(function () {
			// Add smooth scrolling to all links
			$("a").on('click', function (event) {

				// Make sure this.hash has a value before overriding default behavior
				if (this.hash !== "") {
					// Prevent default anchor click behavior
					event.preventDefault();

					// Store hash
					var hash = this.hash;

					// Using jQuery's animate() method to add smooth page scroll
					// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
					$('html, body').animate({
						scrollTop: $(hash).offset().top
					}, 800, function () {

						// Add hash (#) to URL when done scrolling (default click behavior)
						window.location.hash = hash;
					});
				} // End if
			});
			$('button.close')[0].on('click', function(){
				$(this).css('display', 'none');
			});
		});

	</script>

<style>
	/* body {
      background-image: linear-gradient(to bottom , #ffff99,#ff9999,#ff5050);
    } */
  </style>

<body id="main">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark jalan">
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
					<a class="nav-link " href="<?= base_url();?>index.php/welcome/utama#event">Event <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link " href="<?= base_url(); ?>index.php/welcome/profil">Profil <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link " href="<?= base_url(); ?>index.php/welcome/utama/#cp">Contact <span class="sr-only">(current)</span></a>
				</li>

			</ul>
		</div>
	</nav>

	</div>
