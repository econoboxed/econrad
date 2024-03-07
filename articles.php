<!DOCTYPE html>

<?php require("style.php") ?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Magazine/Blog Theme">
	<meta name="author" content="Bootlab">

	<title>econrad.org</title>

	<link href="/css/bootstrap.css" rel="stylesheet">
	<link href="/css/bootstrap-icons.css" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="/img/favicon.ico">


	<style>
		#page-container {
			position: relative;
			min-height: 100vh;
		}

		#content-wrap {
			padding-bottom: 6rem;
			/* Footer height */
		}

		#footer {
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 6rem;
			/* Footer height */
		}

		.dropshadow {
			border-radius: 5px;
		}

		.dropshadow:hover {
			box-shadow: 0 0 11px rgba(22, 22, 22, .5);
		}

		.gallery {
			width: 45%;
			margin: 5px;
			border-radius: 5px;
		}

		.link-button {
			background: none;
			border: none;
			width: 100%;
			text-align: left;
			padding: .25rem 1rem;
		}

		.link-button:focus {
			outline: none;
		}
	</style>
</head>

<body>
	<div id="page-container">
		<div id="content-wrap">
			<?php include 'header.php'; ?>

			<main class="main pt-4">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
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

							// SQL QUERY TO GET THE CURRENT URL OF THE WEBSITE AND REQUEST FROM DB
							$query = $conn->prepare("SELECT * FROM `articles` WHERE url=?;");
							$query->bind_param("s", explode('/', htmlspecialchars($_GET['url']))[1]);

							// FETCHING DATA FROM DATABASE 
							$query->execute();
							$result = $query->get_result();

							if ($result->num_rows > 0) {

								// OUTPUT DATA OF FROM SELECTED ARTICLE
								while ($row = $result->fetch_assoc()) {
									$type = $row["type"]; ?>

									<article class="card mb-4">
										<header class="card-header text-center">
											<div class="card-meta">
												<time class="timeago" datetime="<?php echo $row["date"] ?>">
													<?php echo $row["date"] ?>
												</time> in
												<?php echo $row["type"] ?>
												<br>
											</div>
											<h1 class="card-title">
												<?php echo $row["name"] ?>
											</h1>
										</header>
										<img class="img" src="../img/<?php echo $row["url"] ?>/1.png">
										<div style="margin: 10px;">
											<h4>
												<?php echo $row["subtitle"] ?>
											</h4>

											<?php

											// ECHO TEXT IF ARTICLE HAS TEXT
											if ($row["text"] != NULL) {
												echo $row["text"];
											}

											// SHOW MUSIC PLAYER IF ARTICLE HAS AUDIO
											if (strcmp($row["type"], "Music") == 0) { ?>
												<audio controls src="../mus/<?php echo $row["url"] ?>.mp3">
													<a href="">
														Download audio
													</a>
												</audio>
											<?php }

											// SHOW GALLERY IF MORE THAN 1 IMAGE
											if (file_exists("img/" . $row["url"] . "/2.png")) {
												$count = 1;
												echo "<H4>Gallery</H4>";
												while (file_exists("img/" . $row["url"] . "/" . $count . ".png")) { ?>
													<a href="../img/<?php echo $row["url"] ?>/<?php echo $count ?>.png">
														<img class="gallery dropshadow" src="../img/<?php echo $row["url"] ?>/<?php echo $count ?>.png">
													</a>
													<?php $count++;
												}
											} ?>
										</div>
									</article><!-- /.card -->

								</div>

							<?php }
							}
							$conn->close(); ?>

						<div class=" col-md-3 ms-auto">
							<?php include "side.php"; ?>
						</div>

					</div>
				</div>
			</main>
		</div>
		<?php include "footer.php"; ?>
	</div>
  <script src="/js/bootstrap.bundle.js"></script>
</body>

</html>