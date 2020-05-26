<?php
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'userlogin');

$id=$_GET["id"];

$q="DELETE from userdata where S_No=$id";
$result = mysqli_query($conn,$q);
if($result==false){
    echo "Query Failed";
}else{
    mysqli_query($conn,$q);
    header('location:index.php');
}


?>