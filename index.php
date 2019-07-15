<?php
$localhost="localhost";
$user="kishore";
$pass="kishore";
$db=mysqli_connect($localhost,$user,$pass);
$search=$_POST['search'];
$sql="select music from music1 where name='$search'";
$result=mysqli_query($sql,$db);
if($rows=mysqli_fetch_assoc($result)){
    echo '<audio controls=" ">
        <source src="data:muisc/mp3;base64,'.base64_encode($rows["music"]).'"type="audio/mpeg"></source>
        </audio>';
}
else{
    echo 'song not found';
}
?>