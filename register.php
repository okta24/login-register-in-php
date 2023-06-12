<?php
   $con=mysqli_connect("localhost","root","","user");
    
    $name = $_POST["name"];
    $age = $_POST["age"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $statement = mysqli_prepare($con, "INSERT INTO User (name, age, username, password) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "siss", $name, $age, $username, $password);
    $result=mysqli_stmt_execute($statement);
    
    mysqli_stmt_close($statement);
	if($result){
		return true;
	}else{
		return false;
	}
    
    mysqli_close($con);
?>