<?php
     session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Comic Book Manager Registration Page</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Comic Book Manager</h1>
<h2>New Member Registration Page</h2>
<p>Please complete the form to
create an account. Returning users, please click here to go to the login page.</p>
<hr />
<h3>New Account Registration</h3>
<form method="POST" action="register.php?<?php
          echo SID; ?>">
<p>Enter your name: First 
     <input type="text" name="first" />
Last: 
     <input type="text" name="last" /></p>
<p>Enter your email address: 
     <input type="text" name="email" /></p>
<p>Enter a password for your account:
     <input type="password" name="password" /></p>
<p>Confirm your password:
     <input type="password" name="password2" /></p>
<p><em>(Passwords are case-sensitive and 
     must be at least 6 characters long)</em></p>
<input type="reset" name="reset" 
     value="Reset Registration Form" />
<input type="submit" name="register" value="Register" />
</form>
<hr />

</body>
</html>

