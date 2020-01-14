<?php


class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];
    // constructor

    //get url data
    /**
     * Core constructor.
     */
    public function __construct()
    {
        $url = $this->getUrl();
        $controllerName = ucwords($url[0]);
        $controllerfile = '../app/controllers/'.$controllerName.'.php';
        if(file_exists($controllerfile)){
            $this->currentController = $controllerName;
            unset($url[0]);
        }
    }

    public function getUrl(){
        if(isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = htmlentities($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }
}