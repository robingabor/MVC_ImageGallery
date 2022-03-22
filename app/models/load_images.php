<?php

class Load_images{


    // property for pagination :
    // limit is the number of photos we want to display per page
    public $limit = 12;        
    

    public function get_images($find = ''){    

        $db = new Database();
        $page_number = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    
        $offset = ($page_number -1) * $this->limit;
        // prevent page nr from going under 1
        $page_number = $page_number < 1 ? 1 : $page_number;
        
        if($find == ''){

            $query = "SELECT * FROM images order by id desc limit $this->limit offset $offset";
            return $db->read($query);

        }else{
            // lets use prepared statement if  $find is set
            $find = esc($find);
            // $arr['find'] = $find;
            // $query = "SELECT * FROM images WHERE title like '%$find%' order by id desc limit 12";
            $query = "SELECT * FROM images WHERE title like '%$find%' order by id desc limit $this->limit offset $offset";
            return $db->read($query);
        }        
        
        
    }
    // get total page nr.
    public function get_total_pages(){
        $db = new Database();

        $query = "SELECT * FROM images ";
        return ceil(count($db->read($query)) / $this->limit);
    }


    // Get image by url 
    public function get_single_image($url){
        $db = new Database();
        // increment the views
        $query = "UPDATE images set views = views + 1 WHERE url_address like :url limit 1";        
        $arr['url'] = $url;
        $db->write($query,$arr);
        
        $query = "SELECT * FROM images WHERE url_address like :url limit 1 ";       
        
        // return: array of objects
        $data = $db->read($query,$arr);
        

        return $data[0];
    }

}


?>