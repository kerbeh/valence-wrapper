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
class RubricAssessment Extends BaseValenceModel {

    const RubricType = ["Holistic" => 0, "Analytic" => 1];
    const Scoring = [
        "TextOnly" => 0,
        "Points" => 1,
        "TextAndNumeric" => 2,
        "CustomPoints" => 3
    ];

    protected $rubricId;
    protected $overallScore;
    protected $overallFeedback;
    protected $overallLevel;
    protected $overallScoreOverridden;
    protected $overallFeedbackOverridden;
    protected $criteriaOutcome;

    /**
     * Constructor for a d2l rubric assessment
     * Requires an array of rubric key pairs,
     * @see https://docs.valence.desire2learn.com/res/assessment.html#Rubric.RubricAssessment
     * @param array $rubric
     */
    public function __construct(array $rubricAssessment) {
        $this->rubricId = (!empty($rubricAssessment["RubricId"])) ? $rubricAssessment["RubricId"] : null;
        $this->overallScore = (!empty($rubricAssessment["OverallScore"])) ? $rubricAssessment["OverallScore"] : 0;
        $this->overallFeedback = (!empty($rubric["OverallFeedback"])) ? new RichText($rubric["OverallFeedback"]) : new RichText();
        $this->overallLevel = (!empty($rubric["OverallLevel"])) ? $rubric["OverallLevel"] : 0;
        $this->overallScoreOverridden = (!empty($rubric["OverallScoreOverridden"])) ? $rubric["OverallScoreOverridden"] : FALSE;
        $this->overallFeedbackOverridden = (!empty($rubric["OverallFeedbackOverridden"])) ? $rubric["verallFeedbackOverridden"] : FALSE;

        if ($this->criteriaOutcome != null) {
            array_map(array($this, 'setCriteriaOutcomes'), $this->criteriaOutcome);
        }


        if ($this->overallLevel != null) {
            array_map(array($this, 'setOverallLevel'), $this->setOverallLevel);
        }
    }

    protected function setCriteriaOutcome($criteriaOutcome) {

        $criterionId = (!empty($criteriaOutcome["CriterionId"])) ? $criteriaOutcome["CriterionId"] : null;
        $levelId = (!empty($criteriaOutcome["LevelId"])) ? $criteriaOutcome["LevelId"] : null;
        $score = (!empty($criteriaOutcome["Score"])) ? $criteriaOutcome["Score"] : 0;
        $scoreIsOverridden = (!empty($criteriaOutcome["ScoreIsOverridden"])) ? $criteriaOutcome["ScoreIsOverridden"] : FALSE;
        $feedback = (!empty($criteriaOutcome["Feedback"])) ? new RichText($criteriaOutcome["Feedback"]) : new RichText();
        $feedbackIsOverridden = (!empty($criteriaOutcome["FeedbackIsOverridden"])) ? $criteriaOutcome["FeedbackIsOverridden"] : FALSE;

        return ["CriterionId" => $criterionId, "LevelId" => $levelId, "Score" => $score, "ScoreIsOverridden" => $scoreIsOverridden, "Feedback" => $feedback, "FeedbackIsOverridden" => $feedbackIsOverridden];
    }

    protected function setOverallLevel($overallLevel) {
        $levelId = (!empty($criteriaOutcome["LevelId"])) ? $criteriaOutcome["LevelId"] : null;
        $feedback = (!empty($criteriaOutcome["Feedback"])) ? new RichText($criteriaOutcome["Feedback"]) : new RichText();

        return ["Feedback" => $feedback, "LevelId" => $levelId];
    }

}
