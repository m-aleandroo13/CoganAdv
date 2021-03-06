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
                <table class="table table-dark" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Barang</th>
                            <th scope="col">Stock</th>
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