<!DOCTYPE html>
<html>

<body>

    <?php
        echo "My first PHP script!";

        echo "<br>";

        $x = 5 /* + 15 */ + 5;
        echo $x;

        echo "<br>";

        $txt = "W3Schools.com";
        echo "I love $txt!";

        $test_variable = 5; // global scope

        function myTest($asd) {
            // using x inside this function will generate an error
            echo "<p>Variable x inside function is: $asd</p>";

            $x_local = 5; // local scope

            echo "Local scope $x_local";
        }

        myTest($test_variable);


        function myTestStaticVariable() {
            static $x = 0;
            echo "<br>";
            echo $x;
            $x++;
        }

        myTestStaticVariable();
        myTestStaticVariable();
        myTestStaticVariable();

    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";
    ?>

</body>

</html>
