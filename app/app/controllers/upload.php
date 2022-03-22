<?php

class Upload extends Contoller{
    
    // we need index method in every controller class bc it is the default one
    public function index(){

        

    }    

    public function image(){

        $data['page_title'] = 'Upload Image';

        if(isset($_FILES['file'])){
            
            $model = $this->loadModel("upload_file");
            $model->upload($_POST,$_FILES);
        }

        $this->view("image_gallery/upload_image",$data);

    }   
    
    public function video(){

        $data['page_title'] = 'Upload Video';

        $this->view("image_gallery/upload_video",$data);

    }    

}

?>