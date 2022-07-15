<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Lantai Dua - List Bahan Baku
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        <li class="breadcrumb-item active">Warehouse/Bahan Baku/List Bahan Baku</li>
    </ol>
    <form action="<?= base_url('barang/hal_tambah_barang'); ?>">
        <?= csrf_field(); ?>
        <div class="form-group mt-4 mb-4"><button type="submit" class="btn btn-outline-success">Tambah Bahan Baku</button></div>
    </form>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-dark" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Bahan Baku</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($barang as $b) :
                        ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $b['nama_barang']; ?></td>
                                <td><?= $b['stok_barang']; ?></td>
                                <td><a class="btn btn-outline-warning" href="<?= base_url('barang/hal_edit') . '/' . $b['id_barang'] ?>">Edit</a>
                                    <form action="<?= '/barang/delete/' . $b['id_barang']; ?>" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE" ?>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Yakin mau hapus?');">Hapus</button>
                                    </form>
                                </td>
                            </tr>
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