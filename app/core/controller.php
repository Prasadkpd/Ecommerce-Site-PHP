<?php 
// In this we create the Controler as the super class
class Controller
{
    //this is the function for load the each view
    public function view($path,$data = [])
    {
        if(file_exists("../app/views/". THEME . $path . ".php"))
        {
            include "../app/views/". THEME . $path . ".php";
        }else
        {
            include "../app/views/". THEME ."404.php";
        }
        
    }
    
    
    //this is the function for load the each model
    public function load_model($model)
    {
        if(file_exists("../app/models/". strtolower($model) . ".class.php"))
        {
            include "../app/models/". strtolower($model) . ".class.php";
            return $a = new $model();
        }
        return false;
    }


}

?>