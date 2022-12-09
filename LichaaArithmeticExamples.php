<!DOCTYPE HTML>
<html> 
    <title><?php   
echo "LichaaArithmeticExamples.php";  
?> </title>
<head>  
<title>First PHP example</title> 
</head> 
<body>  
<?php   
echo "Moshe Lichaa";  
$Number = 100;
$Result = 0;
$Result = $Number + 50;
 echo '<p>$Result after addition = ', $Result, "<br />";
$Result = $Number / 4;
echo '$Result after division = ', $Result, "<br />";
$Result = $Number - 25;
echo '$Result after subtraction = ', $Result, "<br />";
$Result = $Number * 2;
echo '$Result after multipication = ', $Result, 
"<br />";
$Result = ++$Number;
echo '$Result after increment = ', $Result, "</P>";
?> 
</body> 
</html>

