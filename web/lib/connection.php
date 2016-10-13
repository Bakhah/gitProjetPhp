<?php
    $g_link = false;

    function GetMyConnection()
    {
        global $g_link;
        if( $g_link )
            return $g_link;
        $g_link = mysqli_connect( 'localhost', 'usersql', 'pwduser', 'PHP_PROJECT') or die('Could not connect to server.' );
        mysqli_select_db($g_link, 'PHP_PROJECT') or die('Could not select database.');
        return $g_link;
    }

    function CleanUpDB()
    {
        global $g_link;
        if( $g_link != false )
            mysqli_close($g_link);
        $g_link = false;
    }

?>
