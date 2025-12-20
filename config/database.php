<?php
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "DigitalGarden";
try{
$connection = mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
}
catch(err){
    echo "no connection with the database ";
}
// $sql = "insert into users (userName) values('zakarialafhiel')";
// try {
//     $fakeData = mysqli_query($connection,$sql);
// }
// catch(err){
//     echo "this data is not exist";
// }
// if($fakeData){
//   while($row = mysqli_fetch_assoc ($fakeData)){
//     echo "username  : " .$row["userName"];
//   }
// }
// try {
//     mysqli_query($connection,$sql);
// }
// catch (err){
//    echo err;
// }
    
?>
