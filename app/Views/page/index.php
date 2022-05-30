<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
Cogan Cafe - Dashboard
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>

<div class="container">
    <h1 class="mt-4">Dashboard</h1>

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col ml-5 mt-4 mr-5">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area mr-1"></i>
                    Sales Chart
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>