<?php

//-- connection parameters
//$hostname = "localhost";
//$username = "root";
//$password = "";
//$database = "admin";

//--- connect to mysql
//$con = mysqli_connect($hostname,$username,$password);
//mysqli_select_db($database,$con);
?>

<?php

    // Creating a database connection

    $connection = mysqli_connect("localhost", "root", "", "mock_test_tbl");
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }


    // Selecting a database 

    $db_select = mysqli_select_db($connection, "mock_test_tbl");
    if (!$db_select) {
        die("Database selection failed: " . mysqli_connect_error());
    }

?>