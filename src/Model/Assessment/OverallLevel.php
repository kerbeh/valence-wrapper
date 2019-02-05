<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Model\Assessment;

use ValenceWrapper\Model\BaseValenceModel;
use GuzzleHttp\Psr7\Request;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Overall Level Model for a D2L rubric
 * @url https://docs.valence.desire2learn.com/res/assessment.html?highlight=criterion#Rubric.OverallLevel
 * @author ktrist
 */
class OverallLevel Extends BaseValenceModel {

    /**
     * D2L Id of the level
     * @var Int
     */
    protected $id;

    /**
     * Plain text name of the level
     * @var String
     */
    protected $name;

    /**
     * Lowest possible score to start the range
     * @var Float
     */
    protected $rangeStart;

    /**
     * Rich text object of the description of the overall level
     * @var ValenceWrapper\Model\Basic\RichText;
     */
    protected $description;

    /**
     * Rich text feedback for the overall rubric
     * @var ValenceWrapper\Model\Basic\RichText;
     */
    protected $feedback;

    public function __construct(array $overallLevel) {

        $this->id = (!empty($overallLevel["Id"])) ? $overallLevel["Id"] : null;
        $this->name = (!empty($overallLevel["Name"])) ? $overallLevel["Name"] : "";
        $this->rangeStart = (!empty($overallLevel["RangeStart"])) ? $overallLevel["RangeStart"] : 0;
        $this->description = (!empty($rubric["Description"])) ? new RichText($rubric["Description"]) : new RichText();
        $feedback = (!empty($cell["Feedback"])) ? new RichText($cell["Feedback"]) : new RichText();
    }

}
