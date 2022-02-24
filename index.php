<html>
<head>

<center><font size="6">Welcom to PHP!</font></center>
<br><br>

</head>

<body>
    
<br>
<body bgcolor="#cccccc">
<center>This text will be centered.</center>

<?php
date_default_timezone_set('Asia/Taipei');

$today = date('Y/m/d H:i:s');
echo "<center>Date:$today</center>
<?php<br><br>";

echo '<center><font style="color:#FF0001;">Hallo PHP!!<br></font></center>';
echo '<center>today is a good day!</center>';
echo '<center><font style="color:#0000C6;">Hallo PHP!!<br></font></center>';

?>
</body>

</html>