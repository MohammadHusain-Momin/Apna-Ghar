<?php
// Database connection
$db = mysqli_connect('localhost', 'root', 'Momin@786', 'Apna_Ghar');

if ($db) {
    // Check if form is submitted
        if (isset($_POST['submit'])) { 
        // Get form data
            $title = mysqli_real_escape_string($db, $_POST['title']);
            $price = mysqli_real_escape_string($db, $_POST['price']);
            $description = mysqli_real_escape_string($db, $_POST['description']);
            $location = mysqli_real_escape_string($db, $_POST['location']);
            $forSaleOrRent = mysqli_real_escape_string($db, $_POST['forSaleOrRent']);
            $sqft = mysqli_real_escape_string($db, $_POST['sqft']);
            $bedrooms = mysqli_real_escape_string($db, $_POST['bedrooms']);
            $bathrooms = mysqli_real_escape_string($db, $_POST['bathrooms']);

        // Handle file upload
        $image = $_FILES['image']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($image);
        $uploadOk = 1;

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES['image']['tmp_name']);
        if ($check === false) {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size (limit to 2MB)
        if ($_FILES['image']['size'] > 2000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk === 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            // If everything is ok, try to upload file
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                // Insert property into database
                $sql = "INSERT INTO properties (title, price, description, location, forSaleOrRent, sqft, bedrooms, bathrooms, image) 
                        VALUES ('$title', '$price', '$description', '$location', '$forSaleOrRent', '$sqft', '$bedrooms', '$bathrooms', '$target_file')";
                
                if (mysqli_query($db, $sql)) {
                    echo "Property added successfully.";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($db);
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
} else {
    echo "Database connection failed.";
}
?>
