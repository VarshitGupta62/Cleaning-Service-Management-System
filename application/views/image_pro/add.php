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

            <h4 class="text-center my-3 pb-3">Upload Image</h4>

            <form action="<?= base_url(); ?>index.php/Image/save_image" method="post" class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2" enctype="multipart/form-data">
              <div class="col-12">
                <div class="form-outline">
					        <label class="form-label" for="form1">Please choose your image </label>
                  <input type="file" name="image" id="image" class="form-control" />
                </div>
              </div>

              <div  class="col-12 text-center">
                <button type="submit"  class="btn btn-primary">Save</button>
              </div>

              <!-- <div class="col-12">
                <button type="submit" class="btn btn-warning">Get tasks</button>
              </div> -->
            </form>

             
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
