<html>
<head>
<meta charset="utf-8">
<title>php27</title>
</head>


<body>
<?php
  $shiki = array('spring' => '春',
                 'summer' => '夏',
                 'autumn' => '秋',
                 'winter' => '冬');
  
  foreach($shiki as $key => $a){       //$shikiで配列を指定する $keyと$aで取得した要素を添字を格納するための変数である。//
    print "$key は日本語で $a です。<BR>\n";
    }
?>
</body>
</html>
//p71//

