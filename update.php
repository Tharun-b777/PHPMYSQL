<?php

if(isset($_GET['id']))
{
    $servername="localhost";
    $username="root";
    $password="kumaar78";
    $db="message";
    $id=$_GET['id'];
    $conn=mysqli_connect($servername, $username,$password,$db);
    $message="Select * from updates where receiver_id=$id";
    $result=mysqli_query($conn,$message);
    http_response_code(200);
    while($data=mysqli_fetch_assoc($result))
    {
        http_response_code(200);
        echo $data['receiver_id'].":".$data['message']."<br>";
    }
}
echo "<a href='dashboard.html'>returnback</a>";
?>
