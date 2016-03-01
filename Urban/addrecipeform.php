<!--**********-->
<!--MATTS CODE-->
<!--**********-->
<?php
include './inc/header.php';
?>
<div class="addrecipe">

    <h4>Add a recipe</h4>
    <form method="post" action="actions/recipe/addRecipe.php" enctype="multipart/form-data" >
        <p><input name="user_id" type="hidden" id="user_id" value="<?php echo $user_id; ?>"></p>

        <div class="left">
            <p><label for="title">Recipe Title:</label></p>
            <p> <input name="title" type="text" id="title"/></p>

            <p><label for="description">Description:</label></p>
            <p><textarea name="description" rows="10" cols="60"></textarea> </p>

            <p><label for="cooktime">Cook time:</label></p>
            <p>In minutes: <input name="cooktime" type="text" id="cooktime"/></p>

            <p><label for="price">Total cost price</label></p>
            <p><input name="price" type="text" id="price"/>DKK</p>

            <p><label for="image">Upload an image of the dish:</label></p>
            <p><input type="file" name="image"/></p>
        </div>

        <div class="right">

            <p><label for="origin_id">Select the country that the dish originates from: </label></p>
            <p>
                <select name="origin_id">
                    <!--******************-->
                    <!--RETRIEVE COUNTRIES-->
                    <!--******************-->
                    <?php
                    $stmt = $db->query("SELECT * FROM origins ORDER BY origin_id ASC");
                    while ($country = $stmt->fetchObject()) {
                        ?>
                        <option value="<?php echo $country->origin_id ?>"><?php echo $country->country ?></option>
                        <?php
                    }
                    ?>
                </select>
            </p>

            <p>How would you rate your dish?
                <!--*************************-->
                <!--POST STAR RATING FOR DISH-->
                <!--*************************-->
                <?php
                $stmt = $db->query("SELECT * FROM ratingtypes WHERE type_id >= 3 && type_id <= 7 ORDER BY type_id ASC ");
                while ($ratingtype = $stmt->fetchObject()) {
                    ?>
                    <input type="radio" name="ratings" value="<?php echo $ratingtype->type_id ?>"> <?php echo $ratingtype->rating ?>
                    <?php
                }
                ?>

            </p>

            <input type='submit' name='submit' value='Publish Recipe'>
        </div>
    </form>
</div>
<?php
include './inc/footer.php';
?>