<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Lantai Dua - Edit Bahan Baku
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        Warehouse/Bahan Baku/Edit Bahan Baku
    </ol>
    <div class="row">
        <div class="col">
            <div class="card shadow-lg border-0 rounded-lg mb-4">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Edit Data Bahan Baku</h3>
                    <a href="<?= base_url('barang/hal_list_barang'); ?>" class="btn btn-danger mt-2">Batal</a>
                </div>
                <div class="card-body mb-4">
                    <form action="<?= base_url('barang/edit'); ?>" method="POST">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <input name="id_barang" type="hidden" value="<?= $barang['id_barang']; ?>">
                            <label class="small mb-1" for="inputNamaBarang">Nama Bahan Baku</label>
                            <input class="form-control py-4" name="nama_barang" id="inputNamaBarang" type="text" value="<?= $barang['nama_barang']; ?>" required />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputStockBarang">Stock</label>
                            <input class="form-control py-4" name="stok_barang" id="inputStockBarang" type="text" value="<?= $barang['stok_barang']; ?>" required />
                        </div>
                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Save</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>