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
 
<?= $this->endSection() ?>
