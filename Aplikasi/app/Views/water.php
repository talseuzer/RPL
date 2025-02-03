<!DOCTYPE html>
<html>
<head>
    <title>Hitung Air</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #A7C7E7, #79B0D1); /* Watercolor blue gradient */
        }

        .content {
            background: rgba(255, 255, 255, 0.9); /* Slightly transparent white background for the content */
            border-radius: 15px; /* Rounded corners */
            padding: 30px;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
        }

        .card {
            background-color: #fff; /* White card background */
            border-radius: 10px; /* Rounded corners for cards */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Shadow for depth */
        }

        .btn-success {
            background-color: #3b8bba;
            border-color: #3b8bba;
        }

        .btn-success:hover {
            background-color: #2e6d8d;
            border-color: #2e6d8d;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .alert-info {
            background-color: #e6f5ff;
            color: #007bff;
        }

        h1 {
            color: #3b8bba;
            font-weight: bold;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .content {
                padding: 20px;
            }

            h1 {
                font-size: 1.5rem;
            }

            .btn {
                width: 100%;
            }

            .form-select, .form-control {
                font-size: 0.875rem;
            }
        }
    </style>
</head>
<body>
    <?php echo view('header')?>
    <div class="content">
        <div class="mt-3">
        <h1 class="text-center">Hitung Kebutuhan Kadar Air</h1>
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>

                <form action="<?= site_url('water/calculate') ?>" method="post" class="border p-4 shadow-sm bg-light">
                    <div class="mb-3">
                        <label for="city" class="form-label">Kota</label>
                        <select id="city" name="city" class="form-select" required>
                            <option value="">Pilih Kota</option>
                            <option value="Arjawinangun">Arjawinangun</option>
                            <option value="Astanajapura">Astanajapura</option>
                            <option value="Bandung">Bandung</option>
                            <option value="Banjar">Banjar</option>
                            <option value="Banjaran">Banjaran</option>
                            <option value="Bekasi">Bekasi</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Caringin">Caringin</option>
                            <option value="Ciamis">Ciamis</option>
                            <option value="Ciampea">Ciampea</option>
                            <option value="Cibinong">Cibinong</option>
                            <option value="Cicurug">Cicurug</option>
                            <option value="Cikampek">Cikampek</option>
                            <option value="Cikarang">Cikarang</option>
                            <option value="Cikupa">Cikupa</option>
                            <option value="Cileungsir">Cileungsir</option>
                            <option value="Cileunyi">Cileunyi</option>
                            <option value="Cimahi">Cimahi</option>
                            <option value="Ciputat">Ciputat</option>
                            <option value="Ciranjang-hilir">Ciranjang-hilir</option>
                            <option value="Cirebon">Cirebon</option>
                            <option value="Citeureup">Citeureup</option>
                            <option value="Depok">Depok</option>
                            <option value="Indramayu">Indramayu</option>
                            <option value="Jatibarang">Jatibarang</option>
                            <option value="Jatiwangi">Jatiwangi</option>
                            <option value="Kabupaten Bandung">Kabupaten Bandung</option>
                            <option value="Kabupaten Bandung Barat">Kabupaten Bandung Barat</option>
                            <option value="Kabupaten Bekasi">Kabupaten Bekasi</option>
                            <option value="Kabupaten Bogor">Kabupaten Bogor</option>
                            <option value="Kabupaten Ciamis">Kabupaten Ciamis</option>
                            <option value="Kabupaten Cianjur">Kabupaten Cianjur</option>
                            <option value="Kabupaten Cirebon">Kabupaten Cirebon</option>
                            <option value="Kabupaten Garut">Kabupaten Garut</option>
                            <option value="Kabupaten Indramayu">Kabupaten Indramayu</option>
                            <option value="Kabupaten Karawang">Kabupaten Karawang</option>
                            <option value="Kabupaten Kuningan">Kabupaten Kuningan</option>
                            <option value="Kabupaten Majalengka">Kabupaten Majalengka</option>
                            <option value="Kabupaten Pangandaran">Kabupaten Pangandaran</option>
                            <option value="Kabupaten Purwakarta">Kabupaten Purwakarta</option>
                            <option value="Kabupaten Subang">Kabupaten Subang</option>
                            <option value="Kabupaten Sukabumi">Kabupaten Sukabumi</option>
                            <option value="Kabupaten Sumedang">Kabupaten Sumedang</option>
                            <option value="Kabupaten Tasikmalaya">Kabupaten Tasikmalaya</option>
                            <option value="Karangampel">Karangampel</option>
                            <option value="Karangsembung">Karangsembung</option>
                            <option value="Kawalu">Kawalu</option>
                            <option value="Klangenan">Klangenan</option>
                            <option value="Kota Bandung">Kota Bandung</option>
                            <option value="Kota Banjar">Kota Banjar</option>
                            <option value="Kota Bekasi">Kota Bekasi</option>
                            <option value="Kota Bogor">Kota Bogor</option>
                            <option value="Kota Cimahi">Kota Cimahi</option>
                            <option value="Kota Cirebon">Kota Cirebon</option>
                            <option value="Kota Depok">Kota Depok</option>
                            <option value="Kota Sukabumi">Kota Sukabumi</option>
                            <option value="Kota Tasikmalaya">Kota Tasikmalaya</option>
                            <option value="Kresek">Kresek</option>
                            <option value="Kuningan">Kuningan</option>
                            <option value="Lembang">Lembang</option>
                            <option value="Majalengka">Majalengka</option>
                            <option value="Margahayukencana">Margahayukencana</option>
                            <option value="Ngawi">Ngawi</option>
                            <option value="Padalarang">Padalarang</option>
                            <option value="Palimanan">Palimanan</option>
                            <option value="Pamanukan">Pamanukan</option>
                            <option value="Pameungpeuk">Pameungpeuk</option>
                            <option value="Pamulang">Pamulang</option>
                            <option value="Parung">Parung</option>
                            <option value="Pasarkemis">Pasarkemis</option>
                            <option value="Paseh">Paseh</option>
                            <option value="Pelabuhanratu">Pelabuhanratu</option>
                            <option value="Plumbon">Plumbon</option>
                            <option value="Purwakarta">Purwakarta</option>
                            <option value="Rajapolah">Rajapolah</option>
                            <option value="Rengasdengklok">Rengasdengklok</option>
                            <option value="Sawangan">Sawangan</option>
                            <option value="Sepatan">Sepatan</option>
                            <option value="Serpong">Serpong</option>
                            <option value="Singaparna">Singaparna</option>
                            <option value="Soreang">Soreang</option>
                            <option value="Sukabumi">Sukabumi</option>
                            <option value="Sumber">Sumber</option>
                            <option value="Sumedang">Sumedang</option>
                            <option value="Sumedang Utara">Sumedang Utara</option>
                            <option value="Tasikmalaya">Tasikmalaya</option>
                            <option value="Teluknaga">Teluknaga</option>
                            <option value="Wanaraja">Wanaraja</option>
                            <option value="Weru">Weru</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="plantType" class="form-label">Jenis Tanaman</label>
                        <select class="form-select" id="plantType" name="plantType" required>
                            <option value="vegetable">Sayur dan Buah</option>
                            <option value="cactus">Kaktus</option>
                            <option value="flower">Bunga</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="containerSize" class="form-label">Luas Area Pot / Kebun (m²)</label>
                        <input type="number" class="form-control" id="containerSize" name="containerSize" min="1" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Hitung</button>
                </form>
            </div>
        </div>

        <?php if (isset($waterNeeds)): ?>
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <div class="alert alert-info">
                        <h4 class="alert-heading">Hasil Kalkulasi</h4>
                        <p>Kota: <?= esc($city) ?></p>
                        <p>Temperatur: <?= esc($weatherData['temperature']) ?>°C</p>
                        <p>Kelembapan: <?= esc($weatherData['humidity']) ?>%</p>
                        <p>Curah Hujan: <?= esc($weatherData['rain']) ?> mm</p>
                        <hr>
                        <p class="mb-0">Rekomendasi Air: <strong><?= esc($waterNeeds) ?> liter</strong></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
