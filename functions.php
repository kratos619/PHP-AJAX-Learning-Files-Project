<?php
//speciapcharacter
function h($string)
{
    return htmlspecialchars($string);
}

//real escape string

function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection,$string);
}

// header function
function redirect_to($page_name){
    header("Location:" . $page_name);
}


?>