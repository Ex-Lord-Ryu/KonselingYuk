<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Konseling</title>
  <!-- <link href='../img/logo ky.png' rel='shorcut icon' > -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>
<?php $session = \Config\Services::session(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">Konseling Yuk.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end order-md-2 order-3" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link poppins py-md-2 py-3 px-lg-3" href="<?= base_url("/") ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link poppins py-md-2 py-3 px-lg-3" href="<?= base_url("/artikel") ?>">Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link poppins py-md-2 py-3 px-lg-3" href="<?= base_url("/counselors") ?>">Konselor</a>
        </li>
        <?php if ($session->has('user')) : ?>
          <?php if ($session->get('user')['role'] == 'admin') : ?>
            <li class="nav-item">
              <a class="nav-link poppins py-md-2 py-3 px-lg-3" href="<?= base_url("/dashboard") ?>">Admin</a>
            </li>
          <?php endif; ?>
          <li class="nav-item">
            <a class="nav-link poppins py-md-2 py-3 px-lg-3" href="<?= base_url("/counseling") ?>">Konseling</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("/logout") ?>" class="btn btn-danger" type="button">Logout</a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link poppins py-md-2 py-3 px-lg-3" href="<?= base_url("/login") ?>">Konseling</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

  <div class="container mt-4">
    <br>
    <br>
    <!-- Tampilkan notifikasi -->
    <?php if (session()->getFlashdata('success')) : ?>
      <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('success') ?>
      </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')) : ?>
      <div class="alert alert-danger" role="alert">
        <?= session()->getFlashdata('error') ?>
      </div>
    <?php endif; ?>