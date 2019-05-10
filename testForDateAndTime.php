
<?php
$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now: '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
//echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";...


$t=time();
echo($t . "<br>");
echo(date("Y-m-d",$t));
echo "<br>";
echo $t;
echo "<br>";

date_default_timezone_set('Africa/Johannesburg');
echo date('H:i:s', time());
?>


<?php
echo(strtotime("now") . "<br>");
echo(strtotime("3 October 2005") . "<br>");
echo(strtotime("+5 hours") . "<br>");
echo(strtotime("+1 week") . "<br>");
echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
echo(strtotime("next Monday") . "<br>");
echo(strtotime("last Sunday"));
?>