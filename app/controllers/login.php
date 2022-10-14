<?php

class login extends Controller {
  public function index(){
    $data = [
      'title' => 'Halaman Login'
    ];
    $this -> view('paratial/login/header',$data);
    $this -> view('layout/login/index');
    $this -> view('paratial/login/footer');
  }
  public function auth(){
    if(isset($_POST['login'])){
      $response = $this->model('login_model')->getAuth($_POST);
      if($response['status']>0){
        if(MetaHack::verify($response['data']['password'],$_POST['password'])){
          Session::makeCokie($response['data']['id']);
          Flasher::setFlash("successfully logged in ","success");
          header("Location:".BASE_URL.'/profile');
          exit;
        }else{
          Flasher::setFlash("wrong password","error");
          header("Location:".BASE_URL.'/login');
          exit;
        }
      }else{
        Flasher::setFlash("account not found ","error");
        header("Location:".BASE_URL.'/login');
        exit;
      }
    }else{
      header("Location:".BASE_URL.'/login');
      exit;
    }
  }
}