<?php
$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$dbName = 'mission1';
//connect the web page with the database & if there is any error print 'error'
$con = new mysqli($hostname,$username,$password,$dbName);

if ($con->error)
{
    echo 'Error: ' . $con->error;
    exit;
}