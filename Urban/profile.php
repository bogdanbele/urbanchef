<?php
include './inc/nav.php';

echo $user_id;

$email = $_SESSION["email"];
$stmt = $db->prepare('SELECT * FROM users WHERE user_id=:user_id'); 

$stmt->bindValue(':user_id', $user_id);
        $stmt->execute();


$userdata = $stmt->fetchObject();

 echo $_SESSION["email"]; ?> <br> 



<?php echo $userdata->fname; ?> <br> 


<?php echo $userdata->lname; ?> <br> 



<?php echo $userdata->image; ?> <br>  


<?php echo $userdata->description; ?> <br> 



<?php echo $userdata->address; ?> <br> 









<!--<?php echo $_SESSION["lname"]; ?>
<?php echo $_SESSION["image"]; ?>
<?php echo $_SESSION["description"]; ?>
<?php echo $_SESSION["address"]; ?>-->

<?php

include './inc/footer.php';