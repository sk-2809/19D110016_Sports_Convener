<?php
session_start();
header('index.php');

$conn = mysqli_connect('localhost','root');
// if($conn){
//     echo "Connected!!";
// }else{
//     echo "NOT Connected!!";
// }

mysqli_select_db($conn,'userlogin');

$Name = $_POST['Name'];
$RollNo = $_POST['Roll_Number'];

$q ="select * from userdata where _Name= '$Name' && Roll_Number ='$RollNo' ";
// $x="SELECT 
// Roll_Number, 
// COUNT(Roll_Number)
// FROM
// userdata
// GROUP BY Roll_Number
// HAVING COUNT(email) > 1;";

$result = mysqli_query($conn,$q);
if($result==false){
    echo "Query Failed";
}else{
    if(mysqli_num_rows($result)==1){
        echo "Same Data EXIST!!";
    }else{
        $qy = "insert into userdata(_Name , Roll_Number) values ('$Name','$RollNo')";
    mysqli_query($conn,$qy);
    header('location:index.php');

    }
}
?>