<?php
    #for
    #while
    #do while

    #for each

    $week = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

    echo (count($week) . '<br>');

    foreach( $week as $i => $w ) {
        echo $i . ' ' . $w . '<br>' ;
    }


    $student = [
        'name' => 'Lorem',
        'course' => 'Web Design',
        'duration' => '9 Months'
    ];

    foreach( $student as $key => $value ) {
        echo $key . ' ' . $value . '<br>' ;
    }