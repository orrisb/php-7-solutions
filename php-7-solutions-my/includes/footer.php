<footer>
<p>&copy; <?php
    $startYear = 2018;
    $thisYear = date('Y');
    if ($startYear == $thisYear) {
        echo $startYear;
    } else {
        echo "{$startYear}&ndash;{$thisYear}";
    }
    ?> HEMP SMART Solutions</p>
</footer>
 