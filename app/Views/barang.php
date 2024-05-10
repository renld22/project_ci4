<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<a href="#" class="btn btn-md btn-success mb-3" data-toggle="modal" data-target="#modalTambahData">TAMBAH DATA</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nama barang</th>
                            <th>harga barang</th>
							   <th>Stok barang</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($barang as $key => $barang) : ?>
 
                            <tr>
                                <td><?php echo $barang['nama_barang'] ?></td>
                                <td><?php echo $barang['harga_barang'] ?></td>
								  <td><?php echo $barang['stok'] ?></td>
                                <td class="text-center">
                                 	<a href="/barang/update/<?= $barang['id_barang'];?>">Edit</a>
                                    <a href="/barang/delete/<?= $barang['id_barang'];?>">Delete</a>
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
        <form action="/barang/tambah" method="POST">
          <div class="form-group">
            <label for="namaBarang">nama barang</label>
            <input type="text" class="form-control" id="namaBarang" name="nama_barang" required>
          </div>
          <div class="form-group">
            <label for="hargabarang">harga barang</label>
            <input type="text" class="form-control" id="hargabarang" name="harga_barang" required>
          </div>
          <div class="form-group">
            <label for="stok">stok</label>
            <input type="text" class="form-control" id="stok" name="stok" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
