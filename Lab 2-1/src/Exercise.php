<html>
    <head>
        <title>Receiving input</title>
    <body>
        <font size = 5> Thank you: Got the input. </font>
        <?php
            $t = 0;
            $name = $_POST["name"];
            $class = $_POST["class"];
            $university = $_POST["university"];
            $desire = $_POST["desire"];
            print ("<br> Hello, $name");
            print ("<br> You are studying at $class, $university");
            print ("<br> You have some hobbies are:");
            if(isset($_POST["hobby"])) {
                foreach($_POST["hobby"] as $value) {
                    $t = $t + 1;
                    $s = $_POST['hobby'];
                    print ("<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$t: $value");
                }
            }
            print ("<br> Your desire is $desire");
        ?>
    </body>
</html>