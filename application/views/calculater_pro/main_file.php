<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('bootstrap 5/css/bootstrap.css') ?>">
    <script src="<?= base_url('bootstrap 5/js/bootstrap.js') ?>"></script>
    <style>
        .container {
            margin-top: 40px;
        }

        /* .card-body {
            text-align: center;
        } */

        .card-body p {
            margin-bottom: 20px;
        }

        .card-body a {
            display: inline-block;
            margin-bottom: 10px;
            padding: 8px 16px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border-radius: 4px;
            text-decoration: none;
        }

        .card-body a:hover {
            background-color: #005cbf;
        }
    </style>
</head>
<body style="background-color: #f8f9fa;">

<div class="container">
    <h1 style="color: black;">Basic Calculator</h1>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <p>Please choose an option:</p>
                        <a href="<?= base_url('index.php/Calculater/add_method') ?>" style="background-color: #007bff;">Add</a>
                        
                        <a href="<?= base_url('index.php/Calculater/sub_method') ?>" style="background-color: #ffc107;">Subtract</a>
                        
                        <a href="<?= base_url('index.php/Calculater/multi_method') ?>" style="background-color: #28a745;">Multiply</a>
                        
                        <a href="<?= base_url('index.php/Calculater/devide_method') ?>" style="background-color: #dc3545;">Divide</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
