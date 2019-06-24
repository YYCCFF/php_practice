<html>
<head>
<meta charset="utf-8">
<title>php23</title>
</head>

<body>
<?php
  $a = 90;
  print "あなたのテストの点数は $a 点です。<BR>\n";
  if($a > 80){                              //条件1のif文//
         if($a == 100){                     //条件2のif文// //条件1が満たされたとき条件2が実行される//
           print "100点満点です。<BR>\n";
        }else{                              //条件2のelse文//
           print "100点までもう少しです。<BR>\n";
        }
 }else{                                     //条件1のelse文//
     print "がんばりましょう。<BR>\n";
 }
?>
</body>
</html>
//p67//


