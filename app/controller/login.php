<?php 

Class Login extends Controller
{
  public function index()
  {
    //this call the login view and url becaome the Home
    $data['page_title'] = "login";
    $this->view("login",$data);
  }  
}

?>