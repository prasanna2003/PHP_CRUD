<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Display</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="./Dataentry.php" class ="text-light">Add(+)</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col" >Operation</th>
    </tr>
  </thead>
  <tbody>
    <?Php
    $data = "SELECT * from `crud`";
    $rs = mysqli_query($conn,$data);
    if($rs)
    {
        while( $row = mysqli_fetch_assoc($rs))
        {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $password = $row['password'];
            echo'<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$password.'</td>
            <td>
            <button class ="btn btn-primary"><a href="update.php?updateid='.$id.'" class = "text-light">Update</a></button>
            <button class ="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class = "text-light">Delete</a></button>
            </td>
            </tr>';
            
        }
    }
    else
    {
        echo "not found";
    }
    ?>
</table>
    </div>
</body>
</html>