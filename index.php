<?php
$str="Для управления процессами выключения";
$from="windows-1251";
$to="iso8859-5";
echo convert_cyr_string($str, $from, $to);
echo "</br>";
echo "</br>";
$money1=66.144;
echo sprintf ("%01.1f<br>",$money1);
echo "</br>";
echo "</br>";
$st="Для управления процессами выключения";
$string=nl2br($st);
echo $string;
?>