<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="<?=base_url('PemrogramanWeb/tambah')?>">
    <button class="btn btn-primary">Tambah</button></a>
  </nav>
</div>

<div class="pricing-header px-3 py-1 pt-md-3 pb-md-4 mx-auto text-center">
  <h1 class="display-4 pt-0">Daftar Hadir Mahasiswa</h1>
  <?php if ($this->session->flashdata('pesan') == 'Ditambah'): ?>
						<div class="alert alert-success" role="alert">
              Data Berhasil Ditambah!
						</div>
  <?php elseif ($this->session->flashdata('pesan') == 'Diubah'): ?>
						<div class="alert alert-success" role="alert">
              Data Berhasil Diubah.
						</div>
  <?php elseif ($this->session->flashdata('pesan') == 'Dihapus'): ?>
						<div class="alert alert-success" role="alert">
              Data Berhasil Dihapus.
	  				</div>
  <?php endif ?>
</div>

<div class="container">
  <table class="table table-hover mb-5">
    <thead class="thead-dark align-middle">
      <tr>
        <th rowspan="2" class="align-middle text-center">No.</th>
        <th rowspan="2" class="align-middle text-center">ID</th>
        <th rowspan="2" class="align-middle text-center">NPM</th>
        <th rowspan="2" class="align-middle text-center">Nama</th>
        <th rowspan="2" class="align-middle text-center">Jam Datang</th>
        <th rowspan="2" class="align-middle text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $no = 1;
        foreach ($npm as $data) :?>
          <tr>
            <th class="align-middle text-center"><?=$no++?></th>
            <td class="align-middle text-center"><?=$data['id_number']?></td>
            <td class="align-middle text-center"><?=$data['npm']?></td>
            <td class="align-middle text-center"><?=$data['nama']?></td>
            <td class="align-middle text-center"><?=$data['jam_datang']?></td>
            <td class="align-middle text-center">
              <a href="<?=base_url('PemrogramanWeb/edit/'.$data['id_number'])?>" class="align-middle btn btn-success">Edit</a>
              <a href="<?=base_url('PemrogramanWeb/delete/'.$data['id_number'])?>" onclick="return confirm
              ('Apakah anda yakin ingin menghapus data ini?')" class="align-middle btn btn-danger">Hapus</a>
            </td>
          </tr>
      <?php endforeach?>
    </tbody>
  </table>
</div>