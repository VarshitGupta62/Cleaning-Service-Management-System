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
<body>

<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">Edit your todo</h4>

            <form action="<?= base_url(); ?>index.php/Model_basic/edit_data" method="post" class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
              <div class="col-12">
                <div class="form-outline">
                  <label class="form-label" for="form1">Enter a task here</label>
                  <input name="todo" type="text" id="form1" class="form-control" value="<?= $todo->todo ?>" />
									<input type="hidden" name="no" id="" value="<?= $todo->no ?>" >
                </div>
              </div>

              <div class="col-12 text-center">
                <button type="submit" name="submit" class="btn btn-primary">Change</button>
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
