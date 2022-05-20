<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>KlikMPTI</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url('admin/dashboard') ?>" class="nav-link">Beranda</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Mengenai Website ini</a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Messages Dropdown Menu -->
				<?php
				$notif = $this->db->get_where('notification', ['is_read' => 0])->result_array();
				$notif_count = count($notif);
				?>
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-bell fa-lg mt-3"></i>
						<span class="badge badge-danger navbar-badge"><?= $notif_count ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<a href="#" class="dropdown-item">
							<!-- Message Start -->
							<?php foreach ($notif as $notifs) : ?>
								<div class="media">
									<div class="media-body">
										<h3 class="dropdown-item-title">
											<b><?= $notifs['title'] ?></b>
										</h3>
										<p class="text-sm"><?= $notifs['message'] ?></p>
										<!-- <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i></p> -->
									</div>
								</div>
								<div class="dropdown-divider"></div>
							<?php endforeach; ?>
						</a>
						<a href="<?= base_url('notif') ?>" class="dropdown-item dropdown-footer">Lihat semua notifikasi</a>
					</div>
				</li>

				<li class="nav-item dropdown">
					<?php $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array() ?>
					<div class="user-panel mt-2 pb-2 mb-2 d-flex">
						<div class="image">
							<img src="<?= base_url('assets/images/') . $data['user']['image'] ?>" class="img-circle elevation-2" alt="Thumbnail">
						</div>
						<div class="info">
							<a href="#" class="d-block" data-toggle="dropdown" href="#"><?= $data['user']['name'] ?></a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
								<a href="#" class="dropdown-item">
								</a>
							</div>
						</div>
					</div>
				</li>

			</ul>
		</nav>
		<!-- /.navbar -->

		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<?php if ($this->session->flashdata('sempro_added')) : ?>
						<?php echo '<p class="alert alert-success">' . $this->session->flashdata('sempro_added') ?>
					<?php endif; ?>
					<?php if ($this->session->flashdata('sempro_deleted')) : ?>
						<?php echo '<p class="alert alert-success">' . $this->session->flashdata('sempro_deleted') ?>
					<?php endif; ?>
					<?php if ($this->session->flashdata('notif_added')) : ?>
						<?php echo '<p class="alert alert-success">' . $this->session->flashdata('notif_added') ?>
					<?php endif; ?>
