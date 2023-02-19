kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk<?php
echo "hello world!";
echo "<br>";
$fname = "Bryanlee";
echo $fname;
echo "<br>";
#if statement
$number = 6;

if($number %  2 == 0 || $number % 5 == 0){
    echo  "The $number is even.";
    echo "<br>";
}
#if else
$number = 9;
if($number %  2 == 0 && $number % 5 == 0){
    echo  "The $number is even";
}
else
{
    echo "The $number is odd.";
}
echo "<br>";
#switch
$level = 2;
switch($level){
    case 1:
        echo "youre playing in easy mode";
        break;
    case 2:
        echo "youre playing in advance mode";
        break;
    case 3:
        echo "youre playing in hard mode";
        break;
        default;
       echo "level not found!!!";
       
}
echo "<br>";
#switch2
$favcolor = "yellow";
switch  ($favcolor) {
    case "red":
        echo "your favorite color is red";
        break;
    case "yellow":
        echo "your favorite color is yellow";
        break;
    case "white":
        echo "your favorite color is white";
        break;
        default:
        echo "your fovorite is not available!";

}
echo "<br>";
$x = 100;
 while($x <= 200){
    echo  "The number is: $x <br>";
    $x+=10;
 }

 $var = 5;
 if($var > 8) {
    echo $var;
 }

 else {
    echo "The condition did not match";
 }
echo "<br>";
 define("laptops", "hp, lenova and asus");
 echo laptops;
 echo "<br>";

 $i=1;
 while($i <=10){
    echo "$i * # </br>";
    $i++;
 }
 "<br>";
 for($i=1; $i<=5; $i+=2) {
 for($j=1; $j<=$i; $j+=2)
 {
    echo '*';
 }
 echo '<br>';
}

class fruit {
    public $name;
    public $color;
    function set_name ($name){
        $this->name = $name;
    }
    function get_name (){
        return $this->name;
    }
}

$apple = new fruit();
$Banana = new fruit();
$Mango = new fruit();
 
$apple->set_name("apple");
$Banana->set_name("Banana");
$Mango->set_name("Mango");
echo $apple->get_name();
echo"<br>";
echo $Banana->get_name();
echo "<br>";
echo $Mango->get_name();

echo "<br>";
$name= "Brian";
echo "hello " . "$name";

?>