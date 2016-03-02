<?php
include './inc/nav.php';




$stmt = $db->prepare('SELECT * FROM users WHERE user_id=:user_id'); 

$stmt->bindValue(':user_id', $_GET["user_id"]);
        $stmt->execute();


$userdata = $stmt->fetchObject();

 ?>
<div class='parallax-container valign-wrapper'>
    <div class='section no-pad-bot'>
      <div class='container'>
        <div class='row center'>
          <h4 class='header col s12 white-text'>Hi, <?php echo $userdata->fname; ?> <?php echo $userdata->lname; ?> </h4>
        </div>
      </div>
    </div>
    <div class='parallax'><img src='background12.jpg' alt=''></div>
  </div>

<div class='container'>
<br>
   
 <div class='row'>
     <div class="col s12 m6">
         
         <p><b>E-mail:</b> <?php echo $userdata->email; ?></p>
         <p><b>Address:</b> <?php echo $userdata->address; ?></p>
         <p><b>Description:</b> <?php echo $userdata->description; ?></p>

</div>
   <div class="col s12 m6">  
<img class='responsive-img' src='profileimg/<?php echo $userdata->image; ?>' alt="<?php echo $userdata->fname; ?>" /><br> 

     </div>





    </div></div>

<?php

include './inc/footer.php';