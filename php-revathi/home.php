<?php
    include('sections/header.php');
    include('sections/menu.php');
    include('sections/slider.php');
    include('sections/card.php');

    echo("<div class='container box-container'>");
    for($x = 1; $x <= 3; $x++) {
        echo("<div class='box'></div>");
    }
    echo('</div>');
    include('sections/footer.php');
?>