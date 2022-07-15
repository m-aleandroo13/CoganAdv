<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Lantai Dua - Insert Barang
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        Warehouse/Bahan Baku/Insert Bahan Baku
    </ol>
    <div class="row">
        <div class="col">
            <div class="card shadow-lg border-0 rounded-lg mb-4">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Insert Data Bahan Baku</h3>
                    <a href="<?= base_url('barang/hal_list_barang'); ?>" class="btn btn-danger mt-2">Batal</a>
                </div>
                <div class="card-body mb-4">
                    <form action="<?= base_url('barang/insert'); ?>">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label class="small mb-1" for="inputNamaBarang">Nama Bahan Baku</label>
                            <input class="form-control py-4" name="nama_barang" id="inputNamaBarang" type="text" placeholder="Enter nama bahan baku" required />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputStokBarang">Stock</label>
                            <input class="form-control py-4" name="stok_barang" id="inputStokBarang" type="text" placeholder="Enter stock bahan baku" required />
                        </div>
                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Insert</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>