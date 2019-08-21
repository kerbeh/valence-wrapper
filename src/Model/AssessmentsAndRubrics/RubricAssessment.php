<?php
namespace ValenceWrapper\Model\RubricAssessment;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Defines an assessment with accompanying rubric.
 * @see https://docs.valence.desire2learn.com#Rubric.RubricAssessment
 */
class RubricAssessment
{
	/**
	 * @param Feedback
	 * @type { <composite:RichText> }
	 */
	private $Feedback;

	/**
	 * @param RubricId
	 * @type <number:D2LID>
	 */
	private $RubricId;

	/**
	 * @param OverallScore
	 * @type <number:decimal>
	 */
	private $OverallScore;

	/**
	 * @param OverallFeedback
	 * @type { <composite:RichText> }
	 */
	private $OverallFeedback;

	/**
	 * @param OverallLevel
	 * @type {
	 */
	private $OverallLevel;

	/**
	 * @param LevelId
	 * @type <number:D2LID>
	 */
	private $LevelId;

	/**
	 * @param OverallScoreOverridden
	 * @type <boolean>
	 */
	private $OverallScoreOverridden;

	/**
	 * @param OverallFeedbackOverridden
	 * @type <boolean>
	 */
	private $OverallFeedbackOverridden;


	/**
	 * Constructor for RubricAssessment
	 */
	public function __construct(array $attributes = [])
	{
		$this->Feedback = $attributes["Feedback"];
		$this->RubricId = $attributes["RubricId"];
		$this->OverallScore = $attributes["OverallScore"];
		$this->OverallFeedback = $attributes["OverallFeedback"];
		$this->OverallLevel = $attributes["OverallLevel"];
		$this->LevelId = $attributes["LevelId"];
		$this->OverallScoreOverridden = $attributes["OverallScoreOverridden"];
		$this->OverallFeedbackOverridden = $attributes["OverallFeedbackOverridden"];
	}
}
