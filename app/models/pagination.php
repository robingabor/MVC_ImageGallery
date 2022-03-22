<?php

class Pagination{

    private $URL = "";

    public function __construct()
    {
        $this->URL = $_GET;
    }

    // Get the current page nr
    public function current_page_number($total_page_nr = 200){

        $page = isset($this->URL['page']) ? (int)$this->URL['page'] : 1;
        // TESZT 
        $page = $page >= $total_page_nr ?  $total_page_nr : $page ;
        return $page;

    }

    // get tge complete current URL
    // generating a link to the given page
    public function generate_link( $number ){
        $url = isset($this->URL['url']) ? $this->URL['url'] : "";

        $number  = $number < 1 ? 1 : $number;

        $num = 0;
        foreach ($this->URL as $key => $value) {
            # code...
            $num++;

            if($key == 'url'){
                // we do NOT want to concat our $_GET['url'] to our $url
                continue;
            }
            if($num == 2 ){                
               if($key != 'page'){
                $url .= "?" . $key . "=" . $value;
                continue;
               }
               $url .= "?" . $key . "=" . $number;                
               continue;
                
            }
            if($key == 'page'){
                $url .= "&" . $key . "=" . $number; 
                echo $url;
                continue;
            }            
            
            $url .= "&" . $key . "=" . $value;           
        }

        // add a page nr if it none
        if(!strstr($url,'page')){
            return ROOT . $url . "&" . "page" . "=" . $number;
        }


        return ROOT . $url;
    }

        

}


?>