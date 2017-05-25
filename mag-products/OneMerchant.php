<?php
/*"Y-m-d H:i:s"

	echo date("Y-m-d H:i:s");
	*/
    $dt = new DateTime($date, new DateTimeZone("America/New_York"));
    $dt->setTimezone(new DateTimeZone("UTC"));
	echo $dt->format("Y-m-d H:i:s");
	
	

?>