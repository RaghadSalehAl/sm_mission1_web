<?php
require 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
// add the directions from the website to the database using sql guery
    if (isset($_POST['direction']))
    {
        $direction = $_POST['direction'];
        $query = $con->query("INSERT INTO directions (direction) VALUES ('$direction')") or die('Error query');
        $successfully = 1;
    }

}