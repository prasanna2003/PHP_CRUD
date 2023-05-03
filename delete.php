<?php
include 'connect.php';
if($_GET['deleteid'])
{
    $delid= $_GET['deleteid'];
    $sql = "delete from `crud` where id =$delid";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        include 'display.php';
    }
    else
    {
        echo mysqli_error();
    }
}
?>