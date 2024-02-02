<!DOCTYPE html>  
<html>  
<head>  
    <title>Hello World</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('bootstrap 5/css/bootstrap.css') ?>"> 
	<script src="<?= base_url('bootstrap 5/js/bootstrap.js') ?>" ></script>  
</head>  
<body>  
<form action="<?=  base_url(); ?>index.php/Calculater/cal_devide" method="post">
    <div class="container mt-4">
        <h1>Devide two number : </h1>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" name="num1" class="form-control" id="num1" placeholder="Enter number 1">
                        </div>
						<br>
                        <div class="form-group">
                            <input type="text" name="num2" class="form-control" id="num2" placeholder="Enter number 2">
                        </div>
						<br>
                        <div class="form-group">
						<button type="submit" name="add" >Submit</button>
						    
                        </div>
                        <div class="form-group">
                            <label for="result">Result:</label>
                            <!-- <input type="text" class="form-control" id="result" disabled> -->
							<p class="text-success" ><?= isset($result) ? $result : ''; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</form>
    
     
</body>  
</html>
