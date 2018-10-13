<!DOCTYPE html>
<html>
<body>
<?php
    class Car{
        var $color;
        function Car($color = "green"){
            $this -> $color = $color;
        }
        function what_color(){
            return $this -> color;
        }
    }
    $c = new Car('red');
    echo $c -> what_color();
?>
</body>
</html>