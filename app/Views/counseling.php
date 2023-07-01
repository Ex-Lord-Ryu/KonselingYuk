<?php include('templates/header.php'); ?>

<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!-- Form pendaftaran konseling -->
    <!-- Content -->

    <div class="p-0 konsultasi">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 d-lg-block d-none" data-aos="fade-down" data-aos-duration="1000">
                    <img src="..//img/Consulting-rafiki.svg" alt="Konsultasi" class="w-100">
                </div>
                <div class="col-lg-6 col p-md-5 p-4 my-5" data-aos="fade-down" data-aos-duration="1400" data-aos-offset="300">
                    <form action="https://bkpaxist.000webhostapp.com/konsultasi/send" method="post">
                        <input type="hidden" name="csrf_test_name" value="fcb6a6770c48281a9a97d3847ba3a74f" />
                        <div class="text-center mb-5">
                            <h2 class="poppins fw-bold fs-1">Konsultasi</h2>
                            <p class="text-secondary">Kirim stories atau problem kamu dibawah ini ya</p>
                        </div>

                        <!-- Nama -->
                        <label for="name" class="form-label">Nama panggilan atau lengkap</label>
                        <input type="text" name="name" id="name" class="form-control " value="">
                        <div class="invalid-feedback">
                        </div>

                        <!-- Email -->
                        <label for="email" class="form-label mt-3">Email</label>
                        <input type="email" name="email" id="email" class="form-control " value="">
                        <div class="invalid-feedback">
                        </div>

                        <!-- Kelas -->
                        <label for="kelas" class="form-label mt-3">Semester</label>
                        <input type="number" name="grade" id="kelas" class="form-control " value="">
                        <div class="invalid-feedback">
                        </div>

                        <!-- Jurusan -->
                        <label for="jurusan" class="form-label mt-3">Jurusan</label>
                        <input type="jurusan" name="jurusan" id="jurusan" class="form-control " value="">
                        <div class="invalid-feedback">
                        </div>

                        <label for="stories" class="form-label mt-3">Stories atau problem kamu</label>
                        <textarea name="stories" id="stories" cols="30" rows="10" class="form-control "></textarea>
                        <div class="invalid-feedback">
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary btn-lg mt-4 montserrat"><i class="far fa-envelope me-2"></i> Kirim</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <?php include('templates/footer.php'); ?>