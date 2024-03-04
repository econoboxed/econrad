<aside class="sidebar">
    <div class="card mb-4">
        <div class="card-body">
            <h4 class="card-title">About</h4>
            <p class="card-text">My name is Eric Conrad. I majored in Computer Science, and minored in music at Dalhousie University. I post all sorts of projects here on my website.</p>
        </div>
    </div><!-- /.card -->
</aside>

<aside class="sidebar sticky-top">
    <div class="card mb-4">
        <div class="card-body">
            <?php

            if (strcmp($type, "Music") == 0) { ?>
                <h4 class="card-title">Tags</h4>
                <p class="btn btn-light btn-sm mb-1\">Music</p>
            <?php } else if (strcmp($type, "Electronics") == 0) { ?>
                <h4 class="card-title">Tags</h4>
                <p class="btn btn-light btn-sm mb-1\">Electronics</p>
            <?php } else if (strcmp($type, "Other") == 0) { ?>
                    <h4 class="card-title">Tags</h4>
                    <p class="btn btn-light btn-sm mb-1\">Other</p>
            <?php } else { ?>
                <h4 class="card-title">Filters</h4>
                    <form method="post">

                        <?php if (!isset($_POST["electronics"])) {?>
                        <input type="submit" name="electronics" class="btn btn-light btn-sm mb-1" value="Electronics" />
                        <?php } else {?>
                        <a href="/" class="btn btn-secondary btn-sm mb-1">Electronics<a>
                        <?php } ?>
                        
                        <?php if (!isset($_POST["music"])) {?>
                            <input type="submit" name="music" class="btn btn-light btn-sm mb-1\" value="Music" />
                        <?php } else {?>
                        <a href="/" class="btn btn-secondary btn-sm mb-1">Music<a>
                        <?php } ?>

                        <?php if (!isset($_POST["other"])) {?>
                            <input type="submit" name="other" class="btn btn-light btn-sm mb-1\" value="Other" />
                        <?php } else {?>
                        <a href="/" class="btn btn-secondary btn-sm mb-1">Other<a>
                        <?php } ?>
                        
                    </form>
            <?php } ?>  
        </div>
    </div>
</aside>