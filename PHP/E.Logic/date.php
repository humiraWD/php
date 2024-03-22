<?php
echo date("d-m-Y h:i:s A e");
echo "<hr/>";
echo "April 31, 2017: <br/>".(checkdate(4, 31, 2017) ? 'Valid' : 'Invalid')."<br/>";
echo "February 29, 2016: <br/> ".(checkdate(02, 29, 2016) ? 'Valid' : 'Invalid')."<br/>";
echo "February 29, 2015: <br/> ".(checkdate(02, 29, 2015) ? 'Valid' : 'Invalid')."<br/>";
echo "<hr/>";

echo "<hr/>";
echo "Today is ".date("F d, Y")."<br/>";
// Today is April 20, 2017
echo "Today is ".date("l")."<br/>";
// Today is Thursday
$weekday = date("l");
$daynumber = date("jS");
$monthyear = date("F Y");
printf("Today is %s the %s day of %s<br/>", $weekday, $daynumber, $monthyear);
echo "<br/>".date("jS F Y"). "<br/>";
echo "Today is ".date("l d s F Y")."<br/>";
echo "<hr/>";

echo "The time is ".date("h:i:s")."<br/>";
echo "The time is ".date("h:i:sa")."<br/>";
echo "The time is ".date("H:i:s")."<br/>";
echo "<hr/>";

//finding local time: Method1
date_default_timezone_set('Asia/Dhaka');
print_r(gettimeofday());
echo "<hr/>";

$time = gettimeofday();
$UTCoffset = $time['minuteswest'] / 60;
printf("Server location is %d hours west of UTC.", $UTCoffset);
echo "<hr/>";

print_r(getdate());
echo "<hr/>";
$a=getdate();
echo "Todate is {$a["weekday"]}, {$a["yday"]}th day of the year, {$a["year"]}";
echo "<hr/>";

echo "Unix time: ".time();
echo "<hr/>";

echo date("F d, Y H:i:s", 1516631700);
echo "<hr/>";

echo mktime(20,35,00,1,22,2018);//converts a time into unix time

echo "<hr/>";
$name="Shahed Nizam";
$bd=mktime(00,00,00,1,1,1999);
echo "The Unix time Birthdate of $name is: {$bd}<br/>";
$today=time();
echo "Unix time of current moment: $today<br/>";
$age=$today-$bd;
$y= date("Y", $age)-1970;//24
$m= date("m", $age)-1;//24
$d= date("d", $age)-1;//24

$b= date("H:i:s", $age);
echo "Age of $name is $y years $m months $d days, Time:$b.<br/>";


//LOcalization(Language,Date setting, Number Format, Currency Format)
//finding local time: Method2
echo "<hr/>";
setlocale(LC_TIME, "bn_BD.utf8");
echo strftime("%A, %d %B, %Y %H:%M:%S");
$tickets = 2;
$departure_time = 1276574400;
$return_time = 1277179200;
$cost = 123444350.99;
?>
<hr/>
Numero di biglietti: <?= $tickets; ?><br />
Orario di partenza: <?= strftime("%d %B, %Y", $departure_time); ?><br />
Orario di ritorno: <?= strftime("%d %B, %Y", $return_time); ?><br />

<?php
$number = 1234.56;
setlocale(LC_MONETARY,"en_US");
echo sprintf('%01.2f', $number);
echo "<br/>";
$lastmod = date("F d, Y h:i:sa", getlastmod());
echo "Page last modified on $lastmod";
echo "<br/>Unix time to normall time..........<br/>";
$lastday = mktime(0, 0, 0, 2, 1, 2018);
printf("There are %d days in February 2018.", date("t",$lastday));
echo "<hr/>";
// strtotime: to determine the precise date of some specific number of days
$futuredate = strtotime("+45 days");
echo date("F d, Y", $futuredate);
echo "<hr/>";
$date = new DateTime("21 January 2018 21:55");
echo $date->format("Y-m-d h:i:sa");
echo "<hr/>";
$date = new DateTime();//current datetime
$date->setDate(2018,5,25);
echo $date->format("F j, Y");
echo "<hr/>";
$date = new DateTime();
$date->setTime(20,55);
echo $date->format("h:i:s a");

echo "<hr/>";
$date = new DateTime("May 25, 2018 00:33");
$date->modify("+27 hours");
echo $date->format("Y-m-d h:i:s");

echo "<br/>";
$terminationDate = new DateTime('1999-01-01');
$todaysDate = new DateTime('today');
$span = $terminationDate->diff($todaysDate);
$m=$span->format('%m');
echo "Your subscription ends in $m months!";
?>
