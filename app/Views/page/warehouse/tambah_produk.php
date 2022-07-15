<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Lantai Dua - Insert Produk
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        Warehouse/Produk/Insert Produk
    </ol>
    <div class="row">
        <div class="col">
            <div class="card shadow-lg border-0 rounded-lg mb-4">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Insert Data Produk</h3>
                    <a href="<?= base_url('produk/hal_list_produk'); ?>" class="btn btn-danger mt-2">Batal</a>
                </div>
                <div class="card-body mb-4">
                    <form action="<?= base_url('produk/insert_produk'); ?>" method="POST">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label class="small mb-1" for="inputNamaBarang">Nama Produk</label>
                            <input class="form-control py-4" name="nama_produk" id="inputNamaproduk" type="text" placeholder="Enter nama produk" required />
                            <label class="small mb-1" for="inputHargaBarang">Harga Produk</label>
                            <input class="form-control py-4" name="harga_produk" id="inputHargaproduk" type="text" placeholder="Masukkan harga barang" required />
                        </div>
                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Insert</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>