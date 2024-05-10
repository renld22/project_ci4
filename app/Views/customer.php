<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<a href="/customer/tambah" class="btn btn-md btn-success mb-3" data-toggle="modal" data-target="#modalTambahData">TAMBAH DATA</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nama customer</th>
                            <th>nomor telpon</th>
							   <th>email</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($customer as $key => $customer) : ?>
 
                            <tr>
                                <td><?php echo $customer['nama_customer'] ?></td>
                                <td><?php echo $customer['nomor_telepon'] ?></td>
								  <td><?php echo $customer['email'] ?></td>
                                <td class="text-center">
                                 	<a href="/customer/update/<?= $customer['id_customer'];?>">Edit</a>
                                    <a href="/customer/delete/<?= $customer['id_customer'];?>">Delete</a>
                                </td>
                            </tr>
 
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a href="/" class="btn btn-danger">kembali</a>

                <!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambahDataLabel">Tambah Data customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form tambah data -->
        <form action="/customer/tambah" method="POST">
          <div class="form-group">
            <label for="namaCustomer">nama cust</label>
            <input type="text" class="form-control" id="namaCustomer" name="nama_customer" required>
          </div>
          <div class="form-group">
            <label for="nomortelepon">Nomor telepon</label>
            <input type="text" class="form-control" id="nomortelepon" name="nomor_telepon" required>
          </div>
          <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
