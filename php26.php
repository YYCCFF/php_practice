<html>
<head>
<meta charset="utf-8">
<title>php26</title>
</head>


<body>

<?php
print "1×1から9×9までの九九<BR>\n";

  for($j = 1; $j <= 9; $j++){
    for($i = 1; $i <= 9; $i++){
      print "$j × $i = " . ($j * $i) . "<BR>\n";
    }
  }
?>

</body>
</html>
//p69//

