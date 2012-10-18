<html><head>
<?php
//Connect To Database
$hostname='srth12.db.9554581.hostedresource.com';
$username='srth12';
$password='Istenitc1';
$dbname='srth12';
$usertable='contactus';

mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database! Please try again later.');
mysql_select_db($dbname);



$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$comment=$_REQUEST["comment"];
$to="srth@istenitc.org";
$sub="Email from iste website from the user:";

mail($to,$sub.$name.$email,$comment) or die("cannot send the message to web master");


$query = "INSERT INTO contactus values('$name','$email','$comment',0)";
$result = mysql_query($query);
if($result) {
echo "Details saved, Thankyou for your feedback";
}

?>
</head>
<body>
<a href="http://www.istenitc.org/index.html">Home</a></body></html>