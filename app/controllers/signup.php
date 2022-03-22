<?php

class Signup extends Contoller{
    
    
    public function index(){

        $data['page_title'] = 'Singup';

        if(isset($_POST['submit'])){
            
            $model = $this->loadModel("user");
            $model->signup($_POST);
        }

        $this->view("image_gallery/signup",$data);

    }        
    
    

}

?>