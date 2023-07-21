<!-- Tampilan halaman register -->
<div class="card">
  <div class="card-body">
    <h1 class="login-title">Register Here</h1>
    <form action="<?= base_url("/register") ?>" method="post" onsubmit="return validatePassword()">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name" required type="text" class="form-control" id="name" placeholder="Name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input name="email" required type="email" class="form-control" id="email" placeholder="Email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" required type="password" class="form-control" id="password" placeholder="Password">
      </div>
      <!-- Hidden input for role -->
      <input type="hidden" name="role" value="mahasiswa">
      <div class="mb-3">
        <input type="submit" value="Register" class="btn btn-primary">
      </div>
    </form>
    <div class="login-link">
      Already have an account? <a href="<?= base_url("/login") ?>">Login here</a>
    </div>
  </div>
</div>

<!-- SweetAlert CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- JavaScript for password validation -->
<script>
function validatePassword() {
  var passwordInput = document.getElementById("password").value;
  if (passwordInput.length < 8) {
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Password must be at least 8 characters',
    });
    return false; // Prevent form submission
  }
  return true; // Allow form submission
}
</script>
