<script>
</script>
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

    // Performing insert query execution
    // here our table name is college
    $sql = "SELECT * FROM `tblogin` WHERE Username = '$username' and Password = '$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        header("Location: http://localhost/luckyfootball/game/game.html");
    } else {
        //echo "<div style='margin:auto; width: 500px; height: 40px; background-color: rgba(176, 0, 0, 0.84); border-radius: 30px;'>";
        echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>";
        echo "<div style='width: 500px; margin:auto; margin-top:10px;' class='alert alert-warning' role='alert'>";
        echo "<p>Subscribe and play now</p>";
        echo "</div>";
    }

    // Close connection
    mysqli_close($conn);

?>
