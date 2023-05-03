<?php

include 'connect.php';
if(isset($_POST['submit']))	
{
	 $first_name = $_POST['name'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 $sql_query = "INSERT INTO crud (name,email,password)
	 VALUES ('$first_name','$email','$password')";
   $result = mysqli_query($conn,$sql_query);
	 if ($result) 	
	 {
    echo "sucessfully updated";
    include 'display.php';
    exit();
  } 
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5" >
    <button class="btn btn-primary myl-5"><a href="./display.php" class="text-light">Display</a></button>
        <form method = "post">  
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" class="form-control" name ="name" required/>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="text" class="form-control" name= "email" requred/>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Password</label>
              <input type="text" class="form-control" name="password" required/>
            </div>
            <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
          </form>
    </div>
  </body>
</html>