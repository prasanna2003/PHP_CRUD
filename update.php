<?php
include 'connect.php';
$id = $_GET['updateid'];
$ALL = "select * from `crud` where id=$id";
$c = mysqli_query($conn,$ALL);
$row = mysqli_fetch_assoc($c);
$nm = $row['name'];
$em = $row['email'];
$pd = $row['password'];
if(isset($_POST['update']))	
{
	 $first_name = $_POST['name'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 $sql_query = "update `crud` set id = '$id', name = '$first_name',email= '$email',password='$password' where id='$id'";
     $result = mysqli_query($conn,$sql_query);
	 if (!$result) 	
   {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
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
        <form method = "post">  
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" class="form-control" name ="name"  value =<?php
              echo $nm;
              ?>
              required/>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="text" class="form-control" name= "email" requred/
              value =<?php
              echo $em;
              ?>>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Password</label>
              <input type="text" class="form-control" name="password" required/ 
              value =<?php
              echo $pd;
              ?>>
            </div>
            <button type="submit" class="btn btn-primary" name ="update">Submit</button>
          </form>
    </div>
  </body>
</html>