<?php

class login_model{
  private $tabel = TABEL1;
  private $db;
  public function __construct(){
    $this -> db = new Database;
  }
  public function getAuth($data){
    $this -> db -> query("SELECT * FROM {$this->tabel} WHERE email=:email");
    $this -> db -> bind('email',$data['email']);
    $results = [
      'data' => $this -> db -> singel(),
      'status' => $this -> db -> rowCount()
    ];
    return $results;
  }
}