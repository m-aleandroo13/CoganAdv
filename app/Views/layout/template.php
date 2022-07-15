<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $this->renderSection('title'); ?></title>
    <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="<?= base_url('admin'); ?>">Lantai Dua</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?= route_to('register') ?>">Add Account</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="<?= base_url('admin'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-line"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Transaksi</div>
                        <a class="nav-link" href="<?= base_url('penjualan/hal_penjualan'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Penjualan
                        </a>
                        <a class="nav-link" href="<?= base_url('admin/hal_pembelian'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                            Pembelian
                        </a>
                        <div class="sb-sidenav-menu-heading">Warehouse</div>
                        <a class="nav-link" href="<?= base_url('barang/hal_list_barang'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                            Bahan Baku
                        </a>
                        <a class="nav-link" href="<?= base_url('produk/hal_list_produk'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-signature"></i></div>
                            Bill Of Material
                        </a>
                        <div class="sb-sidenav-menu-heading">Data</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransaksi" aria-expanded="false" aria-controls="collapseTransaksi">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Catatan Transaksi
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseTransaksi" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= base_url('admin/hal_catatan_pembelian'); ?>">Pembelian</a>
                                <a class="nav-link" href="<?= base_url('admin/hal_catatan_penjualan'); ?>">Penjualan</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLaporan" aria-expanded="false" aria-controls="collapseLaporan">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Laporan
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLaporan" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Laporan Penjualan</a>
                                <a class="nav-link" href="#">Laporan Pembelian</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="<?= base_url('supplier/hal_list_supplier'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Supplier

                        </a>


                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?= user()->username; ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <?= $this->renderSection('content'); ?>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">


                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/scripts.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/demo/chart-area-demo.js') ?>"></script>
    <script src="<?= base_url('assets/demo/chart-bar-demo.js') ?>"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/demo/datatables-demo.js') ?>"></script>
</body>

</html>