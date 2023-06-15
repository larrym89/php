<?php

class Controller{

    public $model;

    public function __construct(Model $model){
        $this->model = $model;
    }

    public function getData(){
        return $this->model->data;
    }

}