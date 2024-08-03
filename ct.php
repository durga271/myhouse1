<?php
$sb=$_GET['sb'];
//mysql procedural
$con=mysqli_connect("localhost","root","","9pmMay2024");
if(!$con)
{die("connection not established"+mysqli_connect_error());}
else{

$qr="select * from allcategories where subject='".$sb."'";
$row=mysqli_query($con,$qr);
?>
<table border="2px"  class="table">
<thead style="background-color:gray;"><th>subject</th><th>Location</th><th>degree</th></thead>
<tbody>
<?php
while($data=mysqli_fetch_assoc($row)){
echo "<tr><td>".$data['subject']."</td><td>".$data['location']."</td><td>".$data['degree']."</td></tr>"; 
}
}
?>
</tbody>
</table>
