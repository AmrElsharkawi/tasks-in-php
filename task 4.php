task 1:-

<?php
$count = 5;
while($count <= 15)
{
  echo $count;
  echo "<br>" ;

  $count++;
}
?>

------------------------------------------
task 2:-

<?php  
$number=1233456;  
if($number%2==0)  
{  
 echo "$number is Even Number";   
}  
else  
{  
 echo "$number is Odd Number";  
}   
?>  
---------------------------------------------
task 3:-

<?php
$number = 324; 
if ($number > 0) 
{
    echo $number . " is a positive number";
} else if ($number < 0) 
{
    echo $number . " is a negative number ";
} else if ($number == 0) /
{
    echo "You have entered zero";
} else {
    echo " please enter a numeric value";
}
?>
----------------------------------------------
task 4:-

<?php  
$string = "AmrElsharkawy";  
$length = strlen($string);  
for ($i=($length-1) ; $i >= 0 ; $i--)   
{  
  echo $string[$i];  
}  
?>  