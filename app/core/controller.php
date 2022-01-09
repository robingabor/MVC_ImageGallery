<?php
//  MAIN CONTROLLER - this will be the one we going to extend in every other controller class
class Contoller 
{
    public function view($view, $data = []){

        if(file_exists("../app/views/". strtolower($view)  .".php")){
            
            // IF OUR FILE EXIST IN OUR VIEWS FOLDER THAN LETS INCLUDE IT
            include "../app/views/". strtolower($view)  .".php";
        } 
    }

    // function to load model
    public function loadModel($model){
        if(file_exists("../app/models/". strtolower($model)  .".php")){
            
            // IF OUR FILE EXIST IN OUR models FOLDER THAN LETS INCLUDE IT
            include "../app/models/". strtolower($model)  .".php";

            return $model = new $model();
        } 
    }

}



?>