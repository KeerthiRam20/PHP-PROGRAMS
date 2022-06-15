<?php

// PHP code to differentiate between
// intdiv() and floor()

$dividend = -19;
$divisor = 3;

echo intdiv($dividend, $divisor) ."\n".
			floor($dividend/ $divisor);

?>
