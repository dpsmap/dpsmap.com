<?php

$getMap = function ($tableName) use ($link) {

    $query = "SELECT * FROM `{$tableName}`";
    $queryResult = mysqli_query($link, $query);
    if (mysqli_num_rows($queryResult) > 0) {
        while ($row = mysqli_fetch_assoc($queryResult)) { ?>

            <div class="img-card">
                <div class="img-card-title">
                    <?php echo $row['map_title'] ?>
                </div>
                <div class="img-container">
                    <img src="<?php echo $row['map_image'] ?>" alt="<?php echo $row['map_title'] ?>" />
                </div>
            </div>
            <!-- card end -->
        <?php }
    }
};

$getMapMultiple = function ($tableName, $version) use ($link) {

    $query = "SELECT * FROM `{$tableName}` WHERE `version` = '{$version}'";
    $queryResult = mysqli_query($link, $query);
    if (mysqli_num_rows($queryResult) > 0) {
        while ($row = mysqli_fetch_assoc($queryResult)) { ?>

            <div class="img-card">
                <div class="img-card-title">
                    <?php echo $row['map_title'] ?>
                </div>
                <div class="img-container">
                    <img src="<?php echo $row['map_image'] ?>" alt="<?php echo $row['map_title'] ?>" />
                </div>
            </div>
            <!-- card end -->
<?php }
    }
};
