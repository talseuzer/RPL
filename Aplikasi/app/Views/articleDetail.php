<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($article['nama_tanaman']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h1 class="card-title"><?= esc($article['nama_tanaman']) ?> (<?= esc($article['nama_latin']) ?>)</h1>
                <?php if (!empty($article['gambar'])): ?>
                    <img src="<?= base_url('uploads/' . $article['gambar']) ?>" alt="<?= esc($article['nama_tanaman']) ?>" class="img-fluid rounded mb-3">
                <?php endif; ?>
                <p><strong>Deskripsi:</strong></p>
                <p><?= nl2br(esc($article['deskripsi'])) ?></p>
                <p><strong>Sumber:</strong> <?= esc($article['sumber']) ?></p>
                <a href="<?= site_url('dashboard') ?>" class="btn btn-warning">Kembali Ke Artikel</a>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h5>Kolom Komentar</h5>
            </div>
            <div class="card-body">
                <form action="<?= site_url('comments/add/' . $article['id_artikel']) ?>" method="post" class="mb-4">
                    <div class="mb-3">
                        <label for="comment" class="form-label">Tambah Komentar</label>
                        <textarea name="komentar" id="comment" class="form-control" rows="3" placeholder="Tulis komentar..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Kirim</button>
                </form>

                <?php if (!empty($comments)): ?>
                    <?php foreach ($comments as $comment): ?>
                        <div class="border p-3 rounded mb-3 bg-light">
                            <div class="d-flex justify-content-between">
                                <strong><?= esc($comment['username']) ?></strong>
                                <div>
                                    <?php if ($comment['id_user'] === session()->get('id_user')): ?>
                                        <button type="button" class="btn btn-sm btn-warning edit-comment-btn">Edit</button>
                                        <form action="<?= site_url('comments/delete/' . $comment['id_komentar']) ?>" method="post" class="d-inline" onsubmit="return confirm('Hapus Komen Ini?');">
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    <?php elseif (session()->get('role') === 'admin'): ?>
                                        <form action="<?= site_url('comments/delete/' . $comment['id_komentar']) ?>" method="post" class="d-inline" onsubmit="return confirm('Hapus Komen Ini?');">
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="comment-text mt-2"><?= esc($comment['komentar']) ?></div>

                            <form action="<?= site_url('comments/update/' . $comment['id_komentar']) ?>" method="post" class="comment-edit-form mt-3" style="display: none;">
                                <div class="mb-3">
                                    <textarea name="komentar" class="form-control" rows="3"><?= esc($comment['komentar']) ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                <button type="button" class="btn btn-secondary btn-sm cancel-edit-btn">Batal</button>
                            </form>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-muted">Belum ada komentar.</p>
                <?php endif; ?>
            </div>
        </div>

    </div>

    <script>
        document.querySelectorAll('.edit-comment-btn').forEach(button => {
            button.addEventListener('click', () => {
                const commentBox = button.closest('.border');
                commentBox.querySelector('.comment-text').style.display = 'none';
                commentBox.querySelector('.comment-edit-form').style.display = 'block';
            });
        });

        document.querySelectorAll('.cancel-edit-btn').forEach(button => {
            button.addEventListener('click', () => {
                const commentBox = button.closest('.border');
                commentBox.querySelector('.comment-text').style.display = 'block';
                commentBox.querySelector('.comment-edit-form').style.display = 'none';
            });
        });
    </script>
</body>
</html>
