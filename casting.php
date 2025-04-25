<!DOCTYPE html>
<html>
<body>

<pre>
<?php
$a = 3;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 
</pre>Ketika mengubah nilai Boolean menjadi string, ia akan mendapatkan nilai "1", dan ketika mengubah nilai NULL menjadi string, ia akan diubah menjadi string kosong""</p>

</body>
</html>