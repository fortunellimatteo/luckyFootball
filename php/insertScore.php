<?php

    // servername => localhost
    // username => root
    // password => empty
    // database name => staff
    $conn = mysqli_connect("localhost", "root", "", "luckyfootaball");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all 5 values from the form data(input)
    //$first_name = $_REQUEST['first_name'];
    //$last_name = $_REQUEST['last_name'];
    //$gender = $_REQUEST['gender'];
    //$address = $_REQUEST['address'];
    $score = $_REQUEST['score'];

    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO tbbestscore VALUES ('Mario', $score)";

    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n $score");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);

?>
