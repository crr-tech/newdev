<?php
$redir = $_GET["redir"];
?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="icon" href="http://127.9.9.9/CRR-LOGO.png" />
    <title>CRR My Account Login</title>
    <link rel="stylesheet" href="http://127.9.9.9/style.css"/>
    <style>
		table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
</head>
<body>
    <div class='top-nav'>
        <div><a class='top-nav-link-sel'>CRR My Account Login</a></div>
        </div>
    <div class="login-view">
		<form method="post" action="login.php?redir=<?php echo $redir;?>">
			<h1>Log in or create a new account</h1>
			<p>Please enter your data to continue:</p>
			<input type="text" required name="uname" placeholder="User name..."><br>
			<input type="password" required name="pwd" placeholder="Password..."><br>
			<input type="checkbox" id="rme" name="rme">
			<label for="rme">Remember me on this device.</label><br>
			<input type="checkbox" id="dataa" name="dataa" required>
			<label for="dataa">I agree to send the following data to <a href="<?php echo $redir;?>"><?php echo $redir;?></a>:<br><table>
				<tr>
					<th>Data key</th>
					<th>Service permissions</th>
				</tr>
				<tr>
					<td>Name and surname</td>
					<td>Read</td>
				</tr>
			</table></label><br>
			<input type="submit" value="Login" name="submit">
		</form>
    </div>
    
</body>
</html>
