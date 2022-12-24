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

          <article class="card mb-4">
            <header class="card-header">
              <div class="card-meta">
                <a href="#"><time class="timeago" datetime="2021-09-26 20:00">26 october 2021</time></a> in <a href="page-category.html">Electronics</a>
              </div>
              <a href="electronics/new-3ds-usbc-mod.php">
                <h4 class="card-title">USB-C n3ds</h4>
              </a>
            </header>
            <a href="electronics/new-3ds-usbc-mod.php">
              <img class="card-img" src="img/electronics/new-3ds-usbc-mod/1.png" alt="" />
            </a>
            <div class="card-body">
              <p class="card-text">Modding a New Nintendo 3ds (non-xl, 2015) to charge over USB-C. Powered by a tiny Adifuit breakout board.</p>
            </div>
          </article><!-- /.card -->
        
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
