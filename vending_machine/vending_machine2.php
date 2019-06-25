<html>
<head>
<meta charset="utf-8">
<title>vending machine</title>
</head>


<body>
<?php  
  $m = $_POST['money'];
  $r = $m - 120;
  $kouka = array(500,100,50,10,1);
  
  if($r < 0){
    print "お金が足りません。<BR>\n";
 }elseif($m > 1000){
    print "1000円以内のお金を入れてください。<BR>\n";
 }elseif($r == 0){
    print "ありがとうございました。おつりはありません。<BR>\n";
 }else{
    print "ありがとうございました。おつりは $r 円 です。<BR><BR>\n";
    print "硬貨の枚数は次のとおりです。<BR>\n";
    $n=0;
    while($kouka[$n]>0){
      print $kouka[$n]. "円玉" . (int)($r / $kouka[$n])."枚
      <BR>\n";
      $r = $r % $kouka[$n];
      $n ++ ;
    }
 }
?>
<BR><A href="vending_machine1.html">お金を入れ直す</A>  
</body>
</html>


