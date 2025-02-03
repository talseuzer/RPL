<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f9f6;
            font-family: Arial, sans-serif;
        }
        .card {
            border: none;
            border-radius: 10px;
        }
        .card-header {
            background-color: #3c763d;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .btn-success {
            background-color: #3c763d;
            border: none;
        }
        .btn-success:hover {
            background-color: #4cae4c;
        }
        .text-success {
            color: #8a6d3b !important;
        }
        .text-success:hover {
            text-decoration: underline;
            color: #a0794e !important;
        }
        /* Mobile Responsive Styles */
        @media (max-width: 768px) {
            .card {
                margin: 10px;
            }
            .card-header {
                font-size: 1.5rem;
            }
            .btn-success {
                font-size: 14px;
            }
            .text-success {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header text-white text-center">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('success')): ?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php endif; ?>

                        <form action="<?= site_url('login/authenticate') ?>" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Login</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <small>
                            Belum punya akun? <a href="<?= site_url('register') ?>" class="text-success">Daftar</a> |
                            Masuk sebagai tamu? <a href="<?= site_url('dashboard') ?>" class="text-success">Masuk</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
