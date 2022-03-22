<?php

class Home extends Contoller{

    public function index(){

        $data['page_title'] = "Photos"; 

        // GETTING IMAGES
        // getting the images - instantiate the load_images model
        $load_class = $this->loadModel("load_images");
        // data from search form
        $find = $_GET['find'] ?? "";
        $data['images'] = $load_class->get_images($find);
        print_r( $_GET);
        
        // loading our model  - instantiate the image_class model
        $image_class = $this->loadModel("image_class");

        // PAGINATION
        // total pages
        $data['page_total'] = $load_class->get_total_pages();
        // Instantiate the pagination model class
        $pag = $this->loadModel("pagination");
        // get current page nr
        $np = $pag->current_page_number( $data['page_total']) + 1;
        $pp = $pag->current_page_number( $data['page_total']) - 1;
        // next page
        $data['next_page'] = $pag->generate_link($np);
        // previous page
        $data['previous_page']  = $pag->generate_link($pp);
        $data['page_1'] = $pag->generate_link(1);
        $data['page_2'] = $pag->generate_link($pag->current_page_number( $data['page_total'])+ 1);
        $data['page_3'] = $pag->generate_link($pag->current_page_number( $data['page_total'])+ 2);
        $data['page_4'] = $pag->generate_link($pag->current_page_number( $data['page_total'])+ 3);
        $data['page_current'] = $pag->current_page_number( $data['page_total']);
        

        // get current completete url        
        print_r( $pag->generate_link($pag->current_page_number( $data['page_total']) -1  ));


        
        if(is_array($data['images'])){
            // lets loop through every img and create a new squate thumbnail version from them
            foreach ($data['images'] as $key => $row) {
                // echo $row->image;
            
                $data['images'][$key]->image = $image_class->get_thumbnail($row->image);            
            
            }
        }
        

        // Calling the view method - also passing down $data
        $this->view("image_gallery/index",$data);

    }
    

}



?>