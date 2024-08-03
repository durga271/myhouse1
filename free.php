<?php
$fn=$_POST['fmm'];
$ln=$_POST['lmm'];
$add=$_POST['addr'];
$em=$_POST['em1'];
$nm=$_POST['nmm'];
$ys=$_POST['yrs'];
//mysql procedural
$con=mysqli_connect("localhost","root","","9pmMay2024");
if(!$con)
{die("connection not established"+mysqli_connect_error());}
else{

$qr="INSERT INTO `freecouncelling` (`sno`, `firstname`, `lastname`, `address`, `email`, `nationality`, `year`) VALUES ('', '".$fn."', '".$ln."', '".$add."', '".$em."', '".$nm."', '".$ys."');";
$row=mysqli_query($con,$qr);
echo $row;
if($row==1){
    echo "<script>alert('registration success');window.location='index.html';</script>";
}

}
?>
