<?php
    $g_link = false;
    /**
    * Ouvre une connection avec la base de donnée du projet
    */
    function GetMyConnection()
    {
        global $g_link;
        if( $g_link )
            return $g_link;
        $g_link = mysqli_connect( 'localhost', 'usersql', 'pwduser', 'PHP_PROJECT') or die('Could not connect to server.' );
        mysqli_select_db($g_link, 'PHP_PROJECT') or die('Could not select database.');
        return $g_link;
    }
    /**
    * Ferme la connection avec la base de donnée
    */
    function CleanUpDB()
    {
        global $g_link;
        if( $g_link != false )
            mysqli_close($g_link);
        $g_link = false;
    }

    /**
    * Envoie une requête à la base
    * @param requête sql
    * @return le resultat de cette requete sans fetch ou false
    */
    function request($sql){
      return mysqli_query($con, $sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());
    }
    $con = GetMyConnection();
?>
