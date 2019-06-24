<html>
<head>
<meta charset="utf-8">
<title>php21</title>
</head>

<body>
<?php
  $s = 65;
  $t = 70;
  print "あなたの得点は $s 点です。<BR>\n";
  print "平均点は $t 点です。<BR>\n";
  
  if($s < $t){
    print "平均まであと".($t - $s)."点です。<BR>\n";
    print "頑張りましょう！<BR>\n";
 }else{
    print "よくできました！<BR>\n";
 }
?>
</body>
</html>
//p65//

