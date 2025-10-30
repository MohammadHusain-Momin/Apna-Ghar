<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Momin@786";
$dbname = "property_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $property_id = $_POST['property_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bargain_price = $_POST['bargain_price'];

    $sql = "INSERT INTO buyers (property_id, name, email, phone, bargain_price) VALUES ('$property_id', '$name', '$email', '$phone', '$bargain_price')";

    if ($conn->query($sql) === TRUE) {
        
        echo "<script>
        alert('Thank you for contacting us! We will get back to you shortly.');
        window.location.href = 'property-list.php';
      </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
