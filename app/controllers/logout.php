<?php
class logout{
  public function index(){
    Session::logOut();
  }
}