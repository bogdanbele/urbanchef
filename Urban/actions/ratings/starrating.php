
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