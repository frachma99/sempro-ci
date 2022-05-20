<br>
<h2 class="text-center card-body">Pendaftaran Sempro</h2><br>

<div class="container">
	<div class="col-md-9 mx-auto">

		<div class="mb-3 row">
			<label class="col-sm-3 col-form-label">Nama</label>
			<div class="col-sm-7">
				<input type="text" readonly class="form-control-plaintext" value="<?php echo $sempro['name']; ?>">
			</div>
		</div>

		<div class="mb-3 row">
			<label class="col-sm-3 col-form-label">NIM</label>
			<div class="col-sm-7">
				<input type="text" readonly class="form-control-plaintext" value="<?php echo $sempro['nim']; ?>">
			</div>
		</div>

		<div class="mb-3 row">
			<label class="col-sm-3 col-form-label">Email (Mercu Buana)</label>
			<div class="col-sm-7">
				<input type="text" readonly class="form-control-plaintext" value="<?php echo $sempro['email']; ?>">
			</div>
		</div>

		<div class="mb-3 row">
			<label class="col-sm-3 col-form-label">No. HP Aktif (WhatsApp)</label>
			<div class="col-sm-7">
				<input type="text" readonly class="form-control-plaintext" value="<?php echo $sempro['telp_no']; ?>">
			</div>
		</div>

		<div class="mb-3 row">
			<label class="col-sm-3 col-form-label">Dosen MPTI</label>
			<div class="col-sm-7">
				<input type="text" readonly class="form-control-plaintext" value="<?php echo $sempro['lecturer_mpti']; ?>">
			</div>
		</div>

		<div class="mb-3 row">
			<label class="col-sm-3 col-form-label">Dosen Pembimbing</label>
			<div class="col-sm-7">
				<input type="text" readonly class="form-control-plaintext" value="<?php echo $sempro['lecturer_sempro']; ?>">
				</select>
			</div>
		</div>

		<div class="mb-3 row">
			<label class="col-sm-3">Upload Acc Dosen</label>
			<div class="col-sm-7">
				<a href="<?= base_url('sempro/accview/'. $sempro['id']) ?>"><?php echo $sempro['upload_acc']; ?></a>
			</div>
		</div>

		<div class="mb-3 row">
			<label class="col-sm-3 col-form-label">Judul Proposal</label>
			<div class="col-sm-7">
				<input type="text" readonly class="form-control-plaintext" value="<?php echo $sempro['proposal_title']; ?>">
			</div>
		</div>

		<div class="mb-3 row">
			<label class="col-sm-3">File Proposal</label>
			<div class="col-sm-7">
			<a href="<?= base_url('sempro/proposalview/'. $sempro['id']) ?>"><?php echo $sempro['upload_proposal']; ?></a>
			</div>
		</div>

		<div class="mb-3 row">
			<label class="col-sm-3 col-form-label">Komentar</label>
			<?php if ($comments) :  ?>
				<?php foreach ($comments as $comment) : ?>
					<div class="col-sm-7">
						<input type="text" readonly class="form-control-plaintext" value="<?php echo $comment['body']; ?>">
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>

		<br>
		<div class="form-floating">
			<label>Berikan Komentar</label>
			<?php echo form_open('sempro/comments/' . $sempro['id']); ?>
			<textarea class="form-control" placeholder="Silakan tulis komentar anda disini" name="body" style="height: 200px"></textarea>
		</div>
		<br>
	</div>
	<div class="col-10 text-right">
		<button class="btn btn-primary" type="submit">Submit</button>
		</form>
		<a href="<?= base_url('sempro/isacc/') . $sempro['id'] ?>" class="btn btn-primary btn-success">Diterima</a>
		<a href="<?= base_url('sempro/isrej/') . $sempro['id'] ?>" class="btn btn-primary btn-danger">Ditolak</a>
	</div>
</div>
<br><br>
