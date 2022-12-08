<?php
session_start();
include('connection.php');

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM users WHERE id ='$id' ";
    $result = mysqli_query($con, $query);

    if($result)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        header('Location: listuser.php');
        die();
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        header('Location: listuser.php');
        die();      
    }    
}
