<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>云开发者</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/flat-ui.min.css" rel="stylesheet">
    <link href="assets/css/common.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="assets/js/vendor/html5shiv.js"></script>
    <script src="assets/js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <?php include_once "header_menu.php" ?>
    <section data-route="author" class="app">Author Name {{ message }}</section>
    <section data-route="books">Book1, Book2, Book3</section>
    <ul>
        <li><a href="#/author">#/author</a></li>
        <li><a href="#/books">#/books</a></li>
    </ul>
</div>
<script src="assets/js/vendor/jquery-2.2.3.min.js"></script>
<script src="assets/js/vendor/video.js"></script>
<script src="assets/js/flat-ui.min.js"></script>
<script src="assets/js/director.min.js"></script>
<script src="assets/js/vue.js"></script>
<script src="assets/js/common.js"></script>
</body>
</html>