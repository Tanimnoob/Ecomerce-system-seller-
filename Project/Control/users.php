<?php
function getUsers()
{
    return json_decode(file_get_contents("../Data/data_p.json"));
    // echo '<pre>';
    // var_dump($users);
    // echo'</pre>';
    // exit;

}
?>