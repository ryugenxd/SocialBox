<?php

class register extends Controller {
  public function index(){
    $data = [
      'title' => 'Halaman registrasi'
    ];
    $this -> view('paratial/register/header',$data);
    $this -> view('layout/register/index');
    $this -> view('paratial/register/footer');
  }
  public function reg(){
    if(isset($_POST['register'])){
      $data = [
        'name' => htmlspecialchars($_POST['name']),
        'email' => htmlspecialchars($_POST['email']),
        'password' => MetaHack::encHack($_POST['password'])
      ];
      if($this->model('register_model')->getRegister($data)>0){
        Flasher::setFlash('successfully registered','success');
      }else{
        Flasher::setFlash('failed to register account','error');
      }
      header("Location:".BASE_URL.'/register');
      exit;
    }else{
      header("Location:".BASE_URL.'/register');
      exit;
    }
  }
}