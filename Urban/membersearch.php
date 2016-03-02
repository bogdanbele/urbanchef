<?php
include './inc/nav.php';


$stmt = $db->prepare('SELECT * FROM users WHERE right_id=:right_id');
$stmt->bindValue(":right_id", 2);
$stmt->execute();

$stmt2 = $db->prepare('SELECT * FROM users WHERE right_id=:right_id');
$stmt2->bindValue(":right_id", 3);
$stmt2->execute();

$stmt3 = $db->prepare('SELECT * FROM users');
$stmt3->execute();

?>

<script>
    var x = 1;
    
    
    function prehide() {
            var a = document.getElementById("apprentice");
        a.className = "hiddendiv";
           var b = document.getElementById("chef");
        b.className = "hiddendiv";
    }
    
    function hide(){
        var a = document.getElementById("apprentice");
        a.className = "hiddendiv";
           var b = document.getElementById("chef");
        b.className = "hiddendiv";
           var c = document.getElementById("chefapprentice");
        c.className = "hiddendiv";
    }
    
    
    function unhidediv(selected){
    var a = document.getElementById(selected);
        a.className = "";
    }
    
 window.onload = prehide;
</script>


<button type="button" onclick="hide(); unhidediv('apprentice');">Apprentice</button>
<button type="button" onclick="hide(); unhidediv('chef');">Chef</button>
<button type="button" onclick="hide(); unhidediv('chefapprentice');">All members</button>





<div id='apprentice'>
<div class='container'>
    <div class='topPad'>
<?php
$counter = 1;
$modulo = 0;
while ($apprentice  = $stmt->fetchObject()) {
      if ($modulo == 0 ) {
         echo '<div class="row">';
    }
    else {}
    ?>
     <div class='col s12 m4 forceheight ' >
   <a href='memberprofile.php?user_id=<?php echo $apprentice->user_id; ?>'><h4><?php echo $apprentice->fname; ?></h4></a>
    <img class='responsive-img2' src='profileimg/<?php echo $apprentice->image; ?>' alt="<?php echo $apprentice->fname; ?> "/></a>
           <br><?php echo substr($apprentice->description, 0, 150); ?>
     <?php
    $counter = $counter + 1;
    $modulo = $counter%3; 

    ?></div>
  <?php 
    if ($modulo == 1 ) {
    echo '</div>';
    }
    else {}
}
?>
</div>
</div>
</div>
</div>

<div id='chef'>
<div class='container'>
    <div class='topPad'>
<?php
$counter = 1;
$modulo = 0;
while ($chef  = $stmt2->fetchObject()) {
      if ($modulo == 0 ) {
         echo '<div class="row">';
    }
    else {}
    ?>
    <div class='col s12 m4 forceheight ' >
        <a href='memberprofile.php?user_id=<?php echo $chef->user_id; ?>'><h4><?php echo $chef->fname; ?></h4></a>
    <img class='responsive-img2' src='profileimg/<?php echo $chef->image; ?>' alt="<?php echo $chef->fname; ?> "/>
        <br><?php echo substr($chef->description, 0, 150); ?>
     <?php
    $counter = $counter + 1;
    $modulo = $counter%3; 

    ?></div>
  <?php 
    if ($modulo == 1 ) {
    echo '</div>';
    }
    else {}
}
?>
</div>
</div>
</div>
</div>

<div id='chefapprentice'>
<div class='container'>
    <div class='topPad'>
<?php
$counter = 1;
$modulo = 0;
while ($all  = $stmt3->fetchObject()) {
      if ($modulo == 0 ) {
         echo '<div class="row">';
    }
    else {}
    ?>
     <div class='col s12 m4 forceheight ' >
  <a href='memberprofile.php?user_id=<?php echo $all->user_id; ?>'><h4><?php echo $all->fname; ?></h4></a>
    <img class='responsive-img2' src='profileimg/<?php echo $all->image; ?>' alt="<?php echo $all->fname; ?> "/></a>
           <br><?php echo substr($all->description, 0, 150); ?>
     <?php
    $counter = $counter + 1;
    $modulo = $counter%3; 

    ?></div>
  <?php 
    if ($modulo == 1 ) {
    echo '</div>';
    }
    else {}
}
?>
</div>
</div>
</div>
</div>






<?php


include './inc/footer.php';