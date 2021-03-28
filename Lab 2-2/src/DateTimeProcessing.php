<html>
    <?php
        $name = $_POST["name"];
        if(!empty($_POST["day"])) {
            $day = $_POST["day"];
        }
        if(!empty($_POST["month"])) {
            $month = $_POST["month"];
        }
        if(!empty($_POST["year"])) {
            $year = $_POST["year"];
        }
        if(!empty($_POST["hour"])) {
            $hour = $_POST["hour"];
        }
        if(!empty($_POST["minute"])) {
            $minute = $_POST["minute"];
        }if(!empty($_POST["second"])) {
            $second = $_POST["second"];
        }
        print ("<br> Hi $name! ");
        print ("<br> You have choose to have an appointment on $hour:$minute:$second, $day/$month/$year.");
        print ("<br><br> More information: ");
        
        if($hour >= 12) {
            $hour = $hour - 12;
            print ("<br><br> In 12 hours the time and date is $hour:$minute:$second PM, $day/$month/$year.");
        } else {
            print ("<br><br> In 12 hours the time and date is $hour:$minute:$second AM, $day/$month/$year.");
        }
        if($month == 2) {
            if($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0))
                print ("<br><br> This month has 29 days!");
            else
                print ("<br><br> This month has 28 days!");
        } else {
            switch ($month) {
                case 1: print ("<br><br> This month has 31 days!"); break;
                case 3: print ("<br><br> This month has 31 days!"); break;
                case 4: print ("<br><br> This month has 30 days!"); break;
                case 5: print ("<br><br> This month has 31 days!"); break;
                case 6: print ("<br><br> This month has 30 days!"); break;
                case 7: print ("<br><br> This month has 31 days!"); break;
                case 8: print ("<br><br> This month has 31 days!"); break;
                case 9: print ("<br><br> This month has 30 days!"); break;
                case 10: print ("<br><br> This month has 31 days!"); break;
                case 11: print ("<br><br> This month has 30 days!"); break;
                case 12: print ("<br><br> This month has 31 days!"); break;
            }
        }
    ?>
</html>

