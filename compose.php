<form action="/upload" method="post" enctype="multipart/form-data">
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="aname">Article Name:</label>
            <input type="text" class="form-control" name="aname" required value="<?php echo $_POST['aname']; ?>">
        </div>
        <div class="col-auto">
            <label for="aurl">Article URL:</label>
            <input type="text" class="form-control" name="aurl" pattern="[\-A-Za-z0-9]+" title="Only alphanumeric and '-' allowed" required value="<?php echo $_POST['aurl']; ?>">
        </div>
        <div class="col-auto">
            <label for="atype">Article Tag:</label>
            <select name="atype" class="form-control" required value="<?php echo $_POST['atype']; ?>"> 
                <option value="Electronics">Electronics</option>
                <option value="Music">Music</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="col-auto">
            <label for="adate">Article Date:</label>
            <input type="date" class="form-control" name="adate" required value="<?php echo $_POST['adate']; ?>">
        </div>
    </div>

    <hr>
    <div class="form-group">
        <label for="asubtitle">Article Subtitle:</label>
        <input class="form-control" name="asubtitle" required value="<?php echo $_POST['asubtitle']; ?>">
    </div>

    <hr>
    <div class="mb-3">
        <label for="atext" class="form-label">Article Text:</label>
        <textarea class="form-control" name="atext" rows="10"><?php echo $_POST['atext']; ?></textarea>
        <div id="photohelp" class="form-text">
            HTML is supported and required for paragraphs to work correctly.
        </div>
    </div>

    <hr>
    <div class="row g-3 align-items-center">
        <div class="col-auto mb-3">

            <label for="fileToUpload[]">Article Photos:</label>
            <input id="formFiles" type="file" accept=".png" class="form-control" name="fileToUpload[]" id="fileToUpload" multiple
                required>
            <div id="photohelp" class="form-text">
                PNGs only. The first PNG you select will be the article tumbnail.
            </div>
        </div>
        <div class="col-auto mb-3">

            <label for="musicToUpload">Music File:</label>
            <input id="formFile" type="file" accept=".mp3" class="form-control" name="musicToUpload" id="fileToUpload">
            <div id="photohelp" class="form-text">
                MP3s only, only needed for music posts.
            </div>
        </div>
        <hr>

        <input type="submit" value="Submit Article to Database" name="submit" class="btn btn-primary">

    </div>


    <input type="hidden" name="username" value="<?php echo $_POST['username']; ?>">
    <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>">

</form>
<br>