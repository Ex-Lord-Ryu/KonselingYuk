<!DOCTYPE html>
<html>

<head>
    <title>Daftar Counselor</title>
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
    <div class="container">
        <h1>Daftar Konselor</h1>
        <div class="grid-container">
            <?php foreach ($counselors as $counselor) : ?>
                <?php if (in_array(pathinfo($counselor['gambar'], PATHINFO_EXTENSION), ['jpg', 'png', 'jpeg', 'svg'])) : ?>
                    <div class="card">
                        <img src="<?= base_url($counselor['gambar']); ?>" class="card-img" alt="<?= $counselor['name']; ?>">
                        <h5 class="card-title" ><a href="/counselors/show/<?= $counselor['id']; ?>"><?= $counselor['name']; ?></a></h5>
                        <p class="card-text"><?= $counselor['description']; ?></p>
                        <!-- <a href="<?= base_url('counselors/show/' . $counselor['id']); ?>">Detail</a> -->
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>
