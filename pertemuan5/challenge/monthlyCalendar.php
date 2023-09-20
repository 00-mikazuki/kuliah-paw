<?php 

	function display_month($month, $year) {
		$first_day_of_month = mktime(0, 0, 0, $month, 1, $year);
		$first_day_of_week = date('w', $first_day_of_month);
		$days_in_month = date('t', $first_day_of_month);
		$month_name = date('F', $first_day_of_month);

		$this_month = (int)date('m');
		$this_year = (int)date('Y');
		$today = 0;
		if($this_year == $year && $this_month == $month) {
			$today =  date('d');
		}

		echo "<h3>$month_name $year</h3>";
		echo "
		<table>
			<tr>
				<th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th>
			</tr>
		";

		echo "<tr>";
		if($first_day_of_week > 0) {
			echo "<td colspan=\"$first_day_of_week\">&nbsp;</td>";
		}

		$day = $first_day_of_week;
		for ($day_of_month=1; $day_of_month <= $days_in_month; $day_of_month++) {

			if($day_of_month == $today) {
				$col = "<td style=\"background-color: yellow;\">$day_of_month</td>";
			} else {
				$col = "<td>$day_of_month</td>";
			}

			if($day == 0) {
				echo "<tr>$col";
			} else if($day == 6) {
				echo "$col</tr>";
				$day = -1;
			} else {
				echo $col;
			}
			$day++;
		}

		echo "</table>";

	}
?>

 