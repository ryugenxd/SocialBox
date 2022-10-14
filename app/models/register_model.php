<?php

class register_model{
  private $tabel = TABEL1;
  private $db;
  public function __construct(){
    $this -> db = new Database;
  }
  public function getRegister($data){
    $this -> db -> query("INSERT INTO {$this->tabel} (name,username,email,password,level) VALUES (:name,'',:email,:password,'user')");
    $this -> db -> bind('name',$data['name']);
    $this -> db -> bind('email',$data['email']);
    $this -> db -> bind('password',$data['password']);
    return $this -> db ->  rowCount();
  }
}