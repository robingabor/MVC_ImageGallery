<?php

class About extends Contoller{

    public function index(){

        $data['page_title'] = "About"; 

        $this->view("image_gallery/about",$data);

    }
    

}



?>