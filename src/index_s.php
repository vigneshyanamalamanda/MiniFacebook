<?php
    session_start();    
    if (checklogin_mysql($_POST["username"], $_POST["password"])) {
?>
    <h2>Welcome <?php echo htmlspecialchars($_POST['username']); ?>!</h2>
<?php       
    } else {
        echo "<script>alert('Invalid username/password');window.location='form.php';</script>";
        die();
    }

    // MySQL login check function
    function checklogin_mysql($username, $password) {
        $mysqli = new mysqli('localhost', 'WAPHTEAM1', '', 'waph_team');
        
        if ($mysqli->connect_errno) {
            printf("Database connection failed: %s\n", $mysqli->connect_error);
            exit();
        }

        $prepared_sql = "SELECT * FROM users WHERE username=? AND password=md5(?);";
        // Preparing the SQL statement
        $stmt = $mysqli->prepare($prepared_sql);
        // Binding parameters to the query
        $stmt->bind_param("ss", $username, $password);
        
        // Execute the query
        $stmt->execute();
        
        // Get the result of the query
        $result = $stmt->get_result();

        // Check if there is exactly one matching row
        if ($result->num_rows == 1)
            return TRUE;

        return FALSE;
    }
?>
