<!DOCTYPE html>
<html>

<body>
    <?php
    $a = 9;       // Integer
    $b = 7.33;    // Float
    $c = "hai boloo"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (string) $a;
    $b = (string) $b;
    $c = (string) $c;
    $d = (string) $d;
    $e = (string) $e;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    ?>
</body>

</html>