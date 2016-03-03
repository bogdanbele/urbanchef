<?php

include ("../db.php");

$recipe_id = $_GET['recipe_id'];

$stmt = $db->prepare("SELECT image FROM recipes WHERE recipe_id=:recipe_id");
$stmt->bindValue(":recipe_id", $recipe_id);
$stmt->execute();
$recipe = $stmt->fetchObject();
unlink("../../img/" . $recipe->image);

$stmt = $db->prepare("DELETE FROM recipes WHERE recipe_id=:recipe_id");
$stmt->bindValue(":recipe_id", $recipe_id);
$stmt->execute();

echo "The image has been successfully deleted!<br>";
echo "Complete.";
