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
    //$username = $_REQUEST['username'];
    //$password = $_REQUEST['password'];  
    $username = $_GET['username'];
	$password = $_GET['password'];
    $email = $_GET['email'];

    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO tblogin VALUES ('$username','$password','$email')";
    $result = mysqli_query($conn, $sql);

    header("Location: http://localhost/luckyfootball/game/game.html" );

    // Close connection
    mysqli_close($conn);

?>
