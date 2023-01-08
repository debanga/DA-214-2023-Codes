<!DOCTYPE html> 
<html>
<h1> My first PHP program </h1>
<p>
  <?php
    echo "Hello world\n";
  ?>
</p>



<?php
 
$var = 'Bob';
$Var = 'Joe';
echo "$var, $Var";      # outputs "Bob, Joe"

//$4site = 'not yet';     // invalid; starts with a number
$_4site = 'not yet';    // valid; starts with an underscore
$täyte = 'mansikka';    // valid; 'ä' is (Extended) ASCII 228.

echo "\n";
echo gettype($täyte);

$age = 37;
$stringTest = 'I am $age years old'; // output: I am $age years old
echo "<br>" . $stringTest;
$stringTest = "I am $age years old"; // output: I am 37 years old
echo "<br>" . $stringTest;

$conc = "is " .  "a "  .  "composed "  .  "string";
echo "<br>" . $conc; // output: is a composed string

$result = "6" + 7;
echo "<br>" . $result; // Output is 13

echo "<br>";
$x=99; // Integer Value
$y='99';// String value
// Compare $x and $y
if ($x == $y)
    echo 'Same content';
else
    echo 'Different content';

echo "<br>";
// Compare $x and $y
if ($x === $y)
    echo 'Data type and value both are same';
else
    echo 'Data type or value are different';

function calculate_overtime($shift) {
  $hours = $shift;
  return $hours > 8 ? 10 * 100: 8 * 100;
}

echo "<br>";
echo  calculate_overtime(7);

echo "<br>";
if (0)
{
 	echo "A";
}
elseif (1)
{
 	echo "B";

}
else {
	echo "C";
}

echo "<br>";
$num = 11;
$upper = 10;
$lower = 1;
 
do {
  echo ($num*$lower) . "\n";
  $lower++;
} while ($lower <= $upper);

echo "<br>";
$num = 11;
$upper = 10;
$lower = 1;
 
while ($lower <= $upper)
{
  echo ($num*$lower) . "\n";
  $lower++;
}

$a = 56; $b = 12; 
$c = $a / $b; 
echo "C: $c\n";
$d = "100" + 36.25 + TRUE;
echo "D: ". $d . "\n";
echo "D2: ". (string) $d . "\n";
$e = (int) 9.9 - 1;
echo "E: $e\n";
$f = "sam" . 25;
echo "F: $f\n";

$total = 100;
echo "Total amount of order is $total";
printf("Total amount of order is %s",$total);

if (!($fp=fopen("../../demo/marks.txt","w")))
  exit("Unable to open file for writing!");
echo fwrite($fp,"DA214-, 0\n");
echo fwrite($fp,"DA215-, 1\n");
fclose($fp);

echo "<br> Hello";
$fp=fopen("../../demo/marks.txt","r") or die("Unable to open file for reading!");
echo "<br>";
while(!feof($fp)) {
  echo fgets($fp) . "<br>";
}

fclose($fp);

// sudo chmod 777 ./
echo getcwd();
$fp= fopen("gfg.txt", "w");
fwrite($fp,"Hello World"); 

echo "<br>";
$words=array();
$words[]="Hello";
$words[]="World";
echo $words[0];

$words=array("hello","world");
$greet=$words;
echo $greet[0];

$numbers = range(1,10);
echo "<br>" . $numbers[3];

echo "<br>";
$DA214=array("instructor"=>"Debanga","course name"=>"DBMS");
echo $DA214['course name'] ."\t". $DA214['instructor'], "\n";

echo "<br>"; echo "10" . 1; 
echo "<br>"; echo "20" * 2;
?>
</html>
