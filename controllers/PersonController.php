<?php

namespace app\controllers;

use app\models\entities\person;

class PersonController{

    public function queryAllperson(){
        $person = new Person();
        $data = $person->all();
        return $data;
    }
    
}