<?php
    // Did the user submit the form?
    if(!empty($_POST)){
        // Process the form
         
        $email = $_POST['email'];
        $password = $_POST['password'];
         
        $check_password = trim($password);
         
        $check_email = filter_var($email, FILTER_VALIDATE_EMAIL);
         
        if($check_password != '' && $check_email !== FALSE){
            // Continue the process
             
            include 'DBConnection.php';
            
            
            $email = $GLOBALS["link"]->real_escape_string($email);
            $password = $GLOBALS["link"]->real_escape_string($password);
             
            $sql = "SELECT * FROM usertbl WHERE email='" . $email . "' AND isDeleted!=1";
            $query = $GLOBALS["link"]->query($sql);
             
            $user = $query->fetch_assoc();
             
            if(isset($user['userID'])){
                // Continue logging in the user
                 
                $salt = $user['salt'];
         
                $encrypt_password = sha1($password . $salt);
                 
                if($encrypt_password == $user['password']){
                    // Password matches. Continue loggin in.
                     
                    // Start a session to recognize the user
                    session_start();
                    $_SESSION['userID'] = $user['userID'];
                    $_SESSION['email'] = $email;
                     
                    // Send the new user somewhere
                    header('Location: /TherapyFree56-master/index.php');
                }
                else {
                    $error = 'Incorrect log-in information.';
                }
            }
            else {
                $error = 'Incorrect log-in information.';
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
        <title>Log in</title>
    </head>
     
    <body>
         
        <h1>Log in</h1>
         
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
                <button type="submit">Log in</button>
            </p>
             
        </form>
        not logged in ?
        <a href="Register.php" target="_self">Sign Up</a>
        
         
    </body>
</html>