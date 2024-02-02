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

            <h4 class="text-center my-3 pb-3">To Do App</h4>

            <form action="<?= base_url(); ?>index.php/Model_basic/add" method="post" class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
               
              <div  class="col-12 text-center">
                <button  class="btn btn-primary">Add new</button>
              </div>

              <!-- <div class="col-12">
                <button type="submit" class="btn btn-warning">Get tasks</button>
              </div> -->
            </form>

            <table class="table mb-4">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Todo item</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
              <?php $i = 1; ?>
<?php foreach ($user_data as $key => $value): ?>
  <tr>
    <th scope="row"><?php echo $i++; ?></th>
    <td><?= $value->todo ?></td>
    <td>
      <div class="btn-group" role="group">
        <form method="POST" action="<?= base_url() ?>index.php/Model_basic/delete/<?= $value->no ?>">
          <button name="no" type="submit" class="btn btn-danger">Delete</button>
        </form>
        <form method="POST" action="<?= base_url() ?>index.php/Model_basic/edit/<?= $value->no ?>">
          <button name="no" type="submit" class="btn btn-success ms-2">Edit</button>
        </form>
      </div>
    </td>
  </tr>
<?php endforeach; ?>



                 
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
