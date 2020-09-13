<?php

if(isset($_GET['id']))
{
    $servername="localhost";
    $username="root";
    $password="root";
    $db="message";
    $id=$_GET['id'];
    $conn=mysqli_connect($servername, $username,$password,$db);
    $message="Select * from updates where receiver_id=$id";
    $result=mysqli_query($conn,$message);
    if ($result)
    { http_response_code(200);
    }
    else
    {http_response_code(500);
    exit();
    }
    $sq ="select username from user where id=$id";
    $op=mysqli_querry($conn,$message);
    $pname=mysqli_fetch_assoc($op);
    while($data=mysqli_fetch_assoc($result))
    {  

        echo $data['receiver_id'].".".$pname["username"].":".$data['message']." @".$data["date_time"]."<br>";
    }
} 
else 
{echo "id required";
}
echo "<a href='dashboard.html'>returnback</a>";
?>
