<html>
<body bgcolor="#ABEBC6 ">
<center>
<font color="blue"><h2>KMCT MCA CRICKET TEAM -2023</h2></font>
<?php 
$name=["HARI","VYSHNAV","KARTHIK","ASWIN","MAANAS","MINHAJ","NIHAL","AKSHAY","NILEENA(C)","SREYA","VISHNU"];
$role=["LEFT-HAND FAST BATSMAN","WICKET KEEPER","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","FAST BOWLER","SPIN BOWLER","ALL ROUNDER","LEFT-HAND FAST BATSMAN","FAST BOWLER","ALL ROUND"];
echo '<font color="#F1948A  "><b>STARTING XI<b> <br><br><font>';
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>
<th>ROLE</th>";

for ($i=0;$i<11;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th><th>$role[$i]</th></tr>";
}
echo "</table>"
?>
</center>
</body>
</html>
