<!DOCTYPE html>
<html>
<head>
<title>miniFacebook</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />
</head>
<body>
<div id="container">
<header>
<h1><a href="register.php">Egoriwe Chat</a></h1>
</header>

<ul id="main_menu">
<li><a href="register.php" title="Register new user">Register</a></li>
<li><a href="search.php" title="Users list">Search</a></li>
<li><a href="login.php" title="Login private area">Login</a></li>
</ul>

<form method="post" action="register_action.php">
<fieldset>
<legend>Register</legend>
<p>
<label>Full name: </label> <input type="text" name="name" /> 
<br>
<label>Email: </label> <input type="email" name="email" /> 
<br>
<label>Password: </label> <input type="password" name="password1" />
<br>
<label>Confirm password: </label><input type="password" name="password2" />
<br>
<label>Date of birth (yyyy-mm-dd): </label><input type="date" name="date_of_birth" />
<br>
<label>Place of birth: </label><input type="text" name="place_of_birth" />
<br>
<label>Information: </label><textarea name="info" rows="5" cols="50"></textarea>
<br>
<label>Nationality: </label><input type="text" name="nationality" />
</p>
<p class="center"><input value="Register" type="submit" /></p>
</fieldset>
</form>

<footer>
<p>Copyright &copy; 2012 Sergio Luján Mora</p>
<p><a href="mailto:sergio.lujan%20at%20ua.es">Contact</a></p>
</footer>

</div>
</body>
</html>
