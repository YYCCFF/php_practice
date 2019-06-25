<html>
<head>
<meta charset="utf-8">
<title>php54</title>
</head>


<body>
<?php
  $str = "<U><B>PHP</B></U>" ;
  $new_str = strip_tags($str,"<U>"); //($str,"<U>")の$strは削除の対象となるコードだ。"<U>"は削除したくないタグ//
  
  print $str;
  print "<BR>\n";
  print $new_str;

print "<BR>\n";
print "//p112//";
?>

</body>
</html>
