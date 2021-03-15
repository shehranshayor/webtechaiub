<?php
class MyCircle {
 // Properties
 private $radius;
  
//constructor
public function __construct($radius) {
 $this->radius = 2;
 
 }
//destructor
public function __destruct() {
 echo "destructor";
}
// Methods
public function setRadius($radius) {
$this->radius = $radius;
}
public function getRadius() {
return $this->radius;
}
public function getArea() {
    return (($this->radius)*($this->radius)*3.1416);
    }
 
    public function __toString() {
        return 'Radius =' . $this-> radius. ' and Area = '.$this->getArea();
        }
       
       
}
?>
 
<?php
$Obj = new MyCircle(3);
echo "<br>";
echo "$Obj\n";
echo "<br>";
echo "<br>";
echo "After changing Radius";
echo "<br>";
echo $Obj->setRadius(5);
echo "<br>";
 
 
echo "$Obj\n";
?>
