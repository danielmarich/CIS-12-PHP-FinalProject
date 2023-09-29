<?php
     session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Comic Book Manager</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Welcome To The Comic Book Manager</h1>
<p>Welcome to the Comic Book Manager Web site where you can create a free account to manage your personal comic book collection. If you are a new member, please <a href="registration.php">click here</a> to go to the new member registration page.</p>
<hr />
<h3>Returning Comic Book Manager User Login</h3>
<form method="POST" action="VerifyLogin.php?<?php
          echo SID; ?>">
<p>Enter your email address: 
     <input type="text" name="email" /></p>
<p>Enter your password:
     <input type="password" name="password" /></p>
<p><em>(Passwords are case-sensitive and 
     must be at least 6 characters long)</em></p>
<input type="reset" name="reset" 
     value="Reset Login Form" />
<input type="submit" name="login" value="Log In" />
</form>
<hr />

</body>
</html>

