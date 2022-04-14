<?php
    // Did the user submit the form?
    if(!empty($_POST)){
        // Process the form
         
        $email = $_POST['email'];
        $password = $_POST['password'];
         
        $check_password = trim($password);
         
        $check_email = filter_var($email, FILTER_VALIDATE_EMAIL);
         
        if($check_password !='' && $check_email !== FALSE){
           
            include 'DBConnection.php';
                
            $email = $GLOBALS["link"]->real_escape_string($email);
            $password = $GLOBALS["link"]->real_escape_string($password);
             
            $salt = time();
             
            // Append the $salt to the $password
            $password .= $salt;
            $password = sha1($password);
             
            $sql = "SELECT COUNT(email) AS found_email FROM usertbl WHERE email='" . $email . "'";
            $query = $GLOBALS["link"]->query($sql);
             
            if($query)
                $found = $query->fetch_assoc();
            else
                $found = FALSE;
              
            if($found == FALSE || $found['found_email'] == 0){
                // Continue the registration process
                $sql = "INSERT INTO usertbl "
                    . "(email, password, salt) "
                    . "VALUES('" . $email . "', '" . $password . "', " . $salt . ")";
                    
                
                
                $query = $GLOBALS["link"]->query($sql);
                 
                // Get the userID of the new$GLOBALS["link"]user
                $userID = $mysqli->insert_id;
                 
                // Start a session to recognize the user
                session_start();
                $_SESSION['userID'] = $userID;
                $_SESSION['email'] = $email;
                 
                // Send the new user somewhere
                header('Location: /TherapyFree56-master/login.php');
            }
            else {
                $error = 'Sorry, that email address has already registered.';
            }
             
     
     
     
            // Always close the database connection
            $GLOBALS["link"]->close();
        }
        else {
            $error = 'Please provide a valid email address and password.';
        }
    }
?>
 
<html>
    <head>
        <title>Register</title>
    </head>
     
    <body>
         
        <h1>Register</h1>
         
        <?php if(isset($error)): ?>
            <h2><?php echo $error; ?></h2>
        <?php endif; ?>
         
        <form action="" method="post">
         
            <p>
                <label for="email">Your email address</label>
                <br/>
                <input type="text" name="email" id="email" />
            </p>
             
            <p>
                <label for="password">Your password</label>
                <br/>
                <input type="password" name="password" id="password" />
            </p>
             
            <p>
                <button type="submit">Register</button>
            </p>
             
        </form>
         
    </body>
</html>