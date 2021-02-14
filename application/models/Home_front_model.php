<?php
class Home_front_model extends CI_Model 
{


    function __construct()  
    {  
       // Call the Model constructor  
       parent::__construct();  
    }  

    /*View*/
	function display_Home_front_model()
	{
        $query = $this->db->get('home');  
        return $query; 
	}

}

?>