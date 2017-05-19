<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Album Details</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
<main class="container">
    <h1>Album Details</h1>
    <form method="post" action="saveAlbum.php">
        <fieldset class="form-group">
            <label for="title" class="col-sm-1">Title: </label>
            <input name="titile" id="title" required placeholder="Album title"/>
        </fieldset>

        <fieldset class="form-group">
            <label for="year" class="col-sm-1">Year: </label>
            <input name="year" id="year" type="number" min="1900" placeholder="Release Year"/>
        </fieldset>
        <fieldset class="form-group">
            <label for="artist" class="col-sm-1">Artist: </label>
            <input name="artist" id="artist" required placeholder="Release Year"/>
        </fieldset>
        <button class="btn btn-success col-sm-offset-1">Save</button>
    </form>
</main>
</body>
</html>
