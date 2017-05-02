<?php
    header('Access-Control-Allow-Origin:http://www.a.com');
    $name = $_GET['name'];
    $name = $name . 'hehe';
    echo $name;
?>