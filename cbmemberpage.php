<?php
     session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Comic Book Manager Account Page</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Welcome To The Your Comic Book Manager Account Page</h1>
<p>This is your home page!</p>
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
if ($errors > 0) {
	
     echo "<p>Please use your browser's BACK button to return " .
          " to the form and fix the errors indicated.</p>\n";
}
else {
	    $SQLstring = "SELECT cbmember_id, first, last FROM $TableName ";
		$QueryResult = @mysql_query($SQLstring, $DBConnect);
		$Row = mysql_fetch_assoc($QueryResult);
        $CBmanagerID = $Row['cbmember_id'];
        $MemberName = $Row['first'] . " " . $Row['last'];
        echo "<p>Welcome back, $MemberName! Your ID number is $CBmanagerID.</p>\n";     
}
?>
<hr />

<p><a href='logout.php'>Log Out</a></p>
</body>
</html>

