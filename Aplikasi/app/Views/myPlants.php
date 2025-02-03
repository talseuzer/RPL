<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Plants</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #fcebb1, #f4c542); 
        }

        .content {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-success {
            background-color: #388e3c;
            border-color: #388e3c;
        }

        .btn-success:hover {
            background-color: #2c6d32;
            border-color: #2c6d32;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
        }

        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
        }

        h1 {
            color: #388e3c;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .content {
                padding: 15px;
            }

            .card-body {
                padding: 20px;
            }

            .btn-success, .btn-primary, .btn-danger {
                font-size: 14px;
            }

            h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <?php echo view('header')?>

    <div class="content">
        <div class="mt-2">
            <div class="text-center mb-4">
                <h1>TanamanKu</h1>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <a href="<?= site_url('myPlants/create') ?>" class="btn btn-success">Tambah Data Tanaman</a>
            </div>

        <?php if (!empty($plants)): ?>
            <div class="row">
                <?php foreach ($plants as $plant): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($plant['nama_tanaman']) ?></h5>
                                <p class="card-text"><?= esc($plant['catatan']) ?></p>
                                <p class="card-text text-muted">
                                    <small>Jadwal Perawatan: <?= esc($plant['alarm'] ?: 'Not Set') ?></small>
                                </p>
                                <a href="<?= site_url('myPlants/edit/' . $plant['id_tanaman']) ?>" class="btn btn-primary btn-sm">Edit</a>
                                <form action="<?= site_url('myPlants/delete/' . $plant['id_tanaman']) ?>" method="post" class="d-inline">
                                    <?= csrf_field() ?>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="alert alert-warning text-center" role="alert">
                Belum ada data tanaman!
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
