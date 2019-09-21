<?php
$collection = array();
for($i = 0; $i < 251; $i++){
	$ukey = strtoupper(substr(sha1(microtime() . $i), rand(0, 4), 16));
	if(!in_array($ukey, $collection)){ // you can check this in database as well.
		$collection[] = implode("-", str_split($ukey, 4));
	}
}
echo "<pre>";
print_r($collection);
?>