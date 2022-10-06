<?php

function getPeriod($startdate, $endDate) {
    $period = new DatePeriod(
        new DateTime($startdate),
        new DateInterval('P1D'),
        new DateTime($endDate)
    );

    return $period;
}

function getThursdaysCount ($startDate, $endDate) {
    $period = getPeriod($startDate, $endDate);
    $i = 0;

    foreach ($period as $value) {
        $dayname = date('D', strtotime($value->format('Y-m-d')));
        if ($dayname == 'Thu') {
            $i++;
        }
    }

    return  $i;
}


$startdate = "2020/05/01";
$endDate = "2022/06/10";
$daysCount = getThursdaysCount($startdate, $endDate);

echo $daysCount;
