<?php

if(isset($_GET['id']))
{    $servername="localhost";
    $username="root";
    $password="kumaar78";
    $db="message";
    $id=$_GET['id'];
    $conn=mysqli_connect($servername, $username,$password,$db);
    if (!$conn)
    {
    die("error".$conn->connect_error);
    }
    $message=$conn->prepare("Select * from updates where receiver_id=?");
    $message->bind_param('i',$id);
    if($message->execute())
    {http_response_code(200);
    }

    else
    {http_response_code(500);
    exit();
    }
    $result=$message->get_result();
    while($data=$result->fetch_assoc())
    { $rcv=$data['receiver_id'];
    	$sq =$conn->prepare("select username from user where id=?");
    	$sq->bind_param('i',$rcv);
    	$sq->execute();
    	$op=$sq->get_result();
    	$op_2=$op->fetch_assoc();
         echo $data['receiver_id']."." .$op_2['username']. ":".$data['message']."<br>";
    }
}

else
{http_response_code(400);
echo "id required";
}
echo "<a href='http://localhost/Login/login.html'>return to login page</a>";
?>
