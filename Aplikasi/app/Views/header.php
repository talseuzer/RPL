<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1030;
            background-color:rgb(4, 66, 0);
            color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            padding: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-title {
            font-size: 1.8rem;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .header-button a {
            background-color: #fff;
            color: #333;
            padding: 8px 16px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .header-button a:hover {
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: transparent;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        .navbar-nav .nav-link {
            color: white !important;
            padding: 8px 15px;
            font-size: 1rem;
            font-weight: 500;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #A1C74E !important;
            text-decoration: underline;
        }

        .content {
            margin-top: 150px;
            padding: 50px;
        }

        @media (max-width: 768px) {
            .header-container {
                padding: 10px;
                text-align: center;
            }

            .header-title {
                font-size: 1.5rem;
            }

            .navbar-nav {
                text-align: center;
                width: 100%;
            }

            .navbar-nav .nav-link {
                padding: 10px;
                font-size: 0.9rem;
            }

            .content {
                margin-top: 180px;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <header class="fixed-header">
        <div class="header-container">
            <h1 class="header-title">PlantPlanner</h1>
            <div class="header-button">
                <?php if (session()->get('logged_in')): ?>
                    <a href="<?= site_url('logout') ?>" class="btn btn-light btn-sm">Logout</a>
                <?php else: ?>
                    <a href="<?= site_url('login') ?>" class="btn btn-light btn-sm">Login</a>
                <?php endif; ?>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?= site_url('dashboard') ?>">Artikel</a>
                    <a class="nav-link" href="<?= site_url('myPlants') ?>">TanamanKu</a>
                    <a class="nav-link" href="<?= site_url('water') ?>">Kalkulator Air</a>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>
