<?php
    // array
    // $week = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

    // var_dump($week);

    // echo ('<pre>');
    // print_r($week);
    // echo ('</pre>');

    // echo $week[2];

    // echo count($week);

    // explode array

    #var_dump($week);

    // $week_s = "Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday";

    // var_dump($week_s);

    // var_dump(explode(",", $week_s));

    $f_quarter = ["January", "February", "March"];

    $s_quarter = ["April", "May", "June"];

    $t_quarter = ["July", "August", "September"];

    $year = array_merge($f_quarter, $s_quarter, $t_quarter);

    // rsort($year);

    // sort($year);

    array_push($year, 'October');

    array_push($year, 'November');

    array_push($year, 'December');

    array_pop($year);

    array_shift($year);

    array_unshift($year, 'Monday');

    var_dump($year);
?>