<?php
$db = new PDO("mysql:host=localhost;dbname=urbanchef", "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

// MEMES

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST['password'];
$description = $_POST["description"];
$address = $_POST["address"];
$zip_id = $_POST["zip_id"]; 
$right_id = $_POST["right_id"];


$stmt = $db->prepare("INSERT INTO users (fname, lname, email, password, image, description, address, zip_id, right_id)"." VALUES
    (:fname, :lname, :email, :password, :image, :description, :address, :zip_id, :right_id) 
    ");

     $uploaddir = "images/";
$uploadfile = $uploaddir. basename($_FILES["image"]["name"]);

echo '<pre>';
if (move_uploaded_file ( $_FILES["image"]["tmp_name"] , $uploadfile  )) {
    echo "file is valid. \n";
}
else { 
    echo "possible errors \n";
}
$stmt->bindValue(':fname', $fname);
$stmt->bindValue(':lname', $lname);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':password', $password);
$stmt->bindValue(':image', $_FILES["image"]["name"]);
$stmt->bindValue(':description', $description);
$stmt->bindValue(':address', $address);
$stmt->bindValue(':zip_id', $zip_id);
$stmt->bindValue(':right_id', $right_id);
$stmt->execute();
echo"works";
header("Location: admin.php");
