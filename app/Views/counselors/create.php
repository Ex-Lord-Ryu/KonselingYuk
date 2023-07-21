<!DOCTYPE html>
<html>
<head>
    <title>Tambah Counselor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        .card {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
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
        .card input[type="email"],
        .card textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .card input[type="file"] {
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
</head>
<body>
    <div class="card">
        <h1>Tambah Counselor</h1>
        <form method="POST" action="/counselors/store" enctype="multipart/form-data">
            <label>Nama</label>
            <input type="text" name="name" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Gambar</label>
            <input type="file" name="gambar" accept=".jpg, .jpeg, .png, .svg">

            <label>Deskripsi</label>
            <textarea name="description" rows="4" required></textarea>

            <label>Specialization</label>
            <textarea name="specialization" rows="4" required></textarea>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
