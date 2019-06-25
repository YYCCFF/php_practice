<html>
<head>
<meta charset="utf-8">
<title>php39</title>
</head>


<body>
<?php
  function getmenu($a = 'Drink'){
    print $a ; 
  }
  
  getmenu('Tea');
  getmenu();
 //getmenu()に$bが参照し渡されます。//
 
?>
</body>
</html>
//p88//

