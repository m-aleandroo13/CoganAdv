<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Lantai Dua - Edit Produk
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        Warehouse/Produk/Edit Data Produk
    </ol>
    <div class="row">
        <div class="col">
            <div class="card shadow-lg border-0 rounded-lg mb-4">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Edit Data Produk</h3>
                    <a href="<?= base_url('produk/hal_list_produk'); ?>" class="btn btn-danger mt-2">Batal</a>
                </div>
                <div class="card-body mb-4">
                    <form action="<?= base_url('produk/edit'); ?>" method="POST">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <input name="id_produk" type="hidden" value="<?= $produk['id_produk']; ?>">
                            <label class="small mb-1" for="inputNamaProduk">Nama Produk</label>
                            <input class="form-control py-4" name="nama_produk" id="inputNamaproduk" type="text" value="<?= $produk['nama_produk']; ?>" required />
                            <label class="small mb-1" for="inputHargaBarang">Harga Produk</label>
                            <input class="form-control py-4" name="harga_produk" id="inputHargaproduk" type="text" value="<?= $produk['harga_produk']; ?>" required />
                        </div>
                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Save</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>