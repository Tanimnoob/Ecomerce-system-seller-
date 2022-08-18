<?php
    function runQuery($query) {
        $con = mysqli_connect('localhost', 'root', '', 'project');
        $result = mysqli_query($con, $query);
        return $result ?? false;
    }
?>