<p>&copy;
<?php
    $startYear = 2016;
    $thisYear = date('Y');
    if ($startYear == $thisYear) {
        echo $startYear;
    } else {
    echo "{$startYear}&ndash;{$thisYear}";
    }
?>
 Eggert Axels</p>