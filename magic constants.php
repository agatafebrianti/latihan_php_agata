<!DOCTYPE html>
<html>
<body>

<?php
class Fruits {
  public function myValue(){
    return __CLASS__;
  }
}
$durian= new Fruits();
echo $durian->myValue();
?>
 
</body>
</html>