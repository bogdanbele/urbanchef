<?php

include ("../db.php");
include ("../checked_logged_in.php");

$recipe_id = $_POST['recipe_id'];
$title = $_POST['title'];
$description = $_POST['description'];
$cooktime = $_POST['cooktime'];
$price = $_POST['price'];
//$image = $_POST['image'];
$origin_id = $_POST['origin_id'];
//$type_id = $_POST['type_id'];

echo "Recipe_id : $recipe_id <br>";
echo "Title : $title <br>";
echo "Description : $description<br>";
echo "Cooking time : $cooktime <br>";
echo "Price :  $price <br>";
echo "Origins_id : $origin_id <br>";
//  echo "Type_id : $type_id  <br>";
//echo "Ratings_id : $ratings <br>";
/* UPLOAD IMAGE */
//$uploaddir = '../../img/recipe/';
//$uploadfile = $uploaddir . basename($_FILES['image']['name']);
//echo '<pre>';
//if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
//    echo "File is valid, and was successfully uploaded.\n";
//} else {
//    echo "Possible file upload attack!\n";
//}
//added users recipes
/* Edit image */
//if($_FILES['image']['error']==4){
//    find path tooldimage
//    delete it 
//    upload new
//    update databde
//}
if ($_FILES['image']['error'] == 4) {

    $sql = "UPDATE recipes "
            . "SET title=:title, description=:description, cooktime=:cooktime,"
            . " price=:price, origin_id=:origin_id"
            . " WHERE recipe_id =:recipe_id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(":title", $title);
    $stmt->bindValue(":description", $description);
    $stmt->bindValue(":cooktime", $cooktime);
    $stmt->bindValue(":price", $price);
    $stmt->bindValue(":origin_id", $origin_id);
    $stmt->bindValue(":recipe_id", $recipe_id);
//$stmt->bindValue(":image", $_FILES['image']['name']);

    print_r($stmt);
    $stmt->execute();
} else {
    $uploaddir = '../../img/recipe/';
    $deletefile = @unlink($uploaddir . basename($_FILES['image']['name']));


    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }

    $sql = "UPDATE recipes "
            . "SET title=:title, description=:description, cooktime=:cooktime,"
            . " price=:price, image=:image, origin_id=:origin_id"
            . " WHERE recipe_id =:recipe_id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(":title", $title);
    $stmt->bindValue(":description", $description);
    $stmt->bindValue(":cooktime", $cooktime);
    $stmt->bindValue(":price", $price);
    $stmt->bindValue(":origin_id", $origin_id);
    $stmt->bindValue(":recipe_id", $recipe_id);
    $stmt->bindValue(":image", $_FILES['image']['name']);
    print_r($stmt);
    $stmt->execute();
}
echo "The recipe has been updated successfully.<br>";
echo "Complete!";

