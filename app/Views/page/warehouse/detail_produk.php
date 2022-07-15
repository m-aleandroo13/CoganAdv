<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Lantai Dua - Detail Produk
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <a href="<?= base_url('produk/hal_list_produk'); ?>" class="btn btn-danger mt-2">Back</a>
    <h1 class="mt-2"><?= $produk['nama_produk']; ?></h1>
    <ol class="breadcrumb mb-2">
        <li class="breadcrumb-item active">Detail Produk</li>
    </ol>
    <div class="table-responsive">
        <a class="btn btn-success mb-2" href="<?= base_url('produk/hal_tambah_barang_produk'); ?>/<?= $produk['id_produk']; ?>">Tambah Bahan Baku Produk</a>
        <table class="table table-dark myTable" id="dataTable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Bahan Baku</th>
                    <th scope="col">Kebutuhan</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($barang_produk as $bp) :
                    if ($bp['satuan'] == "Kilogram") {
                        $satuan = "Kg";
                    }
                    if ($bp['satuan'] == "Gram") {
                        $satuan = "Gr";
                    }
                    if ($bp['satuan'] == "MiliLiter") {
                        $satuan = "Ml";
                    }
                    if ($bp['satuan'] == "Liter") {
                        $satuan = "L";
                    }

                ?>
                    <tr>
                        <th scope="row"></th>
                        <td><?= $bp['nama_barang']; ?></td>
                        <td><?= $bp['kebutuhan']; ?> <?= $satuan; ?></td>
                        <td>
                            <form action="<?= '/produk/delete_barang_produk/' . $bp['id_barang_produk'] . '/' . $produk['id_produk']; ?>" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE" ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau hapus?');">Hapus</button>
                            </form>
                        </td>
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