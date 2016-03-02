<?php
include 'inc/nav.php';
$recipe_id = $_GET["recipe_id"];
$stmt = $db->prepare("SELECT * FROM recipes WHERE recipe_id=:recipe_id");
$stmt->bindValue(":recipe_id", $recipe_id);
$stmt->execute();
$recipe = $stmt->fetchObject();


//while ($recipe = $stmt->fetchObject()) {
?>
<script src='calendar.js'></script>
<div class='parallax-container valign-wrapper'>
    <div class='section no-pad-bot'>
        <div class='container'>
            <div class='row center'>
                <h4 class='header col s12 white-text'><?php echo $recipe->title; ?></h4>
            </div>
        </div>
    </div>
    <div class='parallax'><img src='img/recipe/<?php echo $recipe->image; ?>' alt=''></div>
</div>

<div class='container'>
    <div class='row'>

        <div class='col s12 m8'><br>
            <h5><?php echo $recipe->title; ?></h5>
            <p>
                Cooking time: <?php echo $recipe->cooktime; ?> minutes<br>
                Price: <?php echo $recipe->price; ?> DKK<br>
                Origin: <?php
                $stmt = $db->prepare("SELECT * FROM recipes INNER JOIN origins ON recipes.origin_id = origins.origin_id WHERE recipe_id=$recipe_id");
                $stmt->execute();
                $recipe = $stmt->fetchObject();
                echo $recipe->country;
                ?> <br>
                Rating: <span class='orange-text text-darken-1'><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i><i class='tiny material-icons'>grade</i></span><br>
            </p>
            <h5>Description</h5>
            <p><?php echo $recipe->description; ?></p>
            <div class='center'><a class="waves-effect waves-light btn-large orange darken-1"><i class="material-icons left">done</i>Book this class now</a></div><br>
        </div>






        <div class='col s12 m4'><br>
            <h5>Availability</h5>
           <section class='container'>
    <div class='cal'>
      <table class='cal-table'>
        <caption class='cal-caption'>
          <a href='#' class='prev'>&laquo;</a>
          <a href='#' class='next'>&raquo;</a>
          March 2016
        </caption>
        <tbody class='cal-body'>
          <tr>
            <td class='cal-off'><a href='#'>30</a></td>
            <td><a href='#'>1</a></td>
            <td><a href='#'>2</a></td>
            <td class='cal-today'><a href='#'>3</a></td>
            <td><a href='#'>4</a></td>
            <td><a href='#'>5</a></td>
            <td><a href='#'>6</a></td>
          </tr>
          <tr>
            <td><a href='#'>7</a></td>
            <td class='cal-selected'><a href='#'>8</a></td>
            <td><a href='#'>9</a></td>
            <td><a href='#'>10</a></td>
            <td><a href='#'>11</a></td>
            <td class='cal-check'><a href='#'>12</a></td>
            <td><a href='#'>13</a></td>
          </tr>
          <tr>
            <td><a href='#'>14</a></td>
            <td><a href='#'>15</a></td>
            <td><a href='#'>16</a></td>
            <td class='cal-check'><a href='#'>17</a></td>
            <td><a href='#'>18</a></td>
            <td><a href='#'>19</a></td>
            <td><a href='#'>20</a></td>
          </tr>
          <tr>
            <td><a href='#'>21</a></td>
            <td><a href='#'>22</a></td>
            <td><a href='#'>23</a></td>
            <td><a href='#'>24</a></td>
            <td><a href='#'>25</a></td>
            <td><a href='#'>26</a></td>
            <td><a href='#'>27</a></td>
          </tr>
          <tr>
            <td><a href='#'>28</a></td>
            <td><a href='#'>29</a></td>
            <td><a href='#'>30</a></td>
            <td><a href='#'>31</a></td>
            <td class='cal-off'><a href='#'>1</a></td>
            <td class='cal-off'><a href='#'>2</a></td>
            <td class='cal-off'><a href='#'>3</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
        </div>

    </div>
    
</div>
<?php
//}
include 'inc/footer.php';
?>
<?php
//$title = "Grilled Salmon";

