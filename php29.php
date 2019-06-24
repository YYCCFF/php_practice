<html>
<head>
<meta charset="utf-8">
<title>php29</title>
</head>

<body>

<?php  
  $b = 2;
  
  for($a = 0 ; $a < 5 ; $a++){
    if($b - $a == 0) //$b-$aの値が0になったらループを終了する//
      break;
    print"$b - $a = " . ($b - $a) ."<BR>\n";
    }
?>  

</body>
</html>
//p74//

