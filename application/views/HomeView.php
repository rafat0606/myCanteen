<?php

// echo "helooo";
// echo "Records from database<br>";

foreach ($records as $rec) {
	echo $rec->id."    ".$rec->username."    ".$rec->phone."   ".$rec->password."<br>";
}

?>