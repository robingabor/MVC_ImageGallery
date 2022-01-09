<?php

class Home extends Contoller{

    public function index(){

        $data['page_title'] = "Photos"; 

        // getting the images
        $load_class = $this->loadModel("load_images");
        $data['images'] = $load_class->get_images();

        // show($data['images']);

        $this->view("image_gallery/index",$data);

    }
    

}



?>