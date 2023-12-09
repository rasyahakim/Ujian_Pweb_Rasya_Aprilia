<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	<h5 class="my-0 mr-md-auto font-weight-normal">Daftar Hadir Mahasiswa</h5>
</div>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card bg-light my-5">
				<div class="card-header text-center">Tambah Data</div>
				<div class="card-body">
					<form action="" method="post" class="needs-validation" novalidate>
					<div class="form-group">
							<label for="id_number">ID</label>
							<input type="text" class="form-control" name="id_number" id="id_number" placeholder="Masukan ID" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan ID.
							</div>
						<div class="form-group">
							<label for="npm">NPM</label>
							<input type="text" class="form-control" name="npm" id="npm" placeholder="Masukan npm" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan npm.
							</div>
						</div>
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan nama.
							</div>
						</div>
						<div class="form-group">
							<label for="jam_datang">Jam Datang</label>
							<input type="time" class="form-control" name="jam_datang" id="jam_datang" placeholder="Masukan jam datang" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan jam datang.
							</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary text-center px-3 py-2" name="tambah">Tambah</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>