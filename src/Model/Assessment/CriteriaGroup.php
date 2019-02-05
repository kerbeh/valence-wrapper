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
 * Definition of a D2L rubruc criteria group
 * @url https://docs.valence.desire2learn.com/res/assessment.html?highlight=criterion#Rubric.CriteriaGroup
 * @author ktrist
 */
class CriteriaGroup Extends BaseValenceModel {

    /**
     * Plain text name of the rubric
     * @var String
     */
    protected $name;

    /**
     * An array of Rubric LEvel objects
     * @var Array
     */
    protected $levels = [];

    /**
     * An array of Rubric Criterion
     * @var type
     */
    protected $criteria = [];

    /**
     * Constructs an immutable object from a provided array of D2L Rubric Criteria GRoup
     * @see https://docs.valence.desire2learn.com/res/assessment.html?highlight=criterion#Rubric.CriteriaGroup
     * @param array $criteriaGroup
     */
    public function __construct(array $criteriaGroup) {

        $this->name = (!empty($criteriaGroup["Name"])) ? $criteriaGroup["Name"] : "";
        $this->levels = (!empty($criteriaGroup["Levels"])) ? $criteriaGroup["Levels"] : [];
        $this->criteria = (!empty($criteriaGroup["Ccriteria"])) ? array_map(array($this, 'setCriterion'), $criteriaGroup["Criteria"]) : [];
    }

    /**
     * Creates an array of D2L Criterion
     * @param array $criterion
     * @return array
     */
    protected function setCriterion(array $criterion) {

        $id = (!empty($criterion["Id"])) ? $criterion["Id"] : null;
        $name = (!empty($criterion["Name"])) ? $criterion["Name"] : "";
        $cells = (!empty($criterion["Cells"])) ? $criterion["Cells"] : null;

        if ($cells != null) {
            array_map(array($this, 'setCell'), $cells);
        }

        return ["Id" => $id, "Name" => $name, "Cells" => $cells];
    }

    /**
     * Creates a D2L Rubric Criterion Cell from an array
     * @param array $cell
     * @return Array
     */
    protected function setCell(array $cell) {

        $feedback = (!empty($cell["Feedback"])) ? new RichText($cell["Feedback"]) : new RichText();
        $description = (!empty($cell["Description"])) ? new RichText($cell["Description"]) : new RichText();
        $points = (!empty($cell["Points"])) ? $cell["Points"] : 0;
        $levelId = (!empty($cell["LevelId"])) ? $cell["LevelId"] : 0;

        return ["Feedback" => $feedback, "Points" => $points, "Description" => $description, "LevelId" => $levelId];
    }

    public function getName() {
        return $this->name;
    }

    public function getLevels() {
        return $this->levels;
    }

    public function getCriteria() {
        return $this->criteria;
    }

    public function toArray() {

    }

}
