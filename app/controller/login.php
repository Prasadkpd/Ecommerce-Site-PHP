<?php 

Class Login extends Controller
{
  public function index()
  {
    $data['page_title'] = "Home22";
    $this->view("login",$data);
  }  
}

?>