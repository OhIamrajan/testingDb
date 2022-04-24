<?php
$x=$_POST['firstname'];
$y=$_POST['lastname'];
$servername='localhost';
$username='root';
$password='';
$dbname='db1';
//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);
}
echo "Connected Successfully";
$sql = "INSERT INTO `user` (`fname`,`lname`) VALUES ('$x','$y')";

if($conn-> query($sql)==TRUE){
    echo "New Record Created Succesfully";
} else {
    echo "Error: ".$sql."<br>".$conn->error;
}
$sql = "SELECT * FROM user";
$query = mysqli_query($conn,$sql);
$nums = mysqli_num_rows($query);
while($res = mysqli_fetch_array($query)){
    echo $res['firstname']."<br>";
}

$conn->close();

?>