<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_GET['page']; ?></title>
    <link rel="stylesheet" href="./assets/vendor/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/vendor/css/all.css">
    <link rel="stylesheet" href="./assets/css/pp1-style.css">
</head>
<body>

<nav class="navbar navbar-expand bg-light shadow">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav ">
            <li><a href="action.php?page=Home" class="nav-link text-success">Home</a></li>
            <li><a href="action.php?page=About" class="nav-link text-success">About</a></li>
            <li><a href="action.php?page=Contact" class="nav-link text-success">Contact</a></li>
            <li><a href="action.php?page=All-student" class="nav-link text-success">All Student</a></li>
        </ul>
    </div>
</nav>