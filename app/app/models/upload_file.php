<?php

// We expect to receive to $_POST and $_FILES
class Upload_file{

    public function upload($POST,$FILES)
    {   
        $_SESSION['error'] = "";

        // allowed file types
        $allowed[] = "image/jpeg";
        $allowed[] = "video/mp4";

        // upload the file
        if($FILES['file']['name'] != "" && $FILES['file']['error'] == 0){
            if(in_array($FILES['file']['type'],$allowed)){

            }
        }else{
            $_SESSION['error'] = "Only Jpegs types are allowed";
        }

        if($_SESSION['error'] == ""){

            // folder path relative to index.php page
            $folder = "uploads/";

            // in case the folder does not exist lets create it
            if(!file_exists($folder)){
                mkdir($folder,0777,true);
            }

            // path we want to upload our file
            $destination = $folder . $FILES['file']['name'];

            move_uploaded_file($FILES['file']['tmp_name'],$destination);

            $arr['userid'] = 1;
            $arr['image'] = $destination;
            $arr['date'] = date("Y-m-d H:i:s");
            $arr['views'] = 0;
            $arr['url_address'] = get_random_string_max(60);
            $arr['title'] = esc($POST['title']);         
                        

            $DB = new Database();
            // to avoid any SQL injections we going to use prepared statement here        
            $query = "insert into images(userid,image,date,views,url_address,title) values(:userid,:image,:date,:views,:url_address,:title) ";
            $DB->write($query,$arr);
            
            header("Location: ". ROOT . "photos");
            die;
            
        }

        
    }



}


?>