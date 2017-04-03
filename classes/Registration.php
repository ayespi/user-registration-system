<?php

class Registration{
public $db_connection;
public $email;
public $firstname;
public $lastname;
public $password;
public $sql_insert;
public $result2;

  public function __construct($connection, $reg_email, $reg_firstname, $reg_lastname, $reg_password){
    $this->db_connection    = $connection;
    $this->email            = $reg_email;
    $this->firstname        = $reg_firstname;
    $this->lastname         = $reg_lastname;
    $this->password         = $reg_password;
    $this->sql_insert       = "INSERT INTO `whollycoders`.`table_registrations2`(
      `registration_id`,
      `registration_email`,
      `registration_firstname`,
      `registration_lastname`,
      `registration_password`,
      `registration_dateCreated`
      ) VALUES (
        NULL,
        '$this->email',
        '$this->firstname',
        '$this->lastname',
        '$this->password',
        CURRENT_TIMESTAMP
      );";
      $this->result2 = mysqli_query($this->db_connection, $this->sql_insert);
      if($this->result2){
        echo('>>> Registration details added to database...<br>');
      }else{
        echo('>>> There has been an error...<br>');
      }
  }
}
 ?>
