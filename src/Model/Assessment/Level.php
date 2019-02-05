<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Model\Assessment;

use ValenceWrapper\Model\BaseValenceModel;
use GuzzleHttp\Psr7\Request;

/**
 * The framework can provide grade values slightly differently depending upon whether the underlying grade object type is a computable value, or not (basically, only Text (4) grade types are not computable).
 * @url https://docs.valence.desire2learn.com/res/grade.html#Grade.GradeValue
 * @author ktrist
 */
class Level Extends BaseValenceModel {

    /**
     * D2L Id of the rubric level
     * @var Int
     */
    protected $id;

    /**
     * Plain text name of the level
     * @var type
     */
    protected $name;

    /**
     * Highest points avaliable for the level
     * @var Float
     */
    protected $points;

    /**
     * Constructor that takes an array of Level values and returns an imutable level object
     * @param array $level
     */
    public function __construct(array $level) {

        $this->id = (!empty($level["Id"])) ? $grade["Id"] : null;
        $this->name = (!empty($level["Name"])) ? $grade["Name"] : "";
        $this->points = (!empty($level["Points"])) ? $grade["Points"] : 0;
    }

    public function getId(): Int {
        return $this->id;
    }

    public function getName(): type {
        return $this->name;
    }

    public function getPoints(): Float {
        return $this->points;
    }

}
