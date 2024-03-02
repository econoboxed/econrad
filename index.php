<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Bootstrap 4 Magazine/Blog Theme">
  <meta name="author" content="Bootlab">

  <title>econrad.org</title>

  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">

  <style>
  .dropshadow{
    border-radius:5px;
  }
  .dropshadow:hover {
    box-shadow: 0 0 11px rgba(22,22,22,.5); 
  }
  </style>
</head>

<body>
  <?php require 'header.php'; ?>
  <main class="main pt-4">

    <div class="container">

      <div class="row">
        <div class="col-md-8">
          <?php

          // CHANGE THIS TO WHERE/HOWEVER YOU KEEP YOUR SQL CREDENTIALS
          include "sql.php";

          $type = "none";

          // CREATE CONNECTION 
          $conn = new mysqli(
            $servername,
            $username,
            $password,
            $databasename
          );

          // GET CONNECTION ERRORS 
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          // SQL QUERY 
          $query = "SELECT * FROM `articles` ORDER BY `date` DESC;";

          // FETCHING DATA FROM DATABASE 
          $result = $conn->query($query);

          if ($result->num_rows > 0) {

            // OUTPUT DATA OF EACH ROW INTO AN ARTICLE
            while ($row = $result->fetch_assoc()) {
              ?>
              <a href="articles/<?php echo $row["url"] ?>">
              <div class="dropshadow">
              <article class="card mb-4">
                <header class="card-header">
                  <div class="card-meta">
                    <time class="timeago" datetime="<?php echo $row["date"] ?>"></time> in
                    <?php echo $row["type"] ?>
                  </div>
                    <h4 class="card-title">
                      <?php echo $row["name"] ?>
                    </h4>
                </header>
                  <div style="border-radius:10px">
                    <img class="img-fluid"  src="img/<?php echo $row["url"] ?>/1.png" alt="" />
                    <div style="position: absolute; bottom: 16px; right: 16px; background-color:#eeeeee; margin-left:150px; padding:10px; border-radius:10px; text-align:right;">
                      <p><?php echo $row["subtitle"] ?></p>
                    </div>
                  </div>
                </article><!-- /.card -->
              </div>
              
              </a>
            <?php }
          }

          $conn->close();

          ?>
        </div>
        <div class="col-md-4 ms-auto">

          <?php require 'side.php'; ?>

        </div>
      </div>
    </div>

  </main>

  <?php require 'footer.php'; ?>

  <script src="js/app.js"></script>
</body>

</html>