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
    $bookname = textboxValue(value: "book_name");
    $bookpublisher = textboxValue(value: "book_publisher");
    $bookprice = textboxValue(value: "book_price");

    if ($bookname && $bookpublisher && $bookprice) {
        $sql = "INSERT INTO books(book_name, book_publisher, book_price) VALUES ('$bookname','$bookpublisher', '$bookprice')";

        if (mysqli_query($GLOBALS['con'], $sql)) {
            TextNode(classname: "Succes", msg: "Recorded successfully..!");
        } else {
            echo "Error";
        }
    } else {
        TextNode(classname: "Error", msg: "Provide Data");
    }
}

function textboxValue($value)
{
    if (isset($_POST[$value])) {
        $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
        if (empty($textbox)) {
            return false;
        } else {
            return $textbox;
        }
    }
}



function TextNode($classname, $msg)
{
    $element = "<h6 class='$classname'>$msg</h6>"; //"<h6 class='$classname'>$msg</h6>";
    echo $element;
}

//get data from MySQL db

function getData(){
    $sql = "SELECT *FROM books";
    $result = mysqli_query($GLOBALS['con'],$sql);
    return $result;
}