<?php

$counter = fopen("countlog.rtf","r");
$count = fgets($counter,1000);
fclose($counter);
$count=$count + 1;
echo "You have visited this page $count times";

$counter = fopen("countlog.rtf","w");
fwrite($counter, $count);
fclose($counter);
