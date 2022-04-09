<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="dbklinikfitria";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// insert data
// $sql = "INSERT INTO dokter VALUES ('011', 'Maria Dyer')";
// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// select data
// $query="select * from dokter";
// $res=mysqli_query($conn,$query);
// while ($data= mysqli_fetch_array($res)){
    //echo $data['IDDokter']."-".$data['NamaDokter'];
//}
$conn->close();
?>