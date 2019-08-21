<?php
namespace ValenceWrapper\Model\DropboxFolderUpdateData;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you use actions that create or update a dropbox folder on the service,
 * you should provide a block that looks like this:
 * @see https://docs.valence.desire2learn.com#Dropbox.DropboxFolderUpdateData
 */
class DropboxFolderUpdateData
{
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
	 * @param Availability
	 * @type null
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
	 * @param IsHidden
	 * @type <boolean>
	 */
	private $IsHidden;

	/**
	 * @param Assessment
	 * @type null
	 */
	private $Assessment;

	/**
	 * @param ScoreDenominator
	 * @type <number:decimal>
	 */
	private $ScoreDenominator;

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
	 * Constructor for DropboxFolderUpdateData
	 */
	public function __construct(array $attributes = [])
	{
		$this->CategoryId = $attributes["CategoryId"];
		$this->Name = $attributes["Name"];
		$this->CustomInstructions = $attributes["CustomInstructions"];
		$this->Availability = $attributes["Availability"];
		$this->StartDate = $attributes["StartDate"];
		$this->EndDate = $attributes["EndDate"];
		$this->GroupTypeId = $attributes["GroupTypeId"];
		$this->DueDate = $attributes["DueDate"];
		$this->DisplayInCalendar = $attributes["DisplayInCalendar"];
		$this->IsHidden = $attributes["IsHidden"];
		$this->Assessment = $attributes["Assessment"];
		$this->ScoreDenominator = $attributes["ScoreDenominator"];
		$this->IsAnonymous = $attributes["IsAnonymous"];
		$this->DropboxType = $attributes["DropboxType"];
		$this->SubmissionType = $attributes["SubmissionType"];
		$this->CompletionType = $attributes["CompletionType"];
	}
}
