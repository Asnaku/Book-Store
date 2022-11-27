<?php

require_once("db.php");
require_once("component.php");

$con = Createdb();
//$con = Createdb2();


// if (isset($_POST['run'])) {
//     runtextbox();
// }


//create button click
if (isset($_POST['create'])) {
    createData();
}

//update data
if (isset($_POST['update'])) {
    UpdateData();
}

if (isset($_POST['delete'])) {
    DeleteData();
}


// function runtextbox(){
//  $command = textboxValue(value:"cmd");

// }

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

function getData()
{
    $sql = "SELECT *FROM books";
    $result = mysqli_query($GLOBALS['con'], $sql);
    return $result;
}


function UpdateData()
{
    $bookid = textboxValue(value: "book_id");
    $bookname = textboxValue(value: "book_name");
    $bookpublisher = textboxValue(value: "book_publisher");
    $bookprice = textboxValue(value: "book_price");



    if ($bookname && $bookpublisher && $bookprice) {
        //$sql = "UPDATE books SET book_name='$bookname', book_publisher='$bookpublisher',book_price='$bookprice' WHERE id='$bookid'";
        $sql = "UPDATE `books` SET `book_name`='$bookname',`book_publisher`='$bookpublisher',`book_price`='$bookprice' WHERE  id='$bookid'";
        if (mysqli_query($GLOBALS['con'], $sql)) {
            TextNode(classname: "Succes", msg: "Data successfully updated..!");
        } else {
            TextNode(classname: "Error", msg: "Data not updated..");
        }
    } else {
        TextNode(classname: "Error", msg: "Select Data to update");
    }
}


function DeleteData()
{

    $bookid = textboxValue(value: "book_id");

    if ($bookid) {
        $sql = "DELETE FROM `books` WHERE id='$bookid'";
        if (mysqli_query($GLOBALS['con'], $sql)) {
            TextNode(classname: "Succes", msg: "Data successfully deleted..!");
        } else {
            TextNode(classname: "Error", msg: "Data not deleted..");
        }
    } else {
        $sql = "DELETE FROM `books`";
        mysqli_query($GLOBALS['con'], $sql);
        TextNode(classname: "Error", msg: "All records deleted..!");
    }
}
