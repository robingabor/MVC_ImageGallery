<?php

class Photo_detail extends Contoller{

    public function index($url_address = ''){

        $data['page_title'] = "Photo Details"; 

        // loading our model  - instantiate the image_class model
        $image_class = $this->loadModel("image_class");
        // loading our model  - instantiate the load_images model
        $load_class = $this->loadModel('load_images');


        // get single image - read from db then add the data        
        // url_address will be passed down via call_user_func_array([$this->controller,$this->method ],$this->params); from app.php
        $data['single_image'] = $load_class->get_single_image($url_address);

        $data['random_images'] = $load_class->get_images();

        if(is_array($data['random_images'])){
            // lets loop through every img and create a new squate thumbnail version from them
            foreach ($data['random_images'] as $key => $row) {
                // echo $row->image;
            
                $data['random_images'][$key]->image = $image_class->get_thumbnail($row->image);            
            
            }
        }
                

        print_r($data);

        $this->view("image_gallery/photo_detail",$data);

    }
    

}

?>