<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	$total=0;
		echo "Your bill till Date:";

       foreach ($amount as $key) {
       	//echo $key->totalBill;
       
       	$total += $key->totalBill;
       }

       echo "</br>";

       echo $total;
       
	?>

</body>
</html>