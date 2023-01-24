
<html>
<body>
<center>
<h2>Kerala State Electricity Board (KSEB)</h2>
<form method="post" action="#">
Consumer id   : <input type="number" name="id"><br><br>
Name          : <input type="text" name="name"><br><br>
Unit consumed : <input type="number" name="units"><br><br>
<input type="reset">
<input type="submit">
<br>
<hr>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$id=$_POST["id"];
$name=$_POST["name"];
$units=$_POST["units"];
echo "<h3>Kerala State Electricity Board (KSEB)</h3>";
echo"Consumer id    :".$id."<br>";
echo"Consumer Name  :".$name."<br>";
echo"Consumer Units :".$units."<br>";
if($units<100)
{
$amt=$units*3;
}
elseif($units>100 && $units<=200)
{
$amt=$units*4;
}
elseif($units>200 && $units<=300)
{
$amt=$units*5;
}
else
{
$amt=$units*5;
}
echo"<h4> Total :rs.".($amt)."</h4><br>"; }
?>
<hr>
</center>
</body>
</html>
