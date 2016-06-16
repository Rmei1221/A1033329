<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="jquery-1.12.4.min.js"></script>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<pre class="c" name="code">
<?php
$mailFiler = fopen("string.txt", "r");
class PostOffice{
    function mailFiler(){
    }
}		while (!feof($mailFiler)) {
		$value = fgets($mailFiler);
		print "$value";
		};      
		fclose($mailFiler);

echo "<br>";
echo "<br>";

	function mailRegex(){
	}
	$input = "大家好this這是is一個a有趣php的字串test";
	$cleaned = preg_replace("/[^A-Za-z0-9 ]/", "", $input);
 	echo $cleaned;     

echo "<br>";
echo "<br>";

$road = fopen("road.txt", "r");

    function splitroad(){
    }
   while (!feof($road)) {
    $value = fgets($road);
    print "$value";
    };      



    
    fclose($road);




?>


</body>
</html>
