<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 3 | Log in</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="../../index2.html"><b>Klik</b>MPTI</a>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">

				<?= $this->session->flashdata('message'); ?>
				<p class="login-box-msg">Masuk untuk Melanjutkan</p>

				<form action="<?= base_url(); ?>auth/index" method="post">
					<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
					<div class="input-group mb-3">
						<input type="text" name="username" class="form-control" placeholder="Username" value="<?= set_value('username'); ?>">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
					<div class="input-group mb-3">
						<input type="password" name="password" class="form-control" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-block">Sign In</button>
					<a href="<?= base_url() ?>auth/registration" class="btn btn-primary btn-block btn-success">Register</a>
			</div>
			</form>
		</div>
	</div>
	</div>
</body>

</html>
