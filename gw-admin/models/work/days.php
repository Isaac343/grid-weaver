<?php
function build_calendar($month,$year,$dateArray) {

	$daysOfWeek = array('D','L','M','X','J','V','S');

	$firstDayOfMonth = mktime(0,0,0,$month,1,$year);

	$numberDays = date('t',$firstDayOfMonth);

	$dateComponents = getdate($firstDayOfMonth);

	$monthName = $dateComponents['month'];

	$dayOfWeek = $dateComponents['wday'];

	$calendar = "<table class='table table-bordered table-outline table-vcenter text-nowrap card-table'>";
	$calendar .= "<caption>$monthName $year</caption>";
	$calendar .= "<thead><tr>";

	foreach($daysOfWeek as $day) {
		$calendar .= "<th>$day</th>";
	}

	$currentDay = 1;
	$calendar .= "</tr></thead><tbody><tr>";

	if ($dayOfWeek > 0) {
		$calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
	}

	$month = str_pad($month, 2, "0", STR_PAD_LEFT);

	while ($currentDay <= $numberDays) {
		if ($dayOfWeek == 7) {
			$dayOfWeek = 0;
			$calendar .= "</tr></tbody><tr>";
		}
		$currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
		$date = "$year-$month-$currentDayRel";
		$calendar .= "<td class='day' rel='$date'>$currentDay</td>";
		$currentDay++;
		$dayOfWeek++;
	}

	if ($dayOfWeek != 7) {
		$remainingDays = 7 - $dayOfWeek;
		$calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";
	}
	$calendar .= "</tr>";
	$calendar .= "</table>";
	return $calendar;
}

?>
