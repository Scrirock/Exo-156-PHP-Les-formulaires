<?php

    if (isset($_POST["name"])){
        if ($_POST["name"] === "James") echo "Bond, James Bond";
        else echo "Bonjour ".$_POST["name"];
    }

?>