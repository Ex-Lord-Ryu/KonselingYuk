

<link rel="stylesheet" href="../css/login.css">
<!-- Tampilan halaman register -->


<div class="card">
  <div class="card-body">
    <h1 class="login-title">Log in</h1>
    <form action="<?= base_url("/register") ?>" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="name" class="form-control" id="name" placeholder="Name :">
      </div>
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




