<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Cogan Cafe - Insert Barang Produk
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        Insert Barang Produk <?= $produk['nama_produk']; ?>
    </ol>
    <a class="btn btn-danger" href="<?= base_url('/produk/detail/' . $produk['id_produk']); ?>">Back</a>
    <div class="row">
        <div class="col">
            <div class="card shadow-lg border-0 rounded-lg mb-4 ">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Insert Data Barang Produk <b><?= $produk['nama_produk']; ?></b></h3>
                </div>
                <div class="card-body mb-4">
                    <form action="<?= base_url('produk/insert_barang_produk/') ?>">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label class="small mb-1" for="inputNamaBarang">Nama Barang</label>
                            <select class="custom-select" name="id_barang" id="id_barang">
                                <option value="">Pilih Barang</option>
                                <?php foreach ($barang as $b) : ?>
                                    <option value="<?= $b['id_barang']; ?>"><?= $b['nama_barang']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputKebutuhanBarang">Kebutuhan</label>
                            <div class="input-group">
                                <input type="number" class="form-control" name="kebutuhan" placeholder="Enter kebutuhan barang/produk" required>
                                <div class="input-group-append">
                                    <select class="custom-select" id="inputGroupSelect04" name="satuan" required>
                                        <option>Pilih satuan...</option>
                                        <option value="btr">Butir</option>
                                        <option value="cm">Centimeter</option>
                                        <option value="m">Meter</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" name="id_produk" value="<?= $produk['id_produk']; ?>">
                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Insert</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>