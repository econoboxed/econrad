<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta noindex>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Magazine/Blog Theme">
	<meta name="author" content="Bootlab">

	<title>econrad.org</title>

	<link href="../css/bootstrap.css" rel="stylesheet">
	<style>
		#page-container {
			position: relative;
			min-height: 100vh;
		}

		#content-wrap {
			padding-bottom: 6rem;
			/* FOOTER HEIGHT */
		}

		#footer {
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 6rem;
			/* FOOTER HEIGHT */
		}
	</style>

</head>

<body>
	<div id="page-container">
		<div id="content-wrap">
			<?php require 'header.php'; ?>
			<main class="main pt-4">

				<div class="container">

					<?php

					// CHANGE THIS TO WHERE/HOWEVER YOU KEEP YOUR SQL CREDENTIALS
					include "sql.php";

					// LOGIC IF USER HAS NOT ATTEMPTED A LOGIN
					if (!isset($_POST['username'])) {

						// SHOW LOGIN AT FIRST PAGE LOAD
						include 'login.php';

						// LOGIC IF USER HAS ATTEMPTED TO LOGIN
					}
					if (isset($_POST['username'])) {

						// PROHIBIT LOGGING IN AS 'ROOT'
						if (strcmp($_POST['username'], 'root') == 0) { ?>

							<div class="alert alert-danger alert-dismissible fade show fixed-top" role="alert" style="margin:10px;">
								<strong>Error - Logging in as root is prohibited!</strong> Create or contact your DBA to setup a privileged
								non-root account.
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
							<?php
							include 'login.php';

						} else {
							// CREATE CONNECTION 
							$conn = new mysqli(
								$servername,
								$_POST["username"],
								$_POST["password"],
								$databasename
							);

							// GET CONNECTION ERRORS 
							if ($conn->connect_error) {

								// SHOW LOGIN IF LOGIN FAILED
								?>
								<div class="alert alert-danger alert-dismissible fade show fixed-top" role="alert" style="margin:10px;">
									<strong>Error - invalid credentials!</strong> You best not be trying to hack me.
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
								<?php
								include 'login.php';

							} else {

								// SHOW UPLOAD FORM IF LOGIN SUCSESSFUL
								include 'compose.php';
							}
							$conn->close();
						}
					}
					if (isset($_POST['aname'])) {

						// LOGIC IF USER HAS SUBMITTED DATA TO DATABASE
						$conn = new mysqli(
							$servername,
							htmlspecialchars($_POST["username"]),
							htmlspecialchars($_POST["password"]),
							$databasename
						);

						// MAKE SURE URL IS UNIQUE
						$query = $conn->prepare("SELECT * FROM `articles` WHERE url=?;");
						$query->bind_param("s", $_POST['aurl']);

						// FETCHING DATA FROM DATABASE 
						$query->execute();
						$result = $query->get_result();

						if ($result->num_rows == 0) {

							// ADD DATA TO DATABASE
							$query = $conn->prepare("INSERT INTO `articles` (`name`,`subtitle`,`type`,`date`,`url`,`text`) VALUES (?,?,?,?,?,?)");
							$query->bind_param("ssssss", $_POST['aname'], $_POST['asubtitle'], $_POST['atype'], $_POST['adate'], $_POST['aurl'], $_POST['atext']);

							$query->execute();
							$result = $query->get_result();

							// MAKE DIRECTORY FOR AND MOVE THE IMAGES
							mkdir("img/" . $_POST['aurl']);
							$target_dir = "img/" . $_POST['aurl'] . "/";

							$count = 0;
							foreach ($_FILES['fileToUpload']['name'] as $filename) {
								$target_file = $target_dir . ($count + 1) . '.png';
								move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$count], $target_file);
								$count++;
							}

							// DO THE SAME FOR AUDIO FILE IF IT IS A MUSIC POST
							if (strcmp($type, "Music") == 0) {
								$target_dir = "mus/";
								$target_file = $target_dir . $url . ".mp3";
								move_uploaded_file($_FILES["musicToUpload"]["tmp_name"], $target_file);
							}
							$conn->close();
							?>

							<div class="alert alert-success alert-dismissible fade show fixed-top" role="alert" style="margin:10px;">
								<strong>Post Succesfull!</strong> Verify the post on the <a href="/" class="alert-link">homepage</a>.
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>


						<?php } else { ?>

							<div class="alert alert-danger alert-dismissible fade show fixed-top" role="alert" style="margin:10px;">
								<strong>Error - article already exists!</strong> Please ensure you're providing a unique URL.
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>

						<?php }
					} ?>
				</div>
			</main>
		</div>
		<?php require 'footer.php'; ?>
	</div>
	<script src="js/app.js"></script>
</body>

</html>