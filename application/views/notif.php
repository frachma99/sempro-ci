<div class="card">
	<div class="card-header">
		<h3 class="card-title">Notifikasi Aplikasi <b>Klik</b>MPTI</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table class="table table-bordered table-striped">
			<a href="<?= base_url('notif/isdeleteall') ?> " class="btn btn-danger">
				Hapus Semua Notifikasi
			</a>
			<br><br>
			<thead>
				<tr>
					<th>Notifikasi</th>
					<th>Keterangan</th>
					<th class="text-center">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($notifs as $notif) : ?>
					<tr>
						<td><?= $notif['title'] ?></td>
						<td><?= $notif['message'] ?></td>
						<td class="text-center">
							<?php if ($notif['is_read'] == 0) : ?>
								<a href="<?= base_url('notif/isread/' . $notif['id']) ?>" class="btn btn-success">
									<i class="fa fa-check"></i>
								</a>
							<?php endif; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
	<i class="bi bi-trash"></i>
</div>