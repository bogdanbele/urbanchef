<?php

include ("../../inc/db.php");

$description = $_POST['description'];
$recipe_id = $_POST['recipe_id'];
$user_id = $_POST['user_id'];
$type_id = $_POST['type_id'];

echo "Desc : $description <br>";
echo "U-id : $user_id <br>";
echo "r-id : $recipe_id <br>";
echo "t-id : $type_id <br>";

$stmt = $db->prepare("INSERT INTO "
        . "ratings (description, recipe_id, user_id, type_id) "
        . "VALUES "
        . "(:description, :recipe_id, :user_id, :type_id)");

$stmt->bindValue(":description", $description);
$stmt->bindValue(":recipe_id", $recipe_id);
$stmt->bindValue(":user_id", $user_id);
$stmt->bindValue(":type_id", $type_id);

$stmt->execute();
echo "Complete";
