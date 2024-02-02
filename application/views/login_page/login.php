<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 15px;
        }

        .gradient-custom-3 {
            background-image: linear-gradient(to bottom right, #4e54c8, #8f94fb);
        }

        .gradient-custom-4 {
            background-image: linear-gradient(to bottom right, #ee0979, #ff6a00);
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body p-5">
                    <h2 class="card-title text-center mb-4">Login</h2>
                    <form method="post" action="<?= base_url('index.php/Login_system/login') ?>" >
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="user_email" type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input  name="password" type="password" class="form-control" id="password" placeholder="Enter your password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Login</button>
                        </div>
                    </form>
					<p class="text-center mt-4">Don't have an account? <a href="<?= base_url('index.php/Login_system/main') ?>">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
