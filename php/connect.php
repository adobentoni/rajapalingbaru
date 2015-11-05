<?PHP
// Create connection
$server = "localhost";
$user = "root";
$pass = "";

$dbname ="rajadomino";
$con = new mysqli($server, $user, $pass, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 


?>
