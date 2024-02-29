<aside class="sidebar">
    <div class="card mb-4">
        <div class="card-body">
            <h4 class="card-title">About</h4>
            <p class="card-text">My name is Eric Conrad. I am a Bachelor of Computer Science from 
            Dalhousie University, NS, Canada. I post projects here on my website.</p>
        </div>
    </div><!-- /.card -->
</aside>

<aside class="sidebar sidebar-sticky">
    <div class="card mb-4">
        <div class="card-body">
            <?php
            $section = explode("/", $_SERVER['REQUEST_URI'], -1)[1];

            if (str_contains($section, "music")) {
                print "<h4 class=\"card-title\">Tags</h4>";
                print "<p class=\"btn btn-light btn-sm mb-1\" >Music</p>";
            } else if (str_contains($section, 'electronics')) {
                print "<h4 class=\"card-title\">Tags</h4>";
                print "<p class=\"btn btn-light btn-sm mb-1\" >Electronics</p>";
            } else if (str_contains($section, 'other')) {
                print "<h4 class=\"card-title\">Tags</h4>";
                print "<p class=\"btn btn-light btn-sm mb-1\" >Other</p>";

            } else {
                print "<h4 class=\"card-title\">Filters</h4>";
                print "<form method=\"post\">";
                print "    <input type=\"submit\" name=\"electronics\" class=\"btn btn-light btn-sm mb-1\" value=\"Electronics\" />";
                print "    <input type=\"submit\" name=\"music\" class=\"btn btn-light btn-sm mb-1\" value=\"Music\" />";
                print "    <input type=\"submit\" name=\"other\" class=\"btn btn-light btn-sm mb-1\" value=\"Other\" />";
                print "</form>";
            }
            ?>
        </div>
    </div>
</aside>