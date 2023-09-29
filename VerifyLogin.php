<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Verify Comic Book Manager Login</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Comic Book Manager</h1>
<h2>Verify Manager Login</h2>
<?php
$errors = 0;
$DBConnect = @mysql_connect("localhost", "root", "");
if ($DBConnect === FALSE) {
     echo "<p>Unable to connect to the database server. " .
          "Error code " . mysql_errno() . ": " .
          mysql_error() . "</p>\n";
     ++$errors;
} 
else {
     $DBName = "cbmanager";
     $result = @mysql_select_db($DBName, $DBConnect);
     if ($result === FALSE) {
          echo "<p>Unable to select the database. " .
               "Error code " . mysql_errno($DBConnect) . 
               ": " . mysql_error($DBConnect) . "</p>\n";
          ++$errors;
     }
}
$TableName = "members";
if ($errors == 0) {
     $SQLstring = "SELECT cbmember_id, first, last FROM $TableName "
          . " where email='" . stripslashes($_POST['email']) . 
          "' and password_md5='" . 
          md5(stripslashes($_POST['password'])) . "'";
     $QueryResult = @mysql_query($SQLstring, $DBConnect);
     if (mysql_num_rows($QueryResult)==0) {
          echo "<p>The email address/password " . 
               " combination entered is not valid.</p>\n";
          ++$errors;
     }
     else {
          $Row = mysql_fetch_assoc($QueryResult);
          $CBmanagerID = $Row['cbmember_id'];
          $MemberName = $Row['first'] . " " . $Row['last'];
          echo "<p>Welcome back, $Name!</p>\n";     }
}
if ($errors > 0) {
     echo "<p>Please use your browser's BACK button to return " .
          " to the form and fix the errors indicated.</p>\n";
}
else {
	header("Location: cbmemberpage.php/");
}


?>
<p><a href='logout.php'>Log Out</a></p>
</body>
</html>

