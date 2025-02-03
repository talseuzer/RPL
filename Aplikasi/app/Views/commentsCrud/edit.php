<!DOCTYPE html>
<html>
<head>
    <title>Edit Comment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h3>Edit Komentar</h3>
        <form action="<?= site_url('comments/update/' . $comment['id_komentar']) ?>" method="post">
            <div class="mb-3">
                <textarea id="komentar" name="komentar" class="form-control" rows="5" required><?= esc($comment['komentar']) ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= site_url('dashboard/view/' . $comment['id_artikel']) ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>