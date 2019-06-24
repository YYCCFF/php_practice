<html>
<head>
<meta charset="utf-8">
<title>php30</title>
</head>

<body>
<?php  
  $b = 1;
  
  for($a = 0 ; $a < 4 ; $a++){
    if($b + $a == 2) //$a+$bの値が2のときはループの始まりに戻ります。//
      continue;
    print"$a + $b = " . ($b + $a) ."<BR>\n";
    }
?>  
</body>
</html>
//p75//

