<?php
function factorial($first, $second) {
	
	if ($second >= $first) {
		$callback = function($first) use (&$callback) {
		    if($first == 1) return 1;
		    return $callback($first - 1) * $first;
		};
		for($i=$first; $i <= $second; $i++){
			echo $callback($i).'<br />';
		}
    }
}
factorial(3, 6);