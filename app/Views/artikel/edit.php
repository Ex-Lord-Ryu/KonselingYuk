<!DOCTYPE html>
<html>

<head>
    <title>Edit Artikel</title>
</head>
<style>
    .card {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .card h1 {
        text-align: center;
    }

    .card label {
        display: block;
        margin-bottom: 10px;
    }

    .card input[type="text"],
    .card input[type="file"],
    .card select,
    .card textarea,
    .card input[type="date"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    .card button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .card button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <div class="card">
        <h1>Edit Artikel</h1>

        <form method="POST" action="/artikel/update/<?= $artikel['id']; ?>" enctype="multipart/form-data">
            <label>Judul</label>
            <input type="text" name="judul" value="<?= $artikel['judul']; ?>"><br><br>

            <label>Author</label>
            <input type="text" name="author" value="<?= $artikel['author']; ?>"><br><br>

            <label>Gambar</label>
            <input type="file" name="gambar" accept=".jpg, .jpeg, .png, .svg"><br><br>

            <label>Jenis Konten</label>
            <select name="jenis_konten">
                <option value="Berita" <?= $artikel['jenis_konten'] === 'Berita' ? 'selected' : ''; ?>>Berita</option>
                <option value="Artikel" <?= $artikel['jenis_konten'] === 'Artikel' ? 'selected' : ''; ?>>Artikel</option>
                <option value="Tutorial" <?= $artikel['jenis_konten'] === 'Tutorial' ? 'selected' : ''; ?>>Tutorial</option>
                <option value="Information" <?= $artikel['jenis_konten'] === 'Information' ? 'selected' : ''; ?>>Information</option>
            </select><br><br>

            <label>Konten</label>
            <textarea name="konten"><?= $artikel['konten']; ?></textarea><br><br>

            <label>Tanggal</label>
            <input type="date" name="tanggal" value="<?= $artikel['tanggal'] ? date('Y-m-d', strtotime($artikel['tanggal'])) : ''; ?>"><br><br>

            <?php
            if (!empty($artikel['konten'])) {
                $paragraphs = explode("\n", $artikel['konten']);
                foreach ($paragraphs as $paragraph) {
                    echo '<p>' . $paragraph . '</p>';
                }
            }
            ?>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>

</html>
