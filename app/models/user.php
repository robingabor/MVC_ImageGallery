<?php

class User{

    public function signup($POST)
    {   
        $_SESSION['error'] = "";
                      

        if($_SESSION['error'] == ""){

            

            $arr['email'] = esc($POST['email']);
            $arr['password'] = password_hash(esc($POST['password']), PASSWORD_DEFAULT);
            $arr['date'] = date("Y-m-d H:i:s");            
            $arr['url_address'] = get_random_string_max(60);
            $arr['image'] = "";
                  
                        

            $DB = new Database();
            // to avoid any SQL injections we going to use prepared statement here        
            $query = "insert into users(email,password,date,url_address,image) values(:email,:password,:date,:url_address,:image) ";
            $DB->write($query,$arr);
            
            // Redirect to the home page
            header("Location: ". ROOT . "login");
            die;
            
        }
        
    }

    public function login($POST){

        $arr['email'] = esc($POST['email']);
        $password = esc($POST['password']);
        

        $DB = new Database();
        // to avoid any SQL injections we going to use prepared statement here        
        $query = "select * from users where email = :email limit 1";
        $data = $DB->read($query,$arr);

        if(is_array($data)){
            // getting the very first resultd
            $data =$data[0];

            if(password_verify($password, $data->password)){

                $_SESSION['user_url'] = $data->url_address;
                $_SESSION['user_email'] = $data->email;
            
                // Redirect to the home page
                header("Location: ". ROOT . "about");
                die;
            }
            
        }       
        

    }


    // Get user by url 
    public function get_single_user($url){

        $db = new Database();

        $arr['url'] = $url;
                
        $query = "SELECT * FROM users WHERE url_address like :url limit 1 ";       
        
        // return: array of objects
        $data = $db->read($query,$arr);
        

        return $data[0];
    }

    // Check if the user logged in
    public function is_logged_in(){

        if(isset($_SESSION['user_url'])){
            return true;
        }
        return false;

    }               
      
    


}


?>