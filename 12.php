<html>
<head>
<center>
<title> electricity bill</title>
</center>
</head>
<body style="background-image: url('Logo.png');">
<h1>ELECTRICITY BILL</h1>
<form method="post" action="#">
Consumer ID : <input type="number" name="id"><br><br>
Name : <input type="text" name="name"><br><br>
Unit Consumed : <input type="number" name= "units"><br><br>
<input type="submit">
<input type="reset">
<hr>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$id=$_POST['id'];
$name=$_POST['name'];
$units=$_POST['units'];
echo"<h3> KSEB </h3>";
echo "Consumer ID : ".$id."<br><br>";
echo "Consumer Name : ".$name."<br><br>";
echo "Units Consumed : ".$units."<br><br>";
}
if($units<=100)
{
$amt=$units*3;
}
else if ($units>100 && $units<=200)
{
$amt=$units*4;
}
echo "<b>BILL AMOUNT : ".$amt." Rupees only/-";
?>
<hr>
</body>
</html>
