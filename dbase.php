<?php
// --CLASS--
  class Databases{
   // --PROTECTED--
    protected $connect;

    // --CONSTRUCTOR--
    public function __construct(){
        $this->connect = mysqli_connect("localhost","unuser","12345678","raiting");
    
        if(!$this->connect){
            echo 'Database connection error'. mysqli_connect_error($this->__construct);
        } else {
            echo "Connected sucsessfully";
        }
    
    }
    // --FUNCTION without GET and SET-- to retrieve all data by SELECT methodw
       public function select ($table_name){
        $array = array();
        $query = "SELECT * FROM . $table_name";
        $result = mysqli_query($this->connect,$query);

        while($row=mysqli_fetch_assoc($result))
        {
            $array[] = $row;

        }
        return $array;
    }
     // --DESTRUCTOR--
    public  function __destruct(){
        echo "The object has been successfully created";
    }
}

?>