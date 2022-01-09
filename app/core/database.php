<?php

class Database 
{

    public function db_connect(){

        
        try {
            //code...
            $con_string = "mysql:host=localhost;port=3307;dbname=mvc_imagegallery_db;";
            return $db = new PDO($con_string,"root","");
        } catch (PDOException $e) {
            //throw $th;
            die($e->getMessage());
        }
    }

    public function read($query, $data = []){
        $db = $this->db_connect();
        $stmt = $db->prepare($query);        

        if(count($data) > 1){
            
            $check = $stmt->execute($data);
        }
        else{
            $stmt = $db->query($query);
            $check = 0;
            if($stmt){
                $check = 1;
            }
        }        
        
        if($check){
            // we want it to fetch the results into an array of objects
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        return false;
    }

    public function write($query, $data = []){
        
        $db = $this->db_connect();
        $stmt = $db->prepare($query);        

        if(count($data) > 1){
            
            $check = $stmt->execute($data);
        }
        else{
            $stmt = $db->query($query);
            $check = 0;
            if($stmt){
                $check = 1;
            }
        }         
        
        if($check){
            return true;
        }

        return false;
    }
    
}



?>