<?php

class UserTable{

    //connect to the mysqli server
const servername = "localhost";
const username = "root";
const password = "Qhacks2016";
const dbname = "mydb";

//creates the user database table
const createTable = "CREATE TABLE Users (
id INT(6) UNSIGNED AUTO_INCREMENT UNIQUE PRIMARY KEY , 
facebook_name VARCHAR(255) UNIQUE,
instagram VARCHAR(255) ,
linkedin VARCHAR(255) ,
snapchat VARCHAR(255),
twitter VARCHAR(255) ,
google_plus VARCHAR(255),
email VARCHAR(255) ,
phone_number INT(11) UNSIGNED,
username VARCHAR(255), 
password VARCHAR(255) 
)";

//deletes the user database table
const deleteTable = "DROP TABLE Users";

//selects table
//$selectTable = 

//finds a user by there facebook name, and returns the info of all
//their social media
function findUserByFb($facebook_name){
    $conn = new mysqli(self::servername, self::username, self::password, self::dbname);

    //if cant connect to server, let user know
    if ($conn->connect_error) 
        die("<br>Connection failed:<br> " . $conn->connect_error);

    //if there is no table, create it
    $tablecreated = mysqli_query($conn, self::createTable);

    //create the command to select the user by their facebook name
    $sqlcommand =  "SELECT * FROM Users WHERE facebook_name=".$facebook_name;

    //get the result of that query and return it
    $result = mysqli_query($conn, $sqlcommand);
    return $result;
}


//adds a new user
function addUser($facebook_name, $email, $username, $password){
    $conn = new mysqli(self::servername, self::username, self::password, self::dbname);

    //if cant connect to server, let user know
    if ($conn->connect_error) 
        die("<br>Connection failed:<br> " . $conn->connect_error);

    //if there is no table, create it
    $tablecreated = mysqli_query($conn, self::createTable);

    $sqlcommand = "INSERT INTO users (facebook_name, email, username, password) VALUES ('"
                    .$facebook_name."','".$email."','".$username."','".$password."')";

    mysqli_query($conn, $sqlcommand);
}

//add a social media username
function addMedia($facebook_name, $id, $value){
    $conn = new mysqli(self::servername, self::username, self::password, self::dbname);

    //if cant connect to server, let user know
    if ($conn->connect_error) 
        die("<br>Connection failed:<br> " . $conn->connect_error);

    //if there is no table, create it
    $tablecreated = mysqli_query($conn, self::createTable);

    $sqlcommand = "UPDATE users SET ".$id." = '".$value."' WHERE facebook_name='".$facebook_name."'";
    
    mysqli_query($conn, $sqlcommand);
}



}
//how to use:
// $userbase = new UserTable;
// echo $userbase->findUserByFb("Dickhead");
// $userbase->addUser("angel", "dlu@gmail.com", "d2lu", "ilikewomen");
// $userbase->addMedia("David", "phone_number", 6478788158);
// $userbase->addMedia("David", "linkedin", "suitntie");
?>