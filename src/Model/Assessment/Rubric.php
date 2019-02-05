<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Model\Assessment;

use ValenceWrapper\Model\BaseValenceModel;
use GuzzleHttp\Psr7\Request;
use ValenceWrapper\Model\Assessment;
use ValenceWrapper\Model\Basic\RichText;
use ValenceWrapper\Model\Assessment\CriteriaGroup;

/**
 * Representation of a D2L Rubric
 *  * @url https://docs.valence.desire2learn.com/res/assessment.html?highlight=criterion#Rubric.Rubric
 * @author ktrist
 */
class Rubric Extends BaseValenceModel {

    const RubricType = ["Holistic" => 0, "Analytic" => 1];
    const Scoring = [
        "TextOnly" => 0,
        "Points" => 1,
        "TextAndNumeric" => 2,
        "CustomPoints" => 3
    ];

    protected $rubricId;
    protected $name;
    protected $description;
    protected $rubricType;
    protected $scoringMethod;
    protected $criteriaGroups;
    protected $overallLevels;

    /**
     * Constructor for a d2l rubric
     * Requires an array of rubric kay pairs,
     * @see https://docs.valence.desire2learn.com/res/assessment.html?highlight=criterion#Rubric.Rubric
     * @param array $rubric
     */
    public function __construct(array $rubric) {
        $this->rubricId = (!empty($rubric["RubricId"])) ? $rubric["RubricId"] : null;
        $this->name = (!empty($rubric["Name"])) ? $rubric["Name"] : "";
        $this->description = (!empty($rubric["Description"])) ? new RichText($rubric["Description"]) : new RichText();
        $this->rubricType = (!empty($rubric["RubricType"])) ? $rubric["RubricType"] : 0;
        $this->criteriaGroups = (!empty($rubric["CriteriaGroups"])) ? $rubric["CriteriaGroups"] : null;

        if ($this->criteriaGroups != null) {
            array_map(array($this, 'setCriteriaGroups'), $this->criteriaGroups);
        }
    }

    protected function setCriteriaGroups($criteriaGroup) {
        return new CriteriaGroup($criteriaGroup);
    }

}
