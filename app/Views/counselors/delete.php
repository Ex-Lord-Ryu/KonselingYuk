<!DOCTYPE html>
<html>
<head>
    <title>Hapus Counselor</title>
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

        .card p {
            text-align: center;
            margin-bottom: 20px;
        }

        .card button {
            background-color: #dc3545;
            color: #fff;
            padding: 10px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .card button:hover {
            background-color: #c82333;
        }

        .card .cancel-button {
            background-color: #007bff;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Hapus Counselor</h1>
        <p>Anda yakin ingin menghapus Counselor ini?</p>
        <form method="POST" action="/counselors/delete/<?= $counselor['id']; ?>">
            <button type="submit">Hapus</button>
            <a href="/counselors" class="cancel-button">Batal</a>
        </form>
    </div>
</body>
</html>
