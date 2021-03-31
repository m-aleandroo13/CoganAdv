<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Cogan Cafe - Penjualan
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <ol class="breadcrumb my-2">
        Transaksi/Penjualan
    </ol>
    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <h2>Input Produk Terjual</h2>
                    <form action="<?= base_url('penjualan/insert_cart_penjualan'); ?>">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label class="small mb-1" for="inputNamaProduk">Nama Produk</label>
                            <select class="custom-select" name="id_produk" id="id_produk">
                                <option value="">Pilih Produk</option>
                                <?php foreach ($produk as $p) : ?>
                                    <option value="<?= $p['id_produk']; ?>"><?= $p['nama_produk']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputJumlahPenjualan">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" placeholder="Jumlah Produk">
                        </div>
                        <button type="submit" class="btn btn-success">Add Cart</button>
                    </form>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h2>Cart Penjualan</h2>
                    <form action="<?= base_url('penjualan/insert_penjualan'); ?>" action="post">
                        <?= csrf_field(); ?>
                        <input type="date" name="tgl" class="form-control mb-3" style="width: 200px; float: right;" required>
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Jumlah Produk</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total_cost = 0;
                                foreach ($cart_penjualan as $cp) {
                                    foreach ($produk as $p2) {
                                        if ($cp['id_produk'] == $p2['id_produk']) {
                                ?>
                                            <tr>
                                                <td>
                                                    <?= $p2['nama_produk']; ?>
                                                    <input type="hidden" name="id_produk" value="<?= $cp['id_produk']; ?>">
                                                </td>
                                                <td><?= $cp['jumlah']; ?></td>
                                                <td><?= "Rp. " . $total_harga = $cp['jumlah'] * $p2['harga_produk']; ?></td>
                                                <td>
                                                    <a class="btn btn-danger" href="<?= base_url('penjualan/delete_cart') . '/' . $cp['id_cart_pj'] ?>">Delete</a>
                                                </td>
                                            </tr>
                            </tbody>
                <?php
                                            $total_cost += $total_harga;
                                        }
                                    }
                                }


                ?>
                <tr>
                    <td colspan="2">Total Pembayaran</td>
                    <td>: <?= "Rp. " . $total_cost; ?></td>
                </tr>
                        </table>
                        <button type="submit" class="btn btn-success">Check Out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>