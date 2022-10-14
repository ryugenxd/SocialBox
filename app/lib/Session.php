<?php

class Session{
  public static function auth($id){
    if(isset($_SESSION['ryxd'])){
      if(MetaHack::decHack($_SESSION['ryxd']['id']) != $id){
          header('Location:'.BASE_URL.'/login');
          exit;
      }
    }else{
      header('Location:'.BASE_URL.'/login');
      exit;
    }
  }
  public static function makeCokie($id){
    $_SESSION['ryxd'] = [
      'id' => MetaHack::encHack($id),
      'ip' => $_SERVER['REMOTE_ADDR'],
      'ugen' => $_SERVER['HTTP_USER_AGENT']
    ];
  }
  public static function cekOut($id){
      if(MetaHack::decHack($_SESSION['ryxd']['id']) == $id){
          header('Location:'.BASE_URL.'/dashboard');
          exit;
      }
  }
  public static function logOut(){
    unset($_SESSION['ryxd']);
    session_destroy();
    header("Location:".BASE_URL.'/login');
    exit;
  }
}