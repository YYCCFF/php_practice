
<html>
<head>
<meta charset="utf-8">
<title>php7</title>
</head>

//p38//
<body> 
<?php
  print "サーバーのドメイン名は\"" 
  .$_SERVER['HTTP_HOST']."\"です。<BR>\n"; //サーバーのドメイン名を取得する//
  
  print "スクリプトの相対パスは\""
  .$_SERVER['SCRIPT_NAME']."\"です。<BR>\n"; //このスクリプトの相対パスを取得する//
  
<from action="php8.php" method="POST"> //「php8」にPOSTを使ってデータを渡す//

私の名前は<input type="TEXT" name="MYNAME">

<input type="SUBMIT" value="確認">
?>
</body>
</html>





