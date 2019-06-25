<html>
<head>
<meta charset="utf-8">
<title>php47</title>
</head>


<body>
<?php
  function print_arg_arr(){
    $c = func_get_args($a);  //引数が配列で返されます//
    foreach($c as $d){
      print $d ;
    }
  }
  
  print_arg_arr(1,2,3,4);
  print "<BR>\n";
  print_arg_arr('1','2','3','4');
  print "<BR>\n";
  print "//p96//";
?>
</body>
</html>
