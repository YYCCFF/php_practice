<html>
<head>
<meta charset="utf-8">
<title>php22</title>
</head>

<body>
<?php
  $num = 1000;
  print "$num は";
  
  if(0 <= $sum && $num <= 9){
    print "1桁の数です。<BR>\n";
 }elseif(10 <= $sum && $num <= 99){
    print "2桁の数です。<BR>\n";
 }elseif(100 <= $sum && $num <= 999){
    print "3桁の数です。<BR>\n";
 }else{
    print "4桁以上です。<BR>\n";
    }
?>
</body>
</html>
//p66//

