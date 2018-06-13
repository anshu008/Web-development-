<?php

$servername="localhost";
$username="root";
$password="anshu@7";
$database="B";
$conn =new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
  die("connection failed:" . $conn->connect_error);
}

echo "connected successfully";
$sql ="CREATE DATABASE B";

if($conn->query($sql) === TRUE)
{
  echo "Database created";
}
else
{
  echo "error; " . $conn->error;
}
$sql = "CREATE TABLE Persons (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP
  )";

if ($conn->query($sql) === TRUE) {
  echo "Table Persons created successfully";
}
else
{
  echo "Error creating table: " . $conn->error;
}
$sql = "INSERT INTO Persons (firstname, lastname, email)
VALUES ('anshu', 'setia', 'anshusetia1000@gmail.com')";
if($conn->query($sql)===TRUE)
{
echo"new record";
}
else
{
echo "error"; "<br>" .$conn->error;
}
$sql = "INSERT INTO Persons (firstname, lastname, email)
VALUES ('aashu', 'setia', 'aashusetia@gmail.com')";
if($conn->query($sql)===TRUE)
{
echo" again new record";
}
else
{
echo "error"; "<br>" .$conn->error;
}



$conn->close();

?>

