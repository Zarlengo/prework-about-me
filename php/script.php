<?php
    $x = 0;
    $y = 0;
    $colorArray = array("white", "white", "red", "white", "white", "orange", "white", "white", "blue", "white", "white", "green", "white", "white");
    for ($star = 0; $star < 1000; $star++) {
        $r_n = rand(500, 22490)/100 . "%";
        if ($r < 60) { $r = $r * 3;} elseif ($r < 120) { $r = $r * 2;}
        $r = $r_n . "%";
        $t = rand(0, 36000)/100 . "%";
        $x = $r * cos($t) + 225;
        $y = $r * sin($t) + 225;
        $randColor = rand(0, count($colorArray) - 1);
        echo "<s style='top:" . $y . "px;left:" . $x . "px;background-color:" . $colorArray[$randColor] . ";'></s>";
    }
?>