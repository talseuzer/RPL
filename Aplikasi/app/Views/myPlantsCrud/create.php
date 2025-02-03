<!DOCTYPE html>
<html>
<head>
    <title>Add Plant</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Data Tanaman</h1>
        <form action="<?= site_url('/myPlants/store') ?>" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="nama_tanaman" class="form-label">Nama Tanaman</label>
                <input type="text" class="form-control" id="nama_tanaman" name="nama_tanaman" required>
            </div>
            <div class="mb-3">
                <label for="catatan" class="form-label">Catatan</label>
                <textarea class="form-control" id="catatan" name="catatan"></textarea>
            </div>
            <div class="mb-3">
                <label for="alarm" class="form-label">Jadwal Penyiraman (HH:MM)</label>
                <input type="time" class="form-control" id="alarm" name="alarm">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?= site_url('myPlants') ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
