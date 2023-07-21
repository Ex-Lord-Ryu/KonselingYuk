<!DOCTYPE html>
<html>

<head>
    <title>Artikel: <?= $artikel['judul']; ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

        body {
            background-color: #f9f9f9;
            padding: 20px;
            font-family: 'Poppins', sans-serif;
        }

        .article {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .article h1 {
            font-size: 24px;
            margin-bottom: 10px;
            text-align: center;
        }

        .article p {
            margin-bottom: 10px;
            text-align: justify;
        }

        .article img {
            display: block;
            margin: 0 auto;
            max-width: 50%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .article .jenis-konten {
            font-style: italic;
        }
    </style>
</head>

<body>
    <div class="article">
        <h1><?= $artikel['judul']; ?></h1>
        <p>Penulis: <?= $artikel['author']; ?></p>
        <p>Tanggal: <?= date('d/m/Y', strtotime($artikel['tanggal'])); ?></p>
        <p class="jenis-konten">Jenis Konten: <?= $artikel['jenis_konten']; ?></p>
        <img src="<?= base_url($artikel['gambar']); ?>" alt="<?= $artikel['judul']; ?>">

        <?php
        $paragraphs = explode("\n", $artikel['konten']);
        foreach ($paragraphs as $paragraph) {
            echo '<p>' . $paragraph . '</p>';
        }
        ?>
        <a class="btn btn-primary" href="<?= base_url('/artikel'); ?>">Back to Articles</a>
    </div>
</body>

</html>
