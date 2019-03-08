<html>
<title>php</title>
<body>
<?php
function myTest() {
    static $x = 0;
	echo "<br>";
    echo $x;
	echo "<br>";
    $x++;
}

myTest();
myTest();
myTest();
?>
</body>
</html>
