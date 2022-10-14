<?php

class user_info_model{
  private $tabel = TABEL1;
  private $db;
  public function __construct(){
    $this -> db = new Database;
  }
  public function getInfo($id){
    $this -> db -> query("SELECT * FROM {$this->tabel} WHERE id=:id");
    $this -> db -> bind('id',$id);
    return $this -> db -> singel();
  }
}