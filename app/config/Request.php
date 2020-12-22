<?php

class Request{

    private $GET;
    private $POST;

    public function __construct($GET,$POST){
        $this->GET=$GET;
        $this->POST=$POST;
    }

    public function has($key){
        return in_array($key,array_keys(array_merge($this->GET,$this->POST)));
    }
    public function getHas($key){
        return in_array($key,array_keys($this->GET));
    }
    public function postHas($key){
        return in_array($key,array_keys($this->POST));
    }
    public function get($key,$method){
        switch (strtolower($method)){
            case 'get':
                return $this->getHas($key)?$this->GET[$key]:null;
            case 'post':
                return $this->postHas($key)?$this->POST[$key]:null;
            default:
                return null;
        }
    }

}