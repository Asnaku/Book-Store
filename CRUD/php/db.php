<?php

//error_reporting(0);

function Createdb()
{
    $servername = "localhost:3300";
    $username = "root";
    $password = "";
    $dbname = "bookstore";

    //create connection
    $con = mysqli_connect($servername, $username, $password);

    //check connection
    if (!$con) {
        die("Connection Failed:" . mysqli_connect_error());
        // die () Function- Print a message and terminate the current script
    }

    //create Database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    //$sql2 = "DELETE DATABASE bbookstore";
    //mysqli_query($con,$sql2);

    if (mysqli_query($con, $sql)) {
        //echo "Database create...!";
        $con = mysqli_connect($servername, $username, $password, $dbname);
        $sql = "CREATE TABLE IF NOT EXISTS books(id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,book_name VARCHAR(25) NOT NULL,book_publisher VARCHAR(20),book_price FLOAT)";

        if (mysqli_query($con, $sql)) {
            return $con;
        } else  echo "Cannot create table...!";
    } else {
        echo "Error while creating Database" . mysqli_error($con);
    }
}
