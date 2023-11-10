<?php 

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $con = mysqli_connect('fdb1029.awardspace.net','4238170_titanvpn','Titanvpn/10','4238170_titanvpn');

    if(!$con)

    {

        echo 'please check your Database connection';

    }

?>
