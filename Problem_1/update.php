<?php
 $conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'userlogin');


if(isset($_POST['done'])){

    $id=$_GET['id'];
    $Name=$_POST['Name'];
    $RollNo=$_POST['Roll_Number'];

    $q="update userdata set S_No=$id,_Name='$Name',Roll_Number='$RollNo' where S_No=$id";
    $query=mysqli_query($conn,$q);

    header('location:index.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">

    <title>Update</title>
  </head>
  <body>
  <div class="row justify-content-center">
    <form method="POST">
		<div class="form-group">
			<h1>Update User Data</h1>
		    <label for="">Name: &nbsp; <input type="text" name="Name"  placeholder="Name" required></label>
            <br>
			<label for="">Roll No: <input type="text" name="Roll_Number"  placeholder="Roll Number" required></label>
            <br />
            <button type="submit" name="done" class="btn btn-primary" ><img src="https://img.icons8.com/offices/30/000000/change-user-male.png"/>&nbsp;Update</button>
         </div>
    </form>
    </div>
    </div>
   



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

<!-- // $id=$_GET["id"];

// $q="DELETE from userdata where S_No=$id";
// $result = mysqli_query($conn,$q);
// if($result==false){
//     echo "Query Failed";
// }else{
//     mysqli_query($conn,$q);
//     header('location:index.php');
// }


?> -->