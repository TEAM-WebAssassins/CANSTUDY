<?php
$email = $_POST['email'];
$password = $_POST['password'];
$branch_type = $_POST['branch_type'];
$conn = new mysqli("127.0.0.1:3308","root","","canstudy");
if($conn->connect_error){
    die("Failed to connect :".$conn->connect_error);
} else {
    $stmt = $conn->prepare("select * from registration where email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data =$stmt_result->fetch_assoc();
        if($data['password'] === $password){
            {
                echo "<script> location.href='ISfacsel.html'; </script>";    
            }
             }
}
}
?>