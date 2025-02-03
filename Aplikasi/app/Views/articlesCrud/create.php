<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f9f9f9;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h2 {
            color: #388e3c;
            font-weight: bold;
        }

        .btn-success {
            background-color: #388e3c;
            border-color: #388e3c;
        }

        .btn-success:hover {
            background-color: #2c6d32;
            border-color: #2c6d32;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #5a6268;
        }

        /* Mobile Responsive Styles */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            h2 {
                font-size: 1.8rem;
            }

            .btn-success, .btn-secondary {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Buat Artikel Baru</h2>
        <form action="<?= site_url('dashboard/store') ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_tanaman" class="form-label">Nama Tanaman</label>
                <input type="text" class="form-control" id="nama_tanaman" name="nama_tanaman" required>
            </div>
            <div class="mb-3">
                <label for="nama_latin" class="form-label">Nama Latin</label>
                <input type="text" class="form-control" id="nama_latin" name="nama_latin" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="sumber" class="form-label">Sumber</label>
                <input type="text" class="form-control" id="sumber" name="sumber" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Image URL</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?= site_url('dashboard') ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
