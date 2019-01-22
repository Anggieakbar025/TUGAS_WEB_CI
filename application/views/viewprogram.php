<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.8.5">
	<title>Cover Template · Bootstrap</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
	 crossorigin="anonymous">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
        }
        .utama {
            margin-top:30vh;
            padding-left:50vh;
            padding-right:50vh;
            margin-bottom:25vh;
        }

	</style>
	<!-- Custom styles for this template -->
	<link href="cover.css" rel="stylesheet">
</head>

<body class="text-center">
	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<main role="main" class="inner cover utama">
			<h1 class="cover-heading">Cover your page.</h1>
			<p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text,
				and add your own fullscreen background photo to make it your own.</p>
			<p class="lead">
				<a href="<?= base_url(); ?>index.php/welcome/dashboard/Risdhi/Cowok" class="btn btn-lg btn-secondary">Halaman Utama</a>
			</p>
		</main>
		<?= $this->uri->segment(1) ?> <br>
		<?= $this->uri->segment(1) ?> <br>
		<?= $this->uri->segment(1) ?>


		<footer class="mastfoot mt-auto">
			<div class="inner">
				<p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
			</div>
		</footer>
	</div>
</body>

</html>
