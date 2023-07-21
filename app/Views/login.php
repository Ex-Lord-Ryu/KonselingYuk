<link rel="stylesheet" href="/css/login.css">

<!-- Tampilan halaman login -->
<div class="card">
  <div class="card-body">
    <h1 class="login-title">Login Here</h1>
    <?php if (isset($validation)) : ?>
      <div class="col-12">
        <div class="alert alert-danger" role="alert">
          <?= $validation->listErrors() ?>
        </div>
      </div>
    <?php endif; ?>
    <form action="<?= base_url("/login") ?>" method="post">
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
      </div>
      <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <select name="role" class="form-control" id="role">
          <option value="mahasiswa">Mahasiswa</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <div class="mb-3">
        <input type="submit" value="Login" class="btn btn-primary">
      </div>
    </form>
    <div class="register-link">
      Don't have an account? <a href="<?= base_url("/register") ?>">Register here</a>
    </div>
  </div>
</div>