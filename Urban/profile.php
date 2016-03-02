<?php
include './inc/nav.php';

echo $user_id;

$email = $_SESSION["email"];
$stmt = $db->prepare('SELECT * FROM users WHERE user_id=:user_id'); 

$stmt->bindValue(':user_id', $user_id);
        $stmt->execute();


$userdata = $stmt->fetchObject();

 ?>
<div class='container'>
<br>
             
      
    
   
    
    
    
    <div class='row'>
<?php echo $_SESSION["email"]; ?> <br> 



<?php echo $userdata->fname; ?> <br> 


<?php echo $userdata->lname; ?> <br> 


<img style="max-height: 300px; max-width: 300px;" class='responsive-img' src='profileimg/<?php echo $userdata->image; ?>' alt="<?php echo $userdata->fname; ?>" /><br> 



<?php echo $userdata->description; ?> <br> 



<?php echo $userdata->address; ?> <br> 



    </div></div>

<?php

include './inc/footer.php';