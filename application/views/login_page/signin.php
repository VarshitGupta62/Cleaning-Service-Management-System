<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body p-5">
            <h2 class="card-title text-center mb-4">Create an Account</h2>
            <form method="post" action="<?= base_url('index.php/Login_system/login_form') ?>" >
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input name="user_name" type="text" class="form-control" id="name" placeholder="Enter your name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="user_email" type="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Enter a password" required>
              </div>
              
               
              <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Register</button>
              </div>
            </form>
						<p class="text-center mt-4">Already have an account? <a href="<?= base_url('index.php/Login_system/login_page') ?>">Login here</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
