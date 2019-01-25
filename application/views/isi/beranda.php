<div class="container">
	<div class="row" id="salam">
		<div class="col md-6">
			<h1 class="text-center">
				Selamat Datang
				<?= $nama_lengkap ?> <br>
				Tunjukkan Bahwa Diri Kita
				<?= $jenis_kelamin ?>
			</h1>
			<p class="text-center">
				Silahkan Explore Halaman Kami !!
			</p>
			<img src="<?= base_url(); ?>assets/img/" alt="" class="img">

		</div>
	</div>
	<div class="row tambahan">
		<div class="isi">
			<p>
				<a class="btn btn-primary"  href="<?= base_url('Welcome/home')?>">
					Jump to Home
				</a>
				<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
				 aria-controls="collapseExample">
					Tentang Halaman Kami
				</button>
			</p>
			<div class="collapse alert" id="collapseExample">
				<div class="card card-body text-center">
					Halaman ini merupakan halaman yang dikelola oleh OSM (Old Steel Malang), yang juga sebagai tempat untuk bertukar  pikiran maupun yang lainya.
				</div>
			</div>
		</div>
	</div>
</div>

