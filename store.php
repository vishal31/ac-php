<?php



$server = 'localhost';
$user   = 'root';
$pass   = '';
$db     = 'ac-assignment';


$conn = mysqli_connect($server, $user, $pass, $db);


$place = $_POST['place'];
$lat   = $_POST['lat'];
$lng   = $_POST['lng'];
$utc_offset_minutes = $_POST['utc_offset_minutes'];



$SQL = "INSERT INTO geo (id, place_name, latitude, longitude, utc_offset_minutes) VALUES(null, '$place', $lat, $lng, $utc_offset_minutes)";

$result = mysqli_query($conn, $SQL);

if($result) {

echo "Inserted successfully $place $lat $lng";

}else {
    echo "Error: " . $SQL . "<br>" . mysqli_error($conn);
}







?>