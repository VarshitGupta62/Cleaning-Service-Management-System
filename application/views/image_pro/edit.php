<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('bootstrap 5/css/bootstrap.css') ?>">
    <script src="<?= base_url('bootstrap 5/js/bootstrap.js') ?>"></script>
     
</head>
<body  >

<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">Edit Your Image</h4>

            <form action="<?= base_url(); ?>index.php/Image/edit_data" method="post" class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2" enctype="multipart/form-data">

					 

						<div class="col-12">
                <label class="form-label">Your Image</label>
								<br>
                <img src="<?= base_url('uploads/'.$image->image); ?>" style="width: 200px; height: 200px;" alt="Uploaded Image">
              </div>
					 

               
              <div class="col-12">
                <label class="form-label">New Image</label>
								<input type="hidden" name="s_no" value="<?php echo $image->s_no; ?>">
                <input type="file" class="form-control" name="new_image" accept="image/*">
              </div>

              <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Update Image</button>
              </div>

               
            </form>

             
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
