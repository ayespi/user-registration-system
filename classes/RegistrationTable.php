<?php
  class RegistrationTable{
    public $db_connection;
    public $sql_create_table;
    public $result;

    public function __construct($connection){
      $this->db_connection    = $connection;
      $this->sql_create_table = "CREATE TABLE IF NOT EXISTS `whollycoders`.`table_registrations2` (
        `registration_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
        `registration_email` VARCHAR(60) NOT NULL,
        `registration_firstname` VARCHAR(60) NOT NULL,
        `registration_lastname` VARCHAR(60) NOT NULL,
        `registration_password` VARCHAR(100) NOT NULL,
        `registration_dateCreated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`registration_id`)
      )
      ";
      $this->result = mysqli_query($this->db_connection, $this->sql_create_table);
      if($this->result){
        echo('>>> Registration table created successfully...<br>');
      }else{
        echo('>>> There has been an error...<br>');
      }
    }
  }
 ?>
