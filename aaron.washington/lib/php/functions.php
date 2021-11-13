<?php


function print_p($v) {
    echo "<pre>",print_r($v),"</pre>";
}


function file_get_json($filename) {
    $file = file_get_contents($filename);
    return json_decode($file);
}





//Connect to mySQL database info (from auth php info)

include "auth.php";

function makeConn() {
    // Connect to database using spread operator (...) that spreads out values in the function as an array
    $conn = new mysqli(...MYSQLIAuth());
    // Check the connection for errors and it dies if there are any
    if($conn->connect_errno) die($conn->connect_error);
    // Makes sure there's no weird characters (using the biggest possible character set known as utf8)
    $conn->set_charset('utf8');
    return $conn;
}


// This function gets passed a connection and a query that it can use
function makeQuery($conn,$qry) {
    // Run that query
    $result = $conn->query($qry);
    // Check the connection for any errors
    if($conn->errno) die ($conn->error);
    $a = [];
    // Look through query string
    while($row = $result->fetch_object()) {
        // Take empty array $a and push one item onto it that is every row that is a result from our query
        $a[] = $row;
    }
    return $a;
}


