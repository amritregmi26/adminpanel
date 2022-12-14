<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard - Admin Panel</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.min.js" defer></script>
    <script src="assets/js/all.min.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</head>

<body>
    <main id="login-main">
        <form action="implementation/loginlogic.php" method="post">
            <h1 class="text-capitalize">admin login</h1>
            <label for="username">Username: </label>
            <input class="form-control" type="text" name="username" id="username">
            <label for="password">Password: </label>
            <input class="form-control" type="password" name="password" id="password">
            <input class="btn rounded-pill" type="submit" value="Login">
        </form>
    </main>
</body>
</html>