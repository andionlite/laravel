<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
  <title>
    <?php echo $__env->yieldContent('title'); ?>
  </title>
</head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Bitpanda    App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          
          
          <li class="nav-item active">
              <a class="nav-link" href="/activeAu">Active Austrians <span class="sr-only">(current)</span></a>
            </li>
          
            <li class="nav-item active">
              <a class="nav-link" href="/active">All Users <span class="sr-only">(current)</span></a>
            </li>


            <li class="nav-item active">
              <a class="nav-link" href="/active2">User accounts <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container">
     
      <?php echo $__env->yieldContent('content'); ?>
    </div>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\bitpanda\bitpanda_1\resources\views/layouts/app.blade.php ENDPATH**/ ?>