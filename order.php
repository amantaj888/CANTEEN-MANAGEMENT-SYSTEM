<?php
$servername="localhost";
$username="root";
$password="";
$dbname="cms";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("error");

}
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];
$g=$_POST['g'];
$h=$_POST['h'];
if($c=="paratha"){
	$i=40;
}
elseif($c=="mysore bajji"){
	$i=40;
}
elseif($c=="idly"){
	$i=30;
}
elseif($c=="dosa"){
	$i=30;
}
elseif($c=="dum chicken"){
	$i=200;
}
elseif($c=="pastrey"){
	$i=50;
}
elseif($c=="birthday cake"){
	$i=400;
}
elseif($c=="ice cream"){
	$i=30;
}
elseif($c=="deserts"){
	$i=50;
}
elseif($c=="samosa"){
	$i=20;
}
elseif($c=="beverages"){
	$i=30;
}
elseif($c=="chips"){
	$i=40;
}
elseif($c=="noodles"){
	$i=60;
}
elseif($c=="mocktail"){
	$i=60;
}
$i=$i*$e;

$sql="INSERT INTO `vig`(`Your Name`, `Your Number`, `Your Order`, `Additional Food`, `How Much`, `Date And Time`, `Your Address`, `Your Message`, `Total cost`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
if($conn->query($sql)==true){
    echo "yes";
}
else {
    echo "no";
}
// $conn->close();

 

?>
