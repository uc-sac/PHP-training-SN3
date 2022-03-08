

<?php
// check dates are valid or not

var_dump(checkdate(12,31,-400));
echo "<br>";
var_dump(checkdate(2,29,2003));
echo "<br>";
var_dump(checkdate(2,29,2004));
echo "<br><br>";


//format the date:

$date=date_create("2013-03-15");
echo date_format($date,"Y/m/d H:i:s");

?>