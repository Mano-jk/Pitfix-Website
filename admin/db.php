<?php

function query($sql)
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "pitfix";
        try {
                $conn = new mysqli($host, $user, $pass,$db);
        } catch (Exception $exc) {
                echo $exc->getMessage();
        }
        $res = $conn->query($sql);
        if ($res === FALSE){
            echo "Error: " . $conn->error;
        }
        return($res);
}