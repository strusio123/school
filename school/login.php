<?php
    echo "Login: ";
    echo $_POST['login'];
    echo "<br>";
    echo "Hasło: ";
    echo sha1($_POST['hasło']);
    echo "<br>";
    if(isset($_POST['zapamietaj'])) 
        echo "Pole zostało zaznaczone"
?>
