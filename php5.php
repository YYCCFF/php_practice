
<html>
<head>
<meta charset="utf-8">
<title>php5</title>
</head>

//p34～35//
<body>
<?php
$a = 1;
$b = &$b;
$a = 3;

$b = &$a;
$a = 5;
print "\$aの値は $a, \$bの値は $b<BR>\n" ;

$b = 100;
print "\$aの値は $a, \$bの値は $b\n" ;
?>
</body>
</html>




$b = 100
$a = &$b;

$b = 100
$a = &$b;
$b = 200

$b = 100
$a = &$b;
$a = 500

