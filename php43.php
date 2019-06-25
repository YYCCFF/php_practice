<html>
<head>
<meta charset="utf-8">
<title>php43</title>
</head>


<body>
<?php
$a = 1;
  function ShowNum(){
    global $a;  //グローバル変数$aのスコープ//
    print $a;
  }
ShowNum();
?>
//p92//
</body>
</html>

