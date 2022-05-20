<br>
<h2 class="text-center card-body">Pendaftaran Sempro</h2><br>

<?php echo form_open_multipart('sempro/create'); ?>
<form>
	<div class="container">
		<div class="col-md-9 mx-auto">
			<div class="mb-3 row">
				<label class="col-sm-3 col-form-label">Nama</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" name="name">
					<!-- <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Febri Rachmawati"> -->
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-sm-3 col-form-label">NIM</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" name="nim">
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-sm-3 col-form-label">Email (Mercu Buana)</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" name="email">
					<!-- <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="41517010120@student.mercubuana.ac.id"> -->
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-sm-3 col-form-label">No. HP Aktif (WhatsApp)</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" name="telp_no">
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-sm-3 col-form-label">Dosen MPTI</label>
				<div class="col-sm-7">
					<select class="form-control" name="lecturer_mpti">
						<option>Harwikarya</option>
						<option>Desi Ramayanti</option>
					</select>
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-sm-3 col-form-label">Dosen Pembimbing</label>
				<div class="col-sm-7">
					<select class="form-control" name="lecturer_sempro">
						<option>Ida Nurhaida</option>
						<option>Devi Fitrianah</option>
					</select>
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-sm-3">Upload Acc Dosen</label>
				<div class="col-sm-7">
					<input type="file" name="upload_acc" size="20" class="form-control-file">
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-sm-3 col-form-label">Judul Proposal</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" name="proposal_title">
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-sm-3">File Proposal</label>
				<div class="col-sm-7">
					<input type="file" name="upload_proposal" class="form-control-file">
				</div>
			</div>
			<br>
			<div class="text-center">
				<button type="submit" class="btn btn-primary col-lg-5">Kumpulkan Sekarang</button>
			</div>
		</div>
	</div>
</form>
<br><br>
