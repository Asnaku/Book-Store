<?php

require_once("db.php");
require_once("component.php");

$con = Createdb();


//create button click
if (isset($_POST['create'])) {
    createData();
}

function createData()
{
    //$bookname = '';
    $bookname = textboxValue("book_name");
    $bookpublisher = textboxValue("book_publisher");
    $bookprice = textboxValue("book_price");

    if ($bookname && $bookpublisher && $bookprice) {
        $sql = "INSERT INTO books(book_name, book_publisher, book_price) VALUES ('$bookname','$bookpublisher', '$bookprice')";

        if (mysqli_query($GLOBALS['con'], $sql)){
            echo "Record Successfully inserted...!";
        } else{
            echo "Error";
        }
    } else {
        echo "Provide Data";
    }
}

function textboxValue($value)
{
    if (isset($_POST[$value])) {
        $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
        if (empty($textbox)){
            return false;
        } else {
            return $textbox;
        }
    }
}



// if (isset($_POST[$value])) {
//     $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
//     if (empty($textbox)){
//         return false;
//     } else {
//         return $textbox;
//     }
// }