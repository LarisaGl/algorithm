
<?php
$x = rand(0,100);
echo "Число ".$x."<br>";

$a=1;
$b=1;

while (true) {
	if ($a>$x) {
		echo "Задуманное число НЕ входит в числовой ряд"."<br>";
		break;
	}
    else {
        if ($a==$x) {
            echo "Задуманное число входит в числовой ряд"."<br>";
            break;
        }
            else {
               	$c=$a;
      			echo $c."<br>";
      			echo $a."<br>";
      			$a=$a+$b;
      			echo $a."<br>";
      			echo $b."<br>";
      			$b=$c;
      			echo $b."<br>";
      			echo $c."<br>";
     		 }
    }
}

?>