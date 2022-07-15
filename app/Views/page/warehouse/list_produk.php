<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Lantai Dua - List Produk
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        <li class="breadcrumb-item active">Warehouse/Bill Of Material/List Produk</li>
    </ol>
    <form action="<?= base_url('produk/hal_tambah_produk'); ?>">
        <?= csrf_field(); ?>
        <div class="form-group mt-4 mb-4"><button type="submit" class="btn btn-outline-success">Tambah Produk</button></div>
    </form>

    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-hover table-dark" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($produk as $p) :
                        ?>

                            <th scope="row"><?= $i; ?></th>
                            <td><?= $p['nama_produk']; ?></td>
                            <td><?= $p['harga_produk']; ?></td>
                            <td><a class="btn btn-outline-warning" href="<?= base_url('produk/hal_edit_produk') . '/' . $p['id_produk'] ?>">Edit</a>
                                <form action="<?= '/produk/delete/' . $p['id_produk']; ?>" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE" ?>
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Yakin mau hapus?');">Hapus</button>
                                </form>
                                <a class="btn btn-outline-primary" href="<?= base_url('produk/detail/') . '/' . $p['id_produk'] ?>">Detail</a>

                            </td>

                    </tbody>
                <?php
                            $i++;
                        endforeach;
                ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>