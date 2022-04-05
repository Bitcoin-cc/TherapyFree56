

<?php
    if (!isset($GLOBALS["link"])) {
        define("DB_HOST", "localhost");
        define("DB_USER", "root");
        define("DB_PASSWORD", "");
        define("DB_NAME", "TherapyDB");

        $GLOBALS["link"] = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if (!$GLOBALS["link"]) {
            die("Connection failed: ".mysqli_connect_error());
        }
    }

<-- may need some adjustments depending on laragon (need more work)-->
?>