<?php include("class_lib.php"); ?>

<?php
    $stefan = new person();
    $jimmy = new person();
    $stefan -> set_name("Stefan Mischook");
    $jimmy -> set_name("Nick Waddles");

    echo "Stefan's full name is " . $stefan ->get_name() . "<br>";
    
    echo "Nick's full name is " . $jimmy ->get_name();

    
?>