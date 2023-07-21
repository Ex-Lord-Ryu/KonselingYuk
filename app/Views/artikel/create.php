<!DOCTYPE html>
<html>

<head>
    <title>Tambah Artikel</title>
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
</head>

<body>
    <div class="card">
        <h1>Tambah Artikel</h1>

        <form method="POST" action="/artikel/store" enctype="multipart/form-data">
            <label>Judul</label>
            <input type="text" name="judul">

            <label>Author</label>
            <input type="text" name="author">

            <label>Gambar</label>
            <input type="file" name="gambar" accept=".jpg, .jpeg, .png, .svg">

            <label>Jenis Konten</label>
            <select name="jenis_konten">
                <option value="Berita">Berita</option>
                <option value="Question">Question</option>
                <option value="Tutorial">Tutorial</option>
                <option value="Information">Information</option>
            </select>

            <label>Konten</label>
            <textarea name="konten"></textarea>

            <label>Tanggal</label>
            <input type="date" name="tanggal">

            <button type="submit" id="submitBtn">Simpan</button>
        </form>
    </div>

</body>

</html>
