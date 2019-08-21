<?php
namespace ValenceWrapper\Model\QuizReadData;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When the service sends you information about a quiz, it will send back a
 * JSON structure like this:
 * @see https://docs.valence.desire2learn.com#QuizReadData
 * If not null (and visible to the calling user context), the current
 * password set for the quiz.
 *
 * If the IsUnlimited property is True, then the
 * NumberOfAttemptsAllowed property will be null; if IsUnlimited is
 * False, then NumberOfAttemptsAllowed will contain the number of
 * attempts allowed (default value is 1).
 */
class QuizReadData
{
	/**
	 * @param SubmissionTimeLimit
	 * @type {
	 */
	private $SubmissionTimeLimit;

	/**
	 * @param IsEnforced
	 * @type <boolean>
	 */
	private $IsEnforced;

	/**
	 * @param ShowClock
	 * @type <boolean>
	 */
	private $ShowClock;

	/**
	 * @param TimeLimitValue
	 * @type <number>
	 */
	private $TimeLimitValue;

	/**
	 * @param SubmissionGracePeriod
	 * @type <number>
	 */
	private $SubmissionGracePeriod;

	/**
	 * @param Password
	 * @type <string>
	 */
	private $Password;

	/**
	 * @param QuizId
	 * @type <number:D2LID>
	 */
	private $QuizId;

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
	 * @param Text
	 * @type { <composite:RichText> }
	 */
	private $Text;

	/**
	 * @param IsDisplayed
	 * @type <boolean>
	 */
	private $IsDisplayed;

	/**
	 * @param Description
	 * @type {
	 */
	private $Description;

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
	 * @param AttemptsAllowed
	 * @type {
	 */
	private $AttemptsAllowed;

	/**
	 * @param IsUnlimited
	 * @type <boolean>
	 */
	private $IsUnlimited;

	/**
	 * @param NumberOfAttemptsAllowed
	 * @type <number>
	 */
	private $NumberOfAttemptsAllowed;

	/**
	 * @param LateSubmissionInfo
	 * @type {
	 */
	private $LateSubmissionInfo;

	/**
	 * @param LateSubmissionOption
	 * @type <number:LATESUBMISSIONOPTION_T>
	 */
	private $LateSubmissionOption;

	/**
	 * @param LateLimitMinutes
	 * @type <number>
	 */
	private $LateLimitMinutes;


	/**
	 * Constructor for QuizReadData
	 */
	public function __construct(array $attributes = [])
	{
		$this->SubmissionTimeLimit = $attributes["SubmissionTimeLimit"];
		$this->IsEnforced = $attributes["IsEnforced"];
		$this->ShowClock = $attributes["ShowClock"];
		$this->TimeLimitValue = $attributes["TimeLimitValue"];
		$this->SubmissionGracePeriod = $attributes["SubmissionGracePeriod"];
		$this->Password = $attributes["Password"];
		$this->QuizId = $attributes["QuizId"];
		$this->Name = $attributes["Name"];
		$this->IsActive = $attributes["IsActive"];
		$this->SortOrder = $attributes["SortOrder"];
		$this->AutoExportToGrades = $attributes["AutoExportToGrades"];
		$this->GradeItemId = $attributes["GradeItemId"];
		$this->IsAutoSetGraded = $attributes["IsAutoSetGraded"];
		$this->Instructions = $attributes["Instructions"];
		$this->Text = $attributes["Text"];
		$this->IsDisplayed = $attributes["IsDisplayed"];
		$this->Description = $attributes["Description"];
		$this->StartDate = $attributes["StartDate"];
		$this->EndDate = $attributes["EndDate"];
		$this->DueDate = $attributes["DueDate"];
		$this->DisplayInCalendar = $attributes["DisplayInCalendar"];
		$this->AttemptsAllowed = $attributes["AttemptsAllowed"];
		$this->IsUnlimited = $attributes["IsUnlimited"];
		$this->NumberOfAttemptsAllowed = $attributes["NumberOfAttemptsAllowed"];
		$this->LateSubmissionInfo = $attributes["LateSubmissionInfo"];
		$this->LateSubmissionOption = $attributes["LateSubmissionOption"];
		$this->LateLimitMinutes = $attributes["LateLimitMinutes"];
	}
}
