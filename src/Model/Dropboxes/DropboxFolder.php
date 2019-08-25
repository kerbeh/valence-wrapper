<?php
namespace ValenceWrapper\Model\DropboxFolder;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you use actions that retrieve dropbox folder information,
 * the service provides a block like this:
 * @see https://docs.valence.desire2learn.com#Dropbox.DropboxFolder
 * If this property is present and not null, the dropbox folder has an
 * associated assessment, with an optional ScoreDenominator property, and
 * an array of Rubric blocks.
 *
 * If the property is present and not null, the dropbox folder is a
 * group-submission folder; otherwise, the dropbox folder is an
 * individual-submission folder. If the property is present with a non-null
 * value, it contains a D2LID for the group’s
 * GroupCategoryId.
 *
 * If this property is present and not null, the dropbox folder has a
 * due date for submission. If the property is present with a non-null
 * value, it contains a UTCDateTime.
 *
 * A date only appears in user’s calendars if this property is true (it’s
 * false by default).  When true, the back-end service uses a priority order
 * to chose the date to put in the calendar. If there’s a due date, that
 * gets used by preference. If not, then the the service uses the end
 * date. If again not, then finally the service uses the start date. When
 * true, the back-end service _must_ have one of these dates to use (so, on
 * create or update, you must provide at least one of them).
 *
 * A comma separated list of email addresses which will be sent a notification when any
 * files are submitted to the folder. If this field is empty or null, no notification
 * will be sent.
 *
 * If not null, identifies the underlying activity for this dropbox.
 */
class DropboxFolder
{
	/**
	 * @param Assessment
	 * @type {
	 */
	private $Assessment;

	/**
	 * @param ScoreDenominator
	 * @type <number:decimal>
	 */
	private $ScoreDenominator;

	/**
	 * @param Rubrics
	 * @type
	 */
	private $Rubrics;

	/**
	 * @param Id
	 * @type <number:D2LID>
	 */
	private $Id;

	/**
	 * @param CategoryId
	 * @type <number:D2LID>
	 */
	private $CategoryId;

	/**
	 * @param Name
	 * @type <string>
	 */
	private $Name;

	/**
	 * @param CustomInstructions
	 * @type
	 */
	private $CustomInstructions;

	/**
	 * @param TotalFiles
	 * @type <number>
	 */
	private $TotalFiles;

	/**
	 * @param UnreadFiles
	 * @type <number>
	 */
	private $UnreadFiles;

	/**
	 * @param FlaggedFiles
	 * @type <number>
	 */
	private $FlaggedFiles;

	/**
	 * @param TotalUsers
	 * @type <number>
	 */
	private $TotalUsers;

	/**
	 * @param TotalUsersWithSubmissions
	 * @type <number>
	 */
	private $TotalUsersWithSubmissions;

	/**
	 * @param TotalUsersWithFeedback
	 * @type <number>
	 */
	private $TotalUsersWithFeedback;

	/**
	 * @param Availability
	 * @type {
	 */
	private $Availability;

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
	 * @param GroupTypeId
	 * @type <number:D2LID>
	 */
	private $GroupTypeId;

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
	 * @param NotificationEmail
	 * @type <string>
	 */
	private $NotificationEmail;

	/**
	 * @param IsHidden
	 * @type <boolean>
	 */
	private $IsHidden;

	/**
	 * @param ActivityId
	 * @type <string>
	 */
	private $ActivityId;

	/**
	 * @param IsAnonymous
	 * @type <boolean>
	 */
	private $IsAnonymous;

	/**
	 * @param DropboxType
	 * @type <string:DROPBOXTYPE_T>
	 */
	private $DropboxType;

	/**
	 * @param SubmissionType
	 * @type <string:SUBMISSIONTYPE_T>
	 */
	private $SubmissionType;

	/**
	 * @param CompletionType
	 * @type <string:COMPLETIONTYPE_T>
	 */
	private $CompletionType;


	/**
	 * Constructor for DropboxFolder
	 */
	public function __construct(array $attributes = [])
	{
		$this->Assessment = $attributes["Assessment"];
		$this->ScoreDenominator = $attributes["ScoreDenominator"];
		$this->Rubrics = $attributes["Rubrics"];
		$this->Id = $attributes["Id"];
		$this->CategoryId = $attributes["CategoryId"];
		$this->Name = $attributes["Name"];
		$this->CustomInstructions = $attributes["CustomInstructions"];
		$this->TotalFiles = $attributes["TotalFiles"];
		$this->UnreadFiles = $attributes["UnreadFiles"];
		$this->FlaggedFiles = $attributes["FlaggedFiles"];
		$this->TotalUsers = $attributes["TotalUsers"];
		$this->TotalUsersWithSubmissions = $attributes["TotalUsersWithSubmissions"];
		$this->TotalUsersWithFeedback = $attributes["TotalUsersWithFeedback"];
		$this->Availability = $attributes["Availability"];
		$this->StartDate = $attributes["StartDate"];
		$this->EndDate = $attributes["EndDate"];
		$this->GroupTypeId = $attributes["GroupTypeId"];
		$this->DueDate = $attributes["DueDate"];
		$this->DisplayInCalendar = $attributes["DisplayInCalendar"];
		$this->NotificationEmail = $attributes["NotificationEmail"];
		$this->IsHidden = $attributes["IsHidden"];
		$this->ActivityId = $attributes["ActivityId"];
		$this->IsAnonymous = $attributes["IsAnonymous"];
		$this->DropboxType = $attributes["DropboxType"];
		$this->SubmissionType = $attributes["SubmissionType"];
		$this->CompletionType = $attributes["CompletionType"];
	}
}
