<?php

class App{

    protected $controller ="home";
    protected $method = "index";
    protected $params =[];

    public  function __construct()
    {
        print_r($_GET);
        $url = $this->splitURL($_GET);

        // the first member of the url going to be our controller
        if(file_exists("../app/controllers/". strtolower($url[0])  .".php")){
            
            $this->controller = strtolower($url[0]);
            // we remove this from url to send the remaining 2 paramds to our db 
            unset($url[0]);
        }

        require "../app/controllers/". $this->controller  .".php";

        // finally lets instantiate our controller  
        $this->controller = new $this->controller;

        // check if url[1] method exist in our $this->controller obj.
        if(isset($url[1])){ 

            if(method_exists($this->controller,$url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }

        }

        // setting the params to the last item(s) of the url
        // array_values creates a new array with new indexing (resets the keys)
        $this->params = array_values($url);

        // lets call our method from our controller class
        call_user_func_array([$this->controller,$this->method ],$this->params);

    }

    private function splitURL(){
        // prevent hacking with filter_var - The FILTER_SANITIZE_URL filter removes all illegal URL characters from a string.
        // $url = filter_var(trim($url['url'],'/'),FILTER_SANITIZE_URL);
        if(isset($_GET['url'])){ 
            $url = filter_var($_GET['url'],FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            show($url);
            return $url;
        }else{
            $url = ["home"];
            show($url);
            return $url;
        }
    }
}

?>