<!DOCTYPE html>
<html>

<head>
    <title>Daftar Artikel</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            padding: 5rem 0;
            background-color: #f8f9fa;
        }

        .text-primary {
            color: #007bff !important;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        .border-bottom {
            border-bottom: 5px solid #007bff;
        }

        .display-4 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
        }

        .bg-light {
            background-color: #ffffff;
        }

        .rounded {
            border-radius: 0.25rem;
        }

        .overflow-hidden {
            overflow: hidden;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .p-4 {
            padding: 1.5rem;
        }

        .h3 {
            font-size: 1.75rem;
            font-weight: bold;
            margin-bottom: 0.75rem;
            font-family: 'Raleway', sans-serif;
        }

        .m-0 {
            margin: 0;
        }

        .d-block {
            display: block;
        }

        .border-top {
            border-top: 1px solid #dee2e6;
        }

        .d-flex {
            display: flex;
        }

        .justify-content-between {
            justify-content: space-between;
        }

        .align-items-center {
            align-items: center;
        }

        .rounded-circle {
            border-radius: 50%;
        }

        .me-2 {
            margin-right: 0.5rem;
        }

        .ms-3 {
            margin-left: 0.75rem;
        }

        .text-primary {
            color: #007bff;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 600px));
            grid-gap: 20px;
        }

        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            font-family: 'Raleway', sans-serif;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .card h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .card p {
            text-align: center;
        }

        .card a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        .card a:hover {
            background-color: #E0E0E0;
        }

        .card .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .card .btn-container a {
            flex: 1;
            text-align: center;
            text-decoration: none;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        .card .btn-container a:hover {
            background-color: #E0E0E0;
        }
    </style>
</head>

<body>
    <div class="container-fluid py-5">
        <div class="container">
            <h1 class="text-center mx-auto mb-5">Daftar Artikel</h1>

            <!-- <?php if ($session->get('user') && $session->get('user')['role'] == 'admin') : ?>
                <a href="/artikel/create" class="btn btn-primary mb-3">Tambah Artikel</a>
            <?php endif; ?> -->

            <div class="grid-container">
                <?php foreach ($artikel as $item) : ?>
                    <?php if (in_array(pathinfo($item['gambar'], PATHINFO_EXTENSION), ['jpg', 'png', 'jpeg',  'svg'])) : ?>
                        <div class="card">
                            <img src="<?= base_url($item['gambar']); ?>" alt="<?= $item['judul']; ?>">
                            <h3><a href="/artikel/show/<?= $item['id']; ?>"><?= $item['judul']; ?></a></h3>
                            <p>Penulis: <?= $item['author']; ?></p>
                            <p>Jenis Konten: <?= $item['jenis_konten']; ?></p>
                            <p>Tanggal: <?= $item['tanggal'] ? date('Y-m-d', strtotime($item['tanggal'])) : 'Belum diinputkan'; ?></p>
                            <p style="text-align: center;"><?= substr($item['konten'], 0, strpos($item['konten'], '.')); ?></p>
                            <!-- <?php if ($session->get('user') && $session->get('user')['role'] == 'admin') : ?>
                                <div class="btn-container">
                                    <a href="/artikel/edit/<?= $item['id']; ?>" class="btn btn-success mx-3">Edit</a>
                                    <a href="/artikel/delete/<?= $item['id']; ?>" class="btn btn-danger">Hapus</a>
                                </div>
                            <?php endif; ?> -->
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>