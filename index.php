<?php
    require_once('./admin/functions.php');

    $planetCollection = getPlanetData($pdo);

    var_dump($planetCollection);

    $dummy_result = [
        "title" => "this is a title",
        "description" => "this is a description",
        "text" => "this is some text",
        "somevalues" => ["one,two,three,four"],
        "otherstuff" => "whatever"
    ];

    $my_csv = ["This,is,some,text"];

    $test = $dummy_result["somevalues"];

    $exploded = explode(",", $dummy_result["somevalues"][0]);

    var_dump($exploded);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/main.css">

    <title>The First Three Planets!</title>
</head>
<body>
    <main>
        <h1 class="hidden">The Inner Solar System</h1>
        <h2>The first three planets, closest to Sol:</h2>

        <!-- this is an inline php block -->
        <?php foreach ($planetCollection as $planet) {
            echo '<div class="planet">' .
                    '<img class="planet-img" src="' . $planet["IMGPATH"] . '" alt="planet image">' .
                    '<h4 class="planet-name">' . $planet["NAME"] . ': ' . $planet["ID"] . '</h4>' .
                    '<p class="planet-description">' . $planet["DESCRIPTION"] . '</p>' .
                '</div>';
        } ?>

        </div>

        <!-- end php block -->

        <!-- write out our php stuff here -->
        <!-- <h1 class="hidden">Test Explode!</h1>
        <p class="exploded-values">
            <span class="subhead">Exploded text follows:</span>
            <ul class="text-from-php">
            <?php foreach ($exploded as $text) {
                echo '<li class="text-item">' . $text . '</li>';
            } ?>
            </ul>
        </p> -->
    </main>
</body>
</html>