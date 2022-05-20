<h1><?= $title; ?></h1>

<div class="card mb-3" style="max-width: 540px;">
	<div class="row g-0">
		<div class="col-md-4">
			<img src="<?= base_url('assets/images/') . $user['image'] ?>" class="img-thumbnail" alt="Foto Profil">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h85 class="card-title"><?= $user['name'] ?></h85>
				<p class="card-text">Email : <?= $user['email'] ?></p>
				<p class="card-text"><small class="text-muted">Akun ini dibuat pada <?= $user['date_created'] ?></small></p>
				<p class="card-text"><a href="<?= base_url('user/edit') ?>">Edit Data Diri</a></p>
			</div>
		</div>
	</div>
</div>
