<?php
include('dbconnect.php');
$sql_create_table = "CREATE TABLE IF NOT EXISTS `whollycoders`.`table_registration2` (
  `registration_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `registration_email` VARCHAR(60) NOT NULL,
  `registration_firstname` VARCHAR(60) NOT NULL,
  `registration_lastname` VARCHAR(60) NOT NULL,
  `registration_password` VARCHAR(100) NOT NULL,
  `registration_dateCreated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`registration_id`),
  UNIQUE (`registration_email`)
)
";
$result = mysqli_query($connection, $sql_create_table);
if($result){
  echo('>>> Table created successfully...<br>');
}else{
  echo('>>> There has been an error...<br>');
}

// CREATE TABLE `whollycoders`.`table_books` (
//    `book_title` INT NOT NULL AUTO_INCREMENT ,
//    `book_author` VARCHAR(100) NOT NULL ,
//    `book_isbn13` VARCHAR(20) NOT NULL ,
//    `book_isbn10` VARCHAR(20) NOT NULL ,
//    `book_publisher` VARCHAR(100) NOT NULL ,
//    `book_imageUrl` VARCHAR(255) NOT NULL ,
//    `book_category` VARCHAR(100) NOT NULL ,
//    `book_dateCreated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
//    PRIMARY KEY (`book_title`)
//    ) ENGINE = InnoDB;
//


 ?>
