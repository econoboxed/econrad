<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Magazine/Blog Theme">
	<meta name="author" content="Bootlab">

  <title>econrad.org</title>

  <link href="css/app.css" rel="stylesheet">
</head>
<body>
  <?php require 'header.php';?> 
  <main class="main pt-4">

    <div class="container">

      <div class="row">
        <div class="col-md-9">

          <?php
          foreach (array_reverse(glob("articles/*.php")) as $filename) {
            require_once($filename);
        }
          ?>

        </div>
        <div class="col-md-3 ms-auto">

          <?php require 'side.php';?>

        </div>
      </div>
    </div>

  </main>

  <?php require 'footer.php';?> 

  <script src="js/app.js"></script>
</body>
</html>
