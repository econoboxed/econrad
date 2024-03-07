<aside class="sidebar">
	<div class="card mb-4">
		<div class="card-body">
			<h4 class="card-title">About</h4>
			<p class="card-text">My name is Eric Conrad. I majored in Computer Science, and minored in music at Dalhousie
				University. I post all sorts of projects here on my website.</p>
		</div>
	</div>
</aside>

<aside class="sidebar sticky-top">
	<div class="card mb-4">
		<div class="card-body">
			<?php
			$buttonstyle = "";
			if ($darkmode){
				$buttonstyle = "btn-secondary";
			}	else {
				$buttonstyle = "btn-light";
			}

			switch ($type) {
				case "Music": ?>
					<h4 class="card-title">Tags</h4>
					<p>Music</p>
					<?php break;
				case "Electronics": ?>
					<h4 class="card-title">Tags</h4>
					<p>Electronics</p>
					<?php break;
				case "Other": ?>
					<h4 class="card-title">Tags</h4>
					<p>Other</p>
					<?php break;
				default: ?>
					<h4 class="card-title">Filters</h4>
					<form method="post">

						<?php if (!isset($_POST["electronics"])) { ?>
							<input type="submit" name="electronics" class="btn <?php echo $buttonstyle?>" value="Electronics" />
						<?php } else { ?>
							<a href="/" class="btn btn-primary">Electronics<a>
								<?php } ?>

						<?php if (!isset($_POST["music"])) { ?>
							<input type="submit" name="music" class="btn <?php echo $buttonstyle?>" value="Music" />
						<?php } else { ?>
							<a href="/" class="btn btn-primary">Music<a>
								<?php } ?>

						<?php if (!isset($_POST["other"])) { ?>
							<input type="submit" name="other" class="btn <?php echo $buttonstyle?>" value="Other" />
						<?php } else { ?>
							<a href="/" class="btn btn-primary">Other<a>
								<?php } ?>

					</form>
			<?php } ?>
		</div>
	</div>
</aside>