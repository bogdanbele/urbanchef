<!--**********-->
<!--MATTS CODE-->
<!--**********-->
<?php
include './inc/nav.php';
?>
<div class="addrecipe" style="width: 100%; margin-left: 30%">

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

            <p><label for="origin_id">Select the country that the dish originates from: </label></p>
            <p>
                <select sname="origin_id" style="display: block;">
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


            <input type='submit' name='submit' value='Publish Recipe'>
        </div>

        <div class="right">


        </div>
    </form>
</div>
<?php
include './inc/footer.php';
?>