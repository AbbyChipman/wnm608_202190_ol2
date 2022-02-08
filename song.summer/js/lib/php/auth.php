<?php

function MYSQLIAuth() {
    return [
        "localhost", //mysql user name
        "summersong_wnm608ol2", //mysql user name
        "SamsungVentures1!", //mysql user password
        "summersong_wnm608ol2" //mysql database name
    ];
}

function PDOAuth() {
    return [
        "mysql:host=localhost;dbname=summersong_wnm608ol2", //host and database name
        "summersong_wnm608ol2", //mysql user name
        "SamsungVentures1!", //mysql user password
        [PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
    ];
}