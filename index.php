<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);


echo "<p> Task 3 : comparison<br>";
if ((strtotime($date) - strtotime($tar)) < 0) {
	echo "The past.";
}elseif ((strtotime($date) - strtotime($tar)) > 0) {
	echo "The Future.";
}else {
	echo "Oops..";
}


echo "<p>search and position of / <br>";
$pos = array();
$pstn = -1;
while (($pstn = strpos($date, "/", $pstn+1)) !== false) {
    $pos[] = $pstn;
}
$result = implode(' ', $pos);
print_r($result);

echo "<p>no of words in date string<br>";
echo str_word_count($date);
echo " <p>length of date string <br>";
echo strlen($date);
echo "<p>ASCII value of first character in date string <br>";
echo ord($date);
echo "<p>Last two characters in date string <br>";
echo substr($date,-2);
echo "<p>Break string and delimit it <br>";
$strarray = explode("/", $date);
print_r($strarray);
echo "<br>";
$newstring = implode(' ', $strarray);
print_r($newstring);
echo "<p>Finding leap year<br>";
echo "<p>foreach loop<br>";
foreach ($year as $leap) {
	switch ((($leap % 4 == 0) && ($leap % 100 != 0)) || ($leap % 400 == 0)) {
		case 'true':
			echo "True ";
			break;
		default:
			echo "False ";
			break;
	}
}
echo "<p>for loop<br>";
$leap2 = count($year);
for ($i=0; $i < $leap2; $i++) {
	switch ((($year[$i] % 4 == 0) && ($year[$i] % 100 != 0)) || ($year[$i] % 400 == 0)) {
		case 'true':
			echo "True ";
			break;
		default:
			echo "False ";
			break;
	}	
}


?>