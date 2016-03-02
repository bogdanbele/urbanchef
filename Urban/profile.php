<?php
include './inc/nav.php';

echo $user_id;

$email = $_SESSION["email"];
$stmt = $db->prepare('SELECT * FROM users WHERE user_id=:user_id'); 

$stmt->bindValue(':user_id', $user_id);
        $stmt->execute();
echo $email;


$userdata = $stmt->fetchObject();

 echo $_SESSION["email"]; ?>


<?php echo $userdata->fname; ?>
<?php echo $userdata->lname; ?>
<?php echo $userdata->image; ?>
<?php echo $userdata->description; ?>
<?php echo $userdata->address; ?>









<!--<?php echo $_SESSION["lname"]; ?>
<?php echo $_SESSION["image"]; ?>
<?php echo $_SESSION["description"]; ?>
<?php echo $_SESSION["address"]; ?>-->

<?php

include './inc/footer.php';