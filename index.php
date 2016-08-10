<?php

$list = array_merge(glob('*.html'), glob('*.php'));

ob_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Directory</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
/* Move down content because we have a fixed navbar that is 50px tall */
body {
  padding-top: 50px;
  padding-bottom: 20px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="https://github.com/progknife">progknife</a>
        </div>
    </div>
</nav>
<div class="jumbotron">
    <div class="container">
        <h1>Playground</h1>
        <p>Snippets, tests and experiments.</p>
    </div>
</div>
<div class="container">
    <h2>Directory</h2>
    <ul>
        <?php foreach($list as $item) { ?>
        <li><a href="<?php print $item; ?>"><?php print $item; ?></a></li>
        <?php } ?>
    </ul>
    <hr>
    <footer>
        <p>progknife</p>
    </footer>
</div>
</body>
</html>
<?php
ob_end_flush();
