<html>
    <head></head>
    <body>
        <p>
            <?PHP
            $foo = true; if($foo) echo "it  is True!<br/>\n";
            $txt = '1234'; echo "$txt<br/>\n";
            $a = 1234; echo "$a<br/>\n";
            $a = -123;
            echo "$a<br/>\n";
            $a = 1.2e3;
            echo "$a<br/>\n";
            echo 'Arnold once said: "I\'ll be back"', "<br/>\n";
            $beer = 'Heineken';
            echo "$beer's taste is great <br/>\n";
            $str = <<< EOD
                    Example of string spannig
                    multiple lines using "heredoc" syntax.
EOD;
            echo $str;
            ?>
        </p>
    </body>
</html>