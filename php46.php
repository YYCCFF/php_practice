<html>
<head>
<meta charset="utf-8">
<title>php46</title>
</head>


<body>
<?php
  
  function print_arg_val(){
    $a = func_num_args();          //引数の数は3です//
    for($i = 0; $i < $a; $i++){
      $b = func_get_arg($i);       //0から数えてi番目の引数の値を返します//
      print $b;
    }
  }
  
  print_arg_val('A','B','C');
  
print "<BR>\n";
print "//p96//";
?>
</body>
</html>
