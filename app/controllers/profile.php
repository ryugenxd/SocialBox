<?php

class profile extends Controller {
  public function index(){
    /*
      cek apakah id yang di enkripsi di session sama persis dengan yang ada di database
    */
    Session::auth($this -> model('user_info_model')->getInfo(MetaHack::decHack($_SESSION['ryxd']['id']))['id']);
    $data = [
      'title' => 'halaman profile',
      'user_info' => $this -> model('user_info_model')->getInfo(MetaHack::decHack($_SESSION['ryxd']['id']))
    ];
    $this -> view("paratial/profile/header",$data);
    $this -> view("component/navbar",$data);
    $this -> view("layout/profile/index",$data);
    $this -> view("paratial/profile/footer");
  }
  public function setting(){
    
  }
}