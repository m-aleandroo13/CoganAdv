<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Cogan Cafe - List Barang
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        <li class="breadcrumb-item active">Warehouse/Barang/List Barang</li>
    </ol>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-striped table-dark" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">Barang</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($barang as $b) :
                        ?>
                            <tr>
                                <td><?= $b['nama_barang']; ?></td>
                                <td><?= $b['stok_barang']; ?></td>
                                <td><a class="btn btn-primary" href="<?= base_url('barang/hal_edit') . '/' . $b['id_barang'] ?>">Edit</a>
                                    <form action="<?= '/barang/delete/' . $b['id_barang']; ?>" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE" ?>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau hapus?');">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                    </tbody>
                <?php
                        endforeach;
                ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>