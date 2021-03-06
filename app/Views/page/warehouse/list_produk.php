<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Cogan Cafe - List Produk
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        <li class="breadcrumb-item active">Warehouse/Produk/List Produk</li>
    </ol>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-hover table-dark" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($produk as $p) :
                        ?>
                            <tr class='clickable-row' onclick="window.location='<?= '/produk/detail/' . $p['id_produk']; ?>';">
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $p['nama_produk']; ?></td>
                                <td><?= $p['harga_produk']; ?></td>
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