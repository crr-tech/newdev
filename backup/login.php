<!doctype html>
<html>

<head>
    <title>CRR Account Login Form</title>
    <link rel="icon" href="favicon.svg">
    <link rel="stylesheet" href="CRR-UI.CSS">
    <link rel="stylesheet" href="zigzagpattern.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="top-nav">
        <div><a href="index.php" class="top-nav-a-noborder"><img alt="CRR Logo" src="crr-logo.svg" height="19"></a></div>
        <div><a href="createacc.php">Account creation form</a></div>
        <div><a href="index.php">Forgot password form</a></div>
    </div>
    <div class="form-holder">
        <form action="login.php" method="post">
            <h1 class="linestylbr">Login</h1>
            <p class="linestylbr">Please enter your data to continue.</p>
            <input class="linestylbr" type="text" placeholder="Username..." required><br>
            <input class="linestylbr" type="password" placeholder="Password..." required><br>
            <input type="checkbox" id="rememberme">
            <label for="rememberme">Remember me</label><br>
            <input style="margin-top: 1rem;" type="submit" value="Check">
        </form>
    </div>
</body>

</html>
