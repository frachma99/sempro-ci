<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= base_url() ?>" class="brand-link">
		<span class="brand-text d-flex justify-content-center"><b>Klik</b>MPTI</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">

		<!-- Sidebar Menu -->
		<nav class="mt-2">

			<?php if ($user['role_id'] == 1) : ?>
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<li class="nav-header">UTAMA</li>
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-copy"></i>
							<p>
								List Pendaftaran
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>

						<ul class="nav nav-treeview">
							<a href="<?= base_url('mpti/lists') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>
									MPTI
								</p>
							</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('sempro/lists') ?>" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>
								Sempro
							</p>
						</a>
					</li>
				</ul>

			<?php else : ?>

				</ul>

				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<li class="nav-header">PENDAFTARAN</li>
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-edit"></i>
							<p>
								Form Pendaftaran
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?= base_url('mpti/create') ?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>
										MPTI
									</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('sempro/create') ?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>
										Sempro
									</p>
								</a>
							</li>
						</ul>
					</li>
				</ul>

			<?php endif; ?>

			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-header">LAINNYA</li>
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-table"></i>
						<p>
							Daftar Dosen
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/layout/top-nav.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>
									MPTI
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/layout/top-nav.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>
									Sempro
								</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-user"></i>
						<p>
							User
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url('user/index') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>
									Profil Saya
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('auth/logout'); ?>" class="nav-link">
								<i class="fas fa-sign-out-alt nav-icon"></i>
								<p>
									Logout
								</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview">
					<a href="<?= base_url('notif') ?>" class="nav-link">
						<i class="nav-icon fas fa-bell"></i>
						<p>
							Notifikasi
						</p>
					</a>
				</li>
			</ul>

		</nav>
	</div>
</aside>
