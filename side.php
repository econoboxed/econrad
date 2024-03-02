<aside class="sidebar">
    <div class="card mb-4">
        <div class="card-body">
            <h4 class="card-title">About</h4>
            <p class="card-text">My name is Eric Conrad. I am a Bachelor of Computer Science from
                Dalhousie University, NS, Canada. I post projects here on my website.</p>
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
                        <input type="submit" name="electronics" class="btn btn-light btn-sm mb-1" value="Electronics" />
                        <input type="submit" name="music" class="btn btn-light btn-sm mb-1\" value="Music" />
                        <input type="submit" name="other" class="btn btn-light btn-sm mb-1\" value="Other" />
                    </form>
            <?php } ?>
        </div>
    </div>
</aside>