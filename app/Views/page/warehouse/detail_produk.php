<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Cogan Cafe - Detail Produk
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <a href="<?= base_url('produk/hal_list_produk'); ?>" class="btn btn-danger mt-2">Back</a>
    <h1 class="mt-2"><?= $produk['nama_produk']; ?></h1>
    <ol class="breadcrumb mb-2">
        <li class="breadcrumb-item active">Detail Produk</li>
    </ol>
    <div class="table-responsive">
        <a class="btn btn-primary mb-2" href="<?= base_url('produk/hal_tambah_barang_produk'); ?>/<?= $produk['id_produk']; ?>"> Insert Barang</a>
        <table class="table table-dark myTable" id="dataTable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Kebutuhan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($barang_produk as $bp) :
                    if ($bp['satuan'] == "btr") {
                        $satuan = "Butir";
                    }
                    if ($bp['satuan'] == "cm") {
                        $satuan = "Centimeter";
                    }
                    if ($bp['satuan'] == "m") {
                        $satuan = "Meter";
                    }
                ?>
                    <tr>
                        <th scope="row"></th>
                        <td><?= $bp['nama_barang']; ?></td>
                        <td><?= $bp['kebutuhan']; ?> <?= $satuan; ?></td>
                    </tr>
                <?php
                    $i++;
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>

<?= $this->endSection(); ?>