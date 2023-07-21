<!DOCTYPE html>
<html>

<head>
    <title>CRUD Artikel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .admin-actions {
            text-align: center;
        }

        .admin-actions a {
            display: inline-block;
            margin-right: 10px;
            text-decoration: none;
            border: 1px solid #ccc;
            padding: 5px 10px;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <h1>Daftar Artikel</h1>
    <div class="admin-actions">
        <a href="/artikel/create">Tambah Artikel</a>
        <a href="/dashboard" class="dashboard">Dashboard</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Jenis Konten</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($artikel as $item) : ?>
                <?php if (in_array(pathinfo($item['gambar'], PATHINFO_EXTENSION), ['jpg', 'png', 'jpeg',  'svg'])) : ?>
                    <tr>
                        <td><img src="<?= base_url($item['gambar']); ?>" alt="<?= $item['judul']; ?>" style="width: 100px;"></td>
                        <td><?= $item['judul']; ?></td>
                        <td><?= $item['author']; ?></td>
                        <td><?= $item['jenis_konten']; ?></td>
                        <td><?= $item['tanggal'] ? date('Y-m-d', strtotime($item['tanggal'])) : 'Belum diinputkan'; ?></td>
                        <td>
                            <div class="admin-actions">
                                <a href="/artikel/edit/<?= $item['id']; ?>">Edit</a>
                                <a href="/artikel/delete/<?= $item['id']; ?>">Hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>