<?php

       DEFINE ('DB-USER', 'MichaelDouglas');
       DEFINE ('DB_PASSWORD', 'michaeldoug2020db');
       DEFINE ('DB_HOST', 'localhost');
       DEFINE ('DB_NAME', 'login_information');

       $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
       OR die("Could not connect to MySQL " .
              mysqli_connect_error());

?>