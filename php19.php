//p60//
<html>
<head>
<meta charset="utf-8">
<title>php19</title>
</head>

<body>
<?php
  //1.6歳以上//
  //2.身長130cm以上//
  //3.心臓の弱い方はご遠慮ください//
  (($age >= 6 && $height >= 130) || ($height >= 130 && $pg)) && $health ;
  
  //1.西暦が4で割り切れる//
  //2.ただし例外として、西暦が100で割り切れる年は除く//
  //3.さらに例外として、西暦が400で割り切れる場合は含める//
  ($a % 4 == 0 && $a % 100 != 0) || $a % 400 == 0 ;
?>
</body>
</html>


