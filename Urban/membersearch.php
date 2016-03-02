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
    
    
    
function unhide(e)
{
    e.preventDefault();
    e.stopPropagation();
    if ( x == 1 ) 
    {
        var d = document.getElementById("login");
        d.className = "unhide";
        x = 0;
    }
    else if ( x == 0 )
    {
        var d = document.getElementById("login");
        d.className = "";
        x =1 ;
    }
}
    
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
  <h4><?php echo $apprentice->fname; ?></h4>
    <img class='responsive-img2' src='profileimg/<?php echo $apprentice->image; ?>' alt="<?php echo $apprentice->fname; ?> "/></a>
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
    <h4><?php echo $chef->fname; ?></h4>
    <img class='responsive-img2' src='profileimg/<?php echo $chef->image; ?>' alt="<?php echo $chef->fname; ?> "/></a>
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
  <h4><?php echo $all->fname; ?></h4>
    <img class='responsive-img2' src='profileimg/<?php echo $all->image; ?>' alt="<?php echo $all->fname; ?> "/></a>
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