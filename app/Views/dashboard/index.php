<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .card {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .card h2 {
            margin-bottom: 10px;
        }

        .card p {
            margin-bottom: 20px;
        }

        .btn-container {
            text-align: center;
        }

        .btn-container a {
            display: inline-block;
            margin-right: 10px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 3px;
        }

        .btn-container a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard Admin</h1>

        <div class="card">
            <h2>Selamat datang, Admin</h2>
            <p>Ini adalah halaman dashboard admin. Anda dapat mengelola artikel, pengguna, dan lainnya.</p>
            <div class="btn-container">
                <a href="dashboard/crudartikel">Kelola Artikel</a>
                <a href="/dashboard/crudkonselor">Kelola Konselor</a>
            </div>
        </div>
    </div>
</body>
</html>
