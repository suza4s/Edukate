<?php
$Username = $_POST['Username'];
$Password= $_POST['Password'];

//Database Connection
$conn = new mysqli('localhost','root','','signin');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into Sign in(Username, Password)
     values(?,?)"
);
    $stmt->bind_param("ss",$Username, $Password );
    $stmt->execute();
    echo "Successfully signed in...";
    $stmt->close();
    $conn->close();
}

?>


