<?php

class Contact extends Contoller{

    public function index(){

        $data['page_title'] = "Contact"; 

        $this->view("image_gallery/contact",$data);

    }
    

}



?>