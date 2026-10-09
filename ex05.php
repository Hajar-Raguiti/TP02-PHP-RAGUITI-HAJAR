<?php
//Declaration de moyenne
$moyenne =15 ;

//Verification Conditions 
if ($moyenne>=0 && $moyenne <=20 ) {
    if ($moyenne<10) {
        echo"Non validé <br>";
    }
    elseif ($moyenne<12) {
        echo" Passable <br>";
    }
    elseif ($moyenne<14) {
        echo" Assez bien <br>";
    }
    elseif ($moyenne<16) {
        echo" Bien <br>";
    }
    else {
        echo" Très bien <br>";
    }
}
else {
    echo"Note invalid";
}

?>