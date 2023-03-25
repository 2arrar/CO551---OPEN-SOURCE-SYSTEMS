<?php
if ($_POST["txtage"] < 21)
    {
        echo "you are under 21 years old<br>";
    }   
else 
{
    echo "You are 21 years old or over<br>";
}

if ($_POST["txtgender"] == 'Male')
    {
        echo "Your gender is Male";
    }
else
{
    echo "Your gender is Female";
}

?>