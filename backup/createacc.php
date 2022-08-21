<!doctype html>
<html>

<head>
    <title>CRR Account Creation Form</title>
    <link rel="icon" href="favicon.svg">
    <link rel="stylesheet" href="CRR-UI.CSS">
    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="zigzagpattern.css">
</head>

<body>
    <div class="top-nav">
        <div><a href="index.php" class="top-nav-a-noborder"><img alt="CRR Logo" src="crr-logo.svg" height="19"></a></div>
        <div><a href="login.php">Login form</a></div>
        <div><a href="index.php">Forgot password form</a></div>
    </div>
    <script>
    function closemodal() {
        document.getElementById("master-modal").style.visibility = "hidden";
    }
    </script>
    <div class="form-holder">
        <form action="createacc.php" method="post">
            <h1 class="linestylbr">Create an account</h1>
            <p class="linestylbr">Please enter your data to continue.</p>
            <input required class="linestylbr" type="text" placeholder="Name and surname..." /><br>
            <input required class="linestylbr" type="text" placeholder="Username..." /><br>
            <input required class="linestylbr" type="password" placeholder="Password..." /><br>
            <input type="submit" value="Create my account" />
        </form>
    </div>
    <div class="form-holder" id="master-modal">
        <h1 class="linestylbr">⚠ An error occurred</h1>
        <p class="linestylbr">This form contains an error:</p>
        <p class="linestylbr">Thisdofahsdfoaishdoa...</p>
        <button onclick="closemodal()">Close</button>
    </div>
</body>

</html>
