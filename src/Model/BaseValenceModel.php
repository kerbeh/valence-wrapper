<?php

namespace ValenceWrapper\Model;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseValenceModel
 *
 * @author ktrist
 */
class BaseValenceModel {

    /**
     *
     */
    public function toJson() {
        $jsonArray = [];

        foreach (get_object_vars($this) as $key => $value) {
            $jsonArray[ucfirst($key)] = $value;
        }

        return json_encode($jsonArray);
    }

    public function toArray() {
        $jsonArray = [];

        foreach (get_object_vars($this) as $key => $value) {
            $jsonArray[ucfirst($key)] = $value;
        }

        return $jsonArray;
    }

}
