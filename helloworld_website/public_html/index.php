<?php

echo "<html><body>";
echo "HelloWorld from the php-apache container!";
$now = new DateTime();
echo "<br/>";
echo $now->format('Y-m-d H:i:s');
echo "</body></html>";

?>