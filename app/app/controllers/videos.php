<?php

class Videos extends Contoller{

    public function index(){

        $data['page_title'] = "Videos"; 

        $this->view("image_gallery/videos",$data);

    }
    

}



?>