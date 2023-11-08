<?php 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $con = mysqli_connect('fdb1029.awardspace.net','4238170_buzzbirdph','Titanvpn/101017','carproject');
    if(!$con)
    {
        echo 'please check your Database connection';
    }
?>
