<?php

    // start session
    session_start();

    // check to see if previous form has been submitted 
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['income'])) {

        $_SESSION['income'] = $_POST['income'];
        // print print_r($_SESSION);    //test code
    } else {

        // error message
        exit("Sorry, there is an error somewhere. Please go back and try again.");
    }



?>


<!DOCTYPE html> <!-- Ryan King -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Survey Assignment Result Page</title>

    <style>
               
        body {
            background-color: #fffbeb;

        }
        body {
            font-family: arial, sans-serif;
            font-size: 100%;
        }
        

        

    </style>
</head>

<body>
    <header>
        <h1>Thank you for Taking Our Anonymous Survey</h1>
        
        <img src="https://thewisconsinvegetablegardener.files.wordpress.com/2019/05/adm_survey_660x320.png?w=705" alt="photo of survey">
    </header>

    <section>
        <h2>Your Response is below</h2>
        <?php

        //foreach loop to show values stored in array for session
        print "The below is generated from a foreach loop<br><br>\n\r\n\r";
        foreach ($_SESSION as $name => $value) {

            print "\t\t $name : $value <br>\n\r";

        }
            //displays users information provided from survey
            print "\t\t<br><br>\n\r\t\t The below is generated from the session variables\n\r\n\r";

            print "\t\t<p>Your age: " . $_SESSION['age'] . "</p>\n\r";
            print "\t\t<p>Your income: " . $_SESSION['income'] . "</p>\n\r";
            print "\t\t<p>Your education: " . $_SESSION['education'] . "</p>\n\r";

        ?>
    
    </section>

</body>
</html>
