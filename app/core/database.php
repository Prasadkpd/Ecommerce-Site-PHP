<?php 

Class Database
{
    public static $con;

    public function __construct()
    {
        try{
            $string = DB_TYPE . ":host=". DB_HOST .";dbname=". DB_NAME;
            self::$con = new PDO($string,"root","");

        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    //this function to get the instance
    public static function getInstance()
    {
        if(self::$con)
        {
            return self::$con;
        }
        $a = new self();
        return self::$con;

    }

    private static function connect()
    {

    }
}
//better have one connection
$db = Database::getInstance();
show($db);
?>