<br>
<h2 class="text-center card-body">Pendaftaran Sempro</h2><br>

<form action="<?= base_url('admin/dashboard') ?>" method="post">

	<div class="container">
		<div class="col-md-9 mx-auto">
			<div class="mb-3 row">
				<label class="col-sm-3 col-form-label">Nama</label>
				<div class="col-sm-7">
					<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Febri Rachmawati">
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-sm-3">NIM</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="inputPassword">
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-sm-3 col-form-label">Email (Mercu Buana)</label>
				<div class="col-sm-7">
					<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="41517010120@student.mercubuana.ac.id">
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-sm-3">No. HP Aktif (WhatsApp)</label>
				<div class="col-sm-7">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-sm-3">Dosen MPTI</label>
				<div class="col-sm-7">
					<select class="form-control" id="exampleFormControlSelect1">
						<option>1</option>
						<option>2</option>
					</select>
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-sm-3">Dosen Pembimbing</label>
				<div class="col-sm-7">
					<select class="form-control" id="exampleFormControlSelect1">
						<option>1</option>
						<option>2</option>
					</select>
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-sm-3">Upload Acc Dosen</label>
				<div class="col-sm-7">
					<input type="file" class="form-control-file">
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-sm-3">Judul Proposal</label>
				<div class="col-sm-7">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-sm-3">File Proposal</label>
				<div class="col-sm-7">
					<input type="file" class="form-control-file">
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
