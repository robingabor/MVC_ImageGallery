<?php

class Login extends Contoller{
    
    
    public function index(){

        $data['page_title'] = 'Login';

        if(isset($_POST['submit'])){
            
            $model = $this->loadModel("user");
            $model->login($_POST);
        }

        $this->view("image_gallery/login",$data);

    }        
    
    

}

?>