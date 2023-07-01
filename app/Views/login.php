<link rel="stylesheet" href="../css/login.css">

<!-- Tampilan halaman login -->
<div class="card">
  <div class="card-body">
    <h1 class="login-title">Register</h1>
    <form action="<?= base_url("login") ?>" method="post">
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Email :">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password :">
      </div>
      <div class="mb-3"><input type="submit" value="Login" class="btn btn-primary"></div>
    </form>
  </div>
</div>