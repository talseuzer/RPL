<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Articles</title>
    <!-- Include Bootstrap CSS -->
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

        .card-title a {
            color: #388e3c;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .card-title a:hover {
            color: #2c6d32;
        }

        .btn-outline-success {
            border: 2px solid #388e3c;
            color: #388e3c;
            transition: all 0.3s ease;
        }

        .btn-outline-success:hover {
            background-color: #388e3c;
            color: white;
            transform: translateY(-3px);
        }

        .btn-outline-secondary {
            border: 2px solid #ccc;
            color: #888;
            transition: all 0.3s ease;
        }

        .btn-outline-secondary:hover {
            background-color: #f0f0f0;
            color: #555;
            transform: translateY(-3px);
        }

        .btn-success {
            background-color: #388e3c;
            border-color: #388e3c;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            background-color: #2c6d32;
            border-color: #2c6d32;
            transform: translateY(-3px);
        }

        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
        }

        h4 {
            color: #388e3c;
            font-weight: bold;
        }

        .d-flex a.active {
            background-color: #388e3c;
            color: white;
        }

        .plant-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .plant-img:hover {
            transform: scale(1.1);
        }

        .image-container {
            width: 85px;
            height: 85px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border-radius: 10px;
            position: relative;
        }

        .d-flex {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .me-3 {
            margin-right: 1rem;
        }

        @media (max-width: 767px) {
            .card {
                margin-bottom: 20px;
            }

            .image-container {
                width: 70px;
                height: 70px;
            }

            .plant-img {
                width: 70px;
                height: 70px;
            }
        }
    </style>
</head>
<body>
    <?= view('header') ?>

    <div class="content">
        <div class="text-center mb-4">
            <h4>Filter A - Z</h4>
            <div class="d-flex justify-content-center flex-wrap">
                <a href="<?= site_url('dashboard') ?>" 
                   class="btn btn-outline-secondary mx-1 mb-2 <?= (!$alphabet) ? 'active' : '' ?>">#
                </a>
                <?php foreach (range('A', 'Z') as $letter): ?>
                    <a href="<?= site_url('dashboard?alphabet=' . $letter) ?>" 
                       class="btn btn-outline-success mx-1 mb-2 <?= ($alphabet == $letter) ? 'active' : '' ?>">
                       <?= $letter ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <?php if (session()->get('role') === 'admin'): ?>
                <a href="<?= site_url('dashboard/create') ?>" class="btn btn-success">Tambah Index Artikel</a>
            <?php endif; ?>
        </div>

        <div class="row">
            <?php if (!empty($articles)): ?>
                <?php foreach ($articles as $article): ?>
                    <div class="col-sm-12 col-md-4 mb-4">
                        <div class="card h-100 p-3">
                            <div class="d-flex align-items-center">
                                <div class="image-container me-3">
                                    <?php if (!empty($article['gambar'])): ?>
                                        <img src="<?= base_url('uploads/' . $article['gambar']) ?>" 
                                             class="plant-img rounded" 
                                             alt="<?= esc($article['nama_tanaman']) ?>">
                                    <?php endif; ?>
                                </div>

                                <div class="flex-grow-1">
                                    <h5 class="card-title">
                                        <a href="<?= site_url('dashboard/view/' . $article['id_artikel']) ?>" 
                                           class="text-decoration-none">
                                           <?= esc($article['nama_tanaman']) ?>
                                        </a>
                                    </h5>
                                    <p class="card-text text-muted"><i>(<?= esc($article['nama_latin']) ?>)</i></p>
                                </div>
                            </div>

                            <?php if (session()->get('role') === 'admin'): ?>
                                <div class="mt-3">
                                    <a href="<?= site_url('dashboard/edit/' . $article['id_artikel']) ?>" 
                                       class="btn btn-sm btn-primary">Edit</a>
                                    <a href="<?= site_url('dashboard/delete/' . $article['id_artikel']) ?>" 
                                       class="btn btn-sm btn-danger" 
                                       onclick="return confirm('Ingin menghapus artikel ini?')">
                                       Hapus
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12">
                    <div class="alert alert-warning text-center" role="alert">
                        Belum ada data tanaman dalam alfabet ini.
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
