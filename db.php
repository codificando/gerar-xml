<?php

    $host = "";
    $db = "";
    $user = "";
    $password = "";

    $conn = mssql_connect($host,$user,$password);
    mssql_select_db($db, $conn);

