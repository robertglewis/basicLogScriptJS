<?php
$sSERVERNAME = 'localhost';
$sUSER = 'username';
$sPASSWORD = 'password';
$sDATABASE = 'tableName';

 //open connection to mysql db
$con=mysqli_connect($sSERVERNAME,$sUSER,$sPASSWORD,$sDATABASE)or die("Error " . mysqli_error($connection));
$usercheck = $_POST['name'];
$pWord = $_POST['pwd'];
$qry = "SELECT * FROM table1 WHERE username='".$usercheck."' AND password='".$pWord."'";

$result=mysqli_query($con,$qry) or die(mysql_error());
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

if($count==1) {
    echo 'True';
 }
else {
    echo 'False';
}

mysqli_close($con);
?>
