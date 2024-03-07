<?php	
$darkmode;
// CHECK WHETHER USER HAS SUBMITTED A NEW REQUEST TO CHANGE THEIR STYLE
if(isset($_POST["darkmode"])){
	switch ($_POST["darkmode"]) {
		case "true":
			$darkmode = true;
			$cookie_name = "darkmode";
			$cookie_value = "true";
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");?>
			<html lang="en" data-bs-theme="dark">
			<?php break;
		case "false":
			$darkmode = false;
			$cookie_name = "darkmode";
			$cookie_value = "false";
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");?>
			<html lang="en" data-bs-theme="light">
			<?php break;
	}

// OTHERWISE, USE THEIR COOKIE
} elseif(isset($_COOKIE["darkmode"])){
	switch ($_COOKIE["darkmode"]) {
		case "true":
			$darkmode = true;?>
			<html lang="en" data-bs-theme="dark">
			<?php break;
		case "false":
			$darkmode = false;?>
			<html lang="en" data-bs-theme="light">
			<?php break;
	}

// IF NEITHER, USE LIGHT MODE
} else { 
	$darkmode = true;?>
	<html lang="en" data-bs-theme="light">
<?php } ?>