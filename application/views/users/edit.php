<div class="container-fluid">
	<div class="h3 mb-4 text-gray-800">
		<?= $title; ?>

		<div class="row">
			<div class="col-lg-8">
				<?= form_open_multipart('user/edit') ?>
				<div class="form-group row">
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-2">Picture</div>
					<div class="col-sm-10">
						<div class="row">
							<div class="col-sm-3">
								<img src="" class="img-thumbnail">
							</div>
							<div class="col-sm-9">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="image" name="image">
									<label class="custom-file-label" for="image">Choose File</label>
								</div>
							</div>
						</div>
					</div>
				</div>

				</form>
			</div>
		</div>
	</div>
</div>