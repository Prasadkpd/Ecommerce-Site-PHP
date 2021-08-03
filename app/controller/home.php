<?php 

Class Home extends Controller
{
  public function index()
  {
    $data['page_title'] = "Home22";
    $this->view("index",$data);
  }  
}

?>