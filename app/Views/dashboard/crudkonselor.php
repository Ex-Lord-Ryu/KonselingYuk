<!DOCTYPE html>
<html>

<head>
    <title>CRUD Counselor</title>
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
    <h1>Daftar Counselor</h1>
    <div class="admin-actions">
        <a href="/counselors/create">Tambah Counselor</a>
        <a href="/dashboard" class="dashboard">Dashboard</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Description</th>
                <th>Specialization</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($counselors as $counselor) : ?>
                <?php if (in_array(pathinfo($counselor['gambar'], PATHINFO_EXTENSION), ['jpg', 'png', 'jpeg',  'svg'])) : ?>
                    <tr>
                        <td><img src="<?= base_url($counselor['gambar']); ?>" class="card-img" alt="<?= $counselor['name']; ?>" style="width: 100px;"></td>
                        <td><?= $counselor['name']; ?></td>
                        <td><?= $counselor['email']; ?></td>
                        <td><?= $counselor['description']; ?></td>
                        <td><?= $counselor['specialization']; ?></td>
                        <td>
                            <div class="admin-actions">
                                <a href="/counselors/edit/<?= $counselor['id']; ?>" class="mb-3">Edit</a>
                                <a href="/counselors/delete/<?= $counselor['id']; ?>">Hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>