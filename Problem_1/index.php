
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
  <div class="container">
    <h2 class="text-center">User Data</h2>
    <table class="table table-striped table-hover table-bordered">
    <tr class="bg-dark text-white text-center">
    <th>S.No</th>
    <th>Name</th>
    <th>Roll_Number</th>
    <th colspan="2">Action</th>
    </tr>
    <?php
    $conn=mysqli_connect("localhost","root","","userlogin");
    if($conn->connect_error){
      die("Connection Failed:".$conn->connect_error);
    }
    $sql="SELECT S_No,_Name,Roll_Number from userdata";
    $result =mysqli_query($conn,$sql);
    if($result==false){
      echo "Query Failed";
    }
    else{
      if(mysqli_num_rows($result) > 0){
        while($row=$result-> fetch_assoc()){
          ?>
       <tr class="text-center">
       <td><?php echo $row['S_No']; ?> </td>
       <td><?php echo $row['_Name']; ?> </td>
       <td><?php echo $row['Roll_Number']; ?> </td>
       <td><button class="btn-danger btn"><img src="https://img.icons8.com/offices/30/000000/remove-user-male.png"/><a href="delete.php?id=<?php echo $row['S_No']; ?>" class="text-white">&nbsp;Delete</a></button></td>
       <td><button class="btn-success btn"><img src="https://img.icons8.com/offices/30/000000/change-user-female.png"/><a href="update.php?id=<?php echo $row['S_No']; ?>" class="text-white">Update</a></button></td>

       </tr>
    <?php
    }
    echo "</table>";
  }
else{
    echo "0 Result";
  }
}
$conn->close();
    ?> 
    </table>
    <div class="row justify-content-center">
    <form action="submit.php" method="POST">
		<div class="form-group">
			<h1>Add New User</h1>
		    <label for="">Name: &nbsp; <input type="text" name="Name"  placeholder="Name" required></label>
            <br>
			<label for="">Roll No: <input type="text" name="Roll_Number"  placeholder="Roll Number" required></label>
            <br />
            <button type="submit" name="done" class="btn btn-primary" ><img src="https://img.icons8.com/fluent/30/000000/add-user-male.png"/>&nbsp;Add</button>
         </div>
    </form>
    </div>
   



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>