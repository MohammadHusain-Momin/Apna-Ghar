<?php

$db = mysqli_connect('localhost', 'root', 'Momin@786', 'Apna_Ghar');

if ($db) {
    if (isset($_POST['submit'])) {
    $name = $_POST['txt-name'];
    $email = $_POST['txt-email'];
    $phone = $_POST['txt-phone'];
    $password = $_POST['txt-password'];
    $copassword = $_POST['txt-Copassword'];


    if ($password == $copassword) {
      
        $qu = "INSERT INTO Register (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";

       
        $result = mysqli_query($db, $qu);

       
        if ($result) {
            header("Location: Login.php"); 
        } else {
            echo "already registered !please try Login";
        }
    } else {
        echo "Passwords do not match!";
    }
} 
}
else {
    echo "Database Not Connected";
}
?>
