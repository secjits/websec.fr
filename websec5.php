<?php
$q1 = ${${passthru(whoami)}};
$x = 'phpinfo()';

$q=$q1;
$blacklist = implode (["'", '"', '(', ')', ' ', '`']);
$corrected = preg_replace ("/([^$blacklist]{2,})/i", 'correct ("\\1")', $q1);
echo "$q\r\n";
echo "$blacklist\r\n";
echo "$corrected\r\n";
?>
