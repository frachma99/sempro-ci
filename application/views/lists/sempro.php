<div class="card">
	<div class="card-header">
		<h3 class="card-title">List Pendaftar Seminar Proposal Program Studi Teknik Informatika</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nama Pendaftar</th>
					<th>Dosen Pembimbing</th>
					<th>Judul Proposal</th>
					<th>Status</th>
					<th class="text-center">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($sempros as $sempro) : ?>
					<tr>
						<td><?= $sempro['name']; ?></td>
						<td><?= $sempro['lecturer_sempro']; ?></td>
						<td><?= $sempro['proposal_title']; ?></td>
						<td>
							<?php
							if ($sempro['is_acc'] == 1) {
								echo ('Diterima');
							} elseif ($sempro['is_acc'] == 2) {
								echo ('Ditolak');
							} else {
								echo ('Menunggu Persetujuan');
							}
							?>
						</td>
						<td class="text-center">
							<a href="<?= site_url('sempro/detail') ?>/<?= $sempro['id'] ?>" class="btn btn-primary">
								<i class="fa fa-info-circle"></i>
							</a>
							<a href="<?= site_url('sempro/delete') ?>/<?= $sempro['id'] ?>" onclick="return confirm('Yakin ingin menghapus pengajuan ini?');" class="btn btn-danger">
								<i class="fa fa-trash"></i>
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
	<i class="bi bi-trash"></i>
</div>
