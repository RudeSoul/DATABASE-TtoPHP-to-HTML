<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fingerprint";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT id, fingerprint FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    // output data of each row
    
    while($row = mysqli_fetch_array($result)){

        //make a loop here like while loop with the condition returned {} and make the jump to another details or any page
        echo "<tr><td>".$row["fingerprint"]."</td></tr>";
    }
// }
    echo "</table>";
} else {
    echo "Nothing on database";
}

$conn->close();
?> 

</body>
</html>