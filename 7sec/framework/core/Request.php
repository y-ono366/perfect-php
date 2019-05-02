<?php

class Request {
    public function isPost():bool{
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return true;
        }
        return false;
    }

    public function getGet($name,$default=null):?string{

        if(isset($_GET[$name])) {
            return $_GET[$name];
        }
        return $default;
    }

    public function getPost($name,$default=null): ?string{
        if(isset($_POST[$name])) {
            return $_GET[$name];
        }
        return $default;
    }

    public function getHost():string{
        if (!empty($_SERVER['HTTP_HOST'])){
            return $_SERVER['HTTP_HOST'];
        }

        return $_SERVER['SERVER_NAME'];
    }

    public function isSsl(): bool{
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            return true;
        }
        return false;
    }

    public function getRequestUri():string{
        return $_SERVER['REQUEST_URI'];
    }

    public function getBaseUrl():string{
        $script_name = $_SERVER['SCRIPT_NAME'];
        $request_uri = $this->getRequestUri();
        if(0 === strpos($request_uri,$script_name)) {
            return $script_name;
        }else if(0 === strpos($request_uri,dirname($script_name))){
            return rtrim(dirname($script_name),'/');
        }
        return '';
    }

    public function getPathInfo() :string{
        $base_url = $this->getBaseUrl();
        $request_uri = $this->getRequestUri();

        if (false !== ($pos = strpos($request_uri , '?'))) {
            $request_uri = substr($request_uri,0,$pos);
        }

        $path_info = (string)substr($request_rui,strlen($base_url));
        return $path_info;
    }
}
