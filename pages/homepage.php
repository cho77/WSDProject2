<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
<style>
body  {
     background-repeat: no-repeat, repeat;
    background-color: #cccccc;
}
</style>
    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


<center>
<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
        <label><b>USERNAME</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label><b>PASSWORD</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
    </div>
</form>

<h1><a href="index.php?page=accounts&action=register">Register</a></h1>

</center>
<script src="js/scripts.js"></script>
</body>
</html>