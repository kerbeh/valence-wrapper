<?php
namespace ValenceWrapper\Model\QuizData;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When updating quiz data, use a JSON structure like this:
 * @see https://docs.valence.desire2learn.com#QuizData
 */
class QuizData
{
	/**
	 * @param Description
	 * @type {
	 */
	private $Description;

	/**
	 * @param Text
	 * @type { <composite:RichTextInput> }
	 */
	private $Text;

	/**
	 * @param Name
	 * @type <string>
	 */
	private $Name;

	/**
	 * @param IsActive
	 * @type <boolean>
	 */
	private $IsActive;

	/**
	 * @param SortOrder
	 * @type <number>
	 */
	private $SortOrder;

	/**
	 * @param AutoExportToGrades
	 * @type <boolean>
	 */
	private $AutoExportToGrades;

	/**
	 * @param GradeItemId
	 * @type <number:D2LID>
	 */
	private $GradeItemId;

	/**
	 * @param IsAutoSetGraded
	 * @type <boolean>
	 */
	private $IsAutoSetGraded;

	/**
	 * @param Instructions
	 * @type {
	 */
	private $Instructions;

	/**
	 * @param IsDisplayed
	 * @type <boolean>
	 */
	private $IsDisplayed;

	/**
	 * @param StartDate
	 * @type <string:UTCDateTime>
	 */
	private $StartDate;

	/**
	 * @param EndDate
	 * @type <string:UTCDateTime>
	 */
	private $EndDate;

	/**
	 * @param DueDate
	 * @type <string:UTCDateTime>
	 */
	private $DueDate;

	/**
	 * @param DisplayInCalendar
	 * @type <boolean>
	 */
	private $DisplayInCalendar;


	/**
	 * Constructor for QuizData
	 */
	public function __construct(array $attributes = [])
	{
		$this->Description = $attributes["Description"];
		$this->Text = $attributes["Text"];
		$this->Name = $attributes["Name"];
		$this->IsActive = $attributes["IsActive"];
		$this->SortOrder = $attributes["SortOrder"];
		$this->AutoExportToGrades = $attributes["AutoExportToGrades"];
		$this->GradeItemId = $attributes["GradeItemId"];
		$this->IsAutoSetGraded = $attributes["IsAutoSetGraded"];
		$this->Instructions = $attributes["Instructions"];
		$this->IsDisplayed = $attributes["IsDisplayed"];
		$this->StartDate = $attributes["StartDate"];
		$this->EndDate = $attributes["EndDate"];
		$this->DueDate = $attributes["DueDate"];
		$this->DisplayInCalendar = $attributes["DisplayInCalendar"];
	}
}
