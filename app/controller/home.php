<?php 

Class Home extends Controller
{
  public function index()
  {
    //this call the home view and url becaome the Home
    $data['page_title'] = "Home";
    $this->view("index",$data);
  }  
}

?>