<?php 

Class Signup extends Controller
{
  public function index()
  {
    $data['page_title'] = "Home22";
    $this->view("signup",$data);
  }  
}

?>