<?php include('templates/header.php'); ?>

<div class="p-0 konsultasi">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 d-lg-block d-none">
                <img src="../img/Consulting-rafiki.svg" alt="Konsultasi" class="w-100">
            </div>
            <div class="col-lg-6 col p-md-5 p-4 my-5">
                <form action="<?= site_url('/send-email') ?>" method="post">
                    <div class="text-center mb-5">
                        <h2 class="poppins fw-bold fs-1">Konsultasi</h2>
                        <p class="text-secondary">Kirim stories atau problem kamu dibawah ini ya</p>
                    </div>

                    <!-- Nama -->
                    <div class="form-group">
                        <label for="name">Nama panggilan atau lengkap</label>
                        <input type="text" name="name" id="name" class="form-control" value="">
                    </div>

                    <!-- Nomer Handphone -->
                    <div class="form-group mt-3">
                        <label for="nomer">Nomer Handphone</label>
                        <input type="tel" name="nomer" class="form-control" id="telepon" placeholder="Masukkan nomor telepon"  value="+62">
                        <small class="form-text text-muted">Format: +62 atau 08</small>
                    </div>

                    <!-- Email Konselor -->
                    <div class="form-group mt-3">
                        <label for="email_konselor">Konselor</label>
                        <select name="email_konselor" id="email_konselor" class="form-control">
                            <option value="amandadewi@magim.be">Dr. Amanda Dewi</option>
                            <option value="budipranata@magim.be">Dr. Budi Pranata</option>
                            <option value="idanugraha@magim.be">Prof. Ida Nugraha</option>
                            <option value="henrymitchell@magim.be">Henry Mitchell  , M.Psi</option>
                        </select>
                    </div>

                    <!-- Email -->
                    <div class="form-group mt-3">
                        <label for="email_pengguna">Email</label>
                        <input type="email" name="email_pengguna" id="email_pengguna" class="form-control" value="">
                    </div>

                    <!-- Semester -->
                    <div class="form-group mt-3">
                        <label for="semester">Semester</label>
                        <input type="number" name="semester" id="semester" class="form-control" value="">
                    </div>

                    <!-- Jurusan -->
                    <div class="form-group mt-3">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                            <option value=""></option>
                            <option value="FTI, Sitem Informasi">Sitem Informasi</option>
                            <option value="FISIP, Psikologi">Psikologi</option>
                            <option value="FH, Hukum">Hukum</option>
                        </select>
                    </div>

                    <!-- Stories -->
                    <div class="form-group mt-3">
                        <label for="stories">Stories atau problem kamu</label>
                        <textarea name="stories" id="stories" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <!-- Tombol Kirim -->
                    <button type="submit" name="submit" class="btn btn-primary btn-lg mt-4 montserrat"><i class="far fa-envelope me-2"></i> Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('templates/footer.php'); ?>