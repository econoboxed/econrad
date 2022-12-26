<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Magazine/Blog Theme">
	<meta name="author" content="Bootlab">

  <title>econrad.org</title>

  <link href="../css/app.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">

</head>
<body>

  <?php include '../header.php';?> 

  <main class="main pt-4">
  
    <div class="container">

      <div class="row">
        <div class="col-md-9">

          <article class="card mb-4">
            <header class="card-header text-center">
              <div class="card-meta">
              <time class="timeago" datetime="2021-09-26 20:00">24 january 2022</time> in     
                <?php $section = explode("/", $_SERVER['REQUEST_URI'], -1)[1];?> in <?php print ucfirst($section)?>
              </div>
              <h1 class="card-title">Modifying a Ti-84 to Connect over USB-C</h1>
            </header>
            <img class="img" src="../img/electronics/ti84-ubc-mod/1.png" alt="" />
            <p>&emsp;Here is my completed calculator that I modified to connect over ubs-c. The calculator sitll runs of AA batteries; perhaps later I can mod it to run of a lipo, and charge said lipo with the new port.</p>
          </article><!-- /.card -->

        </div>
        <div class="col-md-3 ms-auto">

          <?php include "../side.php"; ?>

        </div>
      </div>
    </div>

  </main>

  <?php include "../footer.php"; ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
