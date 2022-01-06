<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro to PHP</title>
</head>
<body>
    

    <?php 
        //this is where php starts <?php
        //this is how to close php

        $user = 'Revathi';
    ?>
    <!-- this is where php ends -->
    <h1>Hello <?php echo $user ?> </h1>

    <!-- commenting in php -->

    <?php
        //comment 1
        #comment 2
        /* 
            multi line comment
        */

        #variable

        //string, integer, float, boolean, null, array, object

        #define variable

        $name = 'Lorem';
        $age = 30;
        $mStatus = true; #will return 0 or 1
        $avg = 85.6;
        $wAdd = null;

        // echo gettype($name) . '<br>';
        // echo gettype($age) . '<br>';
        // echo gettype($mStatus) . '<br>';
        // echo gettype($avg) . '<br>';
        // echo gettype($wAdd) . '<br>';

        // var_dump($name, $age, $mStatus, $avg, $wAdd);

        // echo ($name . ' ' . $age . ' ' . $mStatus . ' ' . $avg . ' ' . $wAdd);

        var_dump(is_string($name));


        var_dump(isset($name1));

    ?>
    
</body>
</html>