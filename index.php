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

							// SQL QUERY, FILTER BY TYPE IF USER FILTERED
							if (isset($_POST["electronics"])) {
								$query = "SELECT * FROM `articles` WHERE type='Electronics' ORDER BY `date` DESC;";
							} else if (isset($_POST["music"])) {
								$query = "SELECT * FROM `articles` WHERE type='Music' ORDER BY `date` DESC;";
							} else if (isset($_POST["other"])) {
								$query = "SELECT * FROM `articles` WHERE type='Other' ORDER BY `date` DESC;";
							} else {
								$query = "SELECT * FROM `articles` ORDER BY `date` DESC;";
							}


							// FETCHING DATA FROM DATABASE 
							$result = $conn->query($query);

							if ($result->num_rows > 0) {

								// OUTPUT DATA OF EACH ROW INTO AN ARTICLE
								while ($row = $result->fetch_assoc()) {
									?>
									<a href="articles/<?php echo $row["url"] ?>" class="text-decoration-none">
										<div class="dropshadow">
											<article class="card mb-4">
												<header class="card-header">
													<div class="card-meta">
														<?php echo $row["date"] ?> in
														<?php echo $row["type"] ?>
													</div>
													<h4 class="card-title">
														<?php echo $row["name"] ?>
													</h4>
												</header>
												<div style="border-radius:10px">
													<img class="img-fluid" src="img/<?php echo $row["url"] ?>/1.png" alt="" />
													<div class="align-bottom card-overlay">

														<?php echo $row["subtitle"] ?>

													</div>
												</div>
											</article>
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
		</div>
		<?php require 'footer.php'; ?>
	</div>
	<script src="js/bootstrap.bundle.js"></script>
</body>

</html>