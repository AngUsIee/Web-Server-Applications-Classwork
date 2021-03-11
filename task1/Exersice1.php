<!DOCTYPE html>
<html>
<head>
	<title>Exercises</title>
</head>
<body>

	<?php
  $a = "Birmingham";
  $b = "City";
	echo "$a  $b.<br>";
// 
  $x = 15;
  $y = 8;
  $result = $x+$y;
  echo "$x+$y=$result";
  echo '<br>';
  $result = $x-$y;
  echo "$x-$y=$result";
  echo '<br>';
  $result =$x*$y;
  echo "$x*$y=$result";
  echo '<br>';
  $result =$x/$y;
  echo "$x/$y=$result";
  echo '<br>';
  $result =$x%$y;
  echo "$x%$y=$result";
  echo '<br>';
// 
  $a=8;
  echo "Value is now $a.<br/>";
  $a+=2;
  echo "Add 2.<br/>Value is now $a.<br/>";
  $a-=4;
  echo "Subtract 4.<br/>Value is now $a.<br/>";
  $a*=5;
  echo "Multiply by 6.<br/>Value is now $a.<br/>";
  $a/=3;
  echo "Divide by 3.<br/>Value is now $a.<br/>";
  $a+=1;
  echo "Increment value by one.<br/>Value is now $a.<br/>";
  $a-=1;
  echo "Decrement value by one.<br/>Value is now $a.<br/>";
// 
  $name = "Harry";
	$age = 28;

	var_dump($name);
	echo "<br/>";
	echo $name;
	echo "<br/>";
	var_dump($age);
	echo "<br/>";
	echo "Null";
	echo "<br/>";
// 
  $around = 'around';

	echo "What goes " .$around. " comes " .$around. ".<br>";

$whatis = "code02";
echo "Value is ". gettype($whatis)."<br/> \n";


$whatis = 0.2;
echo "Value is ". gettype($whatis)."<br/> \n";


$whatis = true;
echo "Value is ". gettype($whatis)."<br/> \n";


$whatis = 02;
echo "Value is ". gettype($whatis)."<br/> \n";


$whatis = null;
echo "Value is ". gettype($whatis)."<br/> \n";


	?>
  
</body>
</html>