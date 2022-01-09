<?php

class Load_images{

    public function get_images(){    

        $db = new Database();

        $query = "SELECT * FROM images order by id desc limit 12";
        return $db->read($query);
    }
}


?>