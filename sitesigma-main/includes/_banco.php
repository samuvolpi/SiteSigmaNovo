<?php
include_once './includes/_banco.php';
?>

<?php
$servername = "localhost";
$database = "sitesigma";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>



