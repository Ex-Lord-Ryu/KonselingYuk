<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Terkirim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Email Terkirim</h5>
                <div class="alert alert-success" role="alert">
                    <?= $message ?>
                </div>
                <a href="<?= site_url('/') ?>" class="btn btn-primary">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</body>

</html>