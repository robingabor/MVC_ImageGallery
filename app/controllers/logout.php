<?php

class Logout extends Contoller{
    
    
    public function index(){

        $data['page_title'] = 'Logout';

        // Unsetting the session
        if(isset($_SESSION['user_url'])){
            unset($_SESSION['user_url']); 
            unset($_SESSION['user_email']);

        }        

        // Redirect to the home page
        header("Location: ". ROOT . "index");
        die;

    }        
    
    

}

?>