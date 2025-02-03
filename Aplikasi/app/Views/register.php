<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f9f6;
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 500px;
            margin: 50px auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .form-title {
            color: #3c763d;
        }
        .btn-submit {
            background-color: #3c763d;
            color: white;
        }
        .btn-submit:hover {
            background-color: #4cae4c;
        }
        .text-link {
            color: #8a6d3b;
        }
        .text-link:hover {
            text-decoration: underline;
            color: #a0794e;
        }
        .disclaimer {
            font-size: 0.9rem;
            color: #6c757d;
            text-align: center;
            margin-top: 20px;
        }
        @media (max-width: 768px) {
            .form-container {
                margin: 20px;
                padding: 15px;
            }
            .form-title {
                font-size: 1.5rem;
            }
            .btn-submit {
                font-size: 14px;
            }
            .text-link {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1 class="form-title text-center mb-4">Registrasi</h1>
            
            <?php if (session()->getFlashdata('errors')) : ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="post" action="<?= site_url('register/save') ?>">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" value="<?= old('username') ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= old('email') ?>" placeholder="contoh@gmail.com" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-submit">Daftar</button>
                </div>
            </form>
            
            <p class="text-center mt-3">
                Sudah punya akun? <a href="<?= site_url('login') ?>" class="text-link">Login</a>
            </p>
        </div>

        <div class="disclaimer">
            Website ini dibuat untuk memenuhi tugas, dimohon untuk tidak menggunakan data asli.
        </div>
    </div>
</body>
</html>
