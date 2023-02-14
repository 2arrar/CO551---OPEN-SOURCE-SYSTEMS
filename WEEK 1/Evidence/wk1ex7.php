<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
    $taxrate = 0.78;
	$gross = $hourlyrate * $hoursperweek;
    $aftertax = $gross * $taxrate;
	echo "This is gross: " . $gross . " This is after tax: " . $aftertax;
?>
</body>
</html>
