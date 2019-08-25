<?php
namespace ValenceWrapper\Model\ForumData;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you use actions that create or edit a Forum on the service, you should
 * provide a block that looks like this:
 * @see https://docs.valence.desire2learn.com#Discussions.ForumData
 * Note that this property requires a RichText structure, and
 * follows this general behaviour: if you provide a value for the Html
 * property, the new forum will use that; otherwise, the new forum will use
 * the value of the Text property.
 *
 * If true, the forum’s description (if present) will be displayed above
 * the topic description when viewing topics in the Discussions tool.
 * Default is false.
 *
 * If true, the contents of the forum won’t be visible to a user until the user
 * creates a post for the forum; otherwise, if the user has permission to
 * view the forum, the forum’s posts will be visible whether or not the user
 * has posted.
 *
 * If true, the start date and end date of the forum (if they exist) will
 * appear in the calendars of all users who can see the forum. Default is
 * false. This cannot be true if neither start date nor end date is
 * provided (400 error).
 *
 * If true, the posting start date and posting end date of the forum (if
 * they exist) will appear in the calendars of all users who can see the
 * forum. Default is false. This cannot be true if neither post start date
 * nor post end date is provided (400 error).
 */
class ForumData
{
	/**
	 * @param Description
	 * @type { <composite:RichText> }
	 */
	private $Description;

	/**
	 * @param Name
	 * @type <string>
	 */
	private $Name;

	/**
	 * @param ShowDescriptionInTopics
	 * @type <boolean>
	 */
	private $ShowDescriptionInTopics;

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
	 * @param PostStartDate
	 * @type <string:UTCDateTime>
	 */
	private $PostStartDate;

	/**
	 * @param PostEndDate
	 * @type <string:UTCDateTime>
	 */
	private $PostEndDate;

	/**
	 * @param AllowAnonymous
	 * @type <boolean>
	 */
	private $AllowAnonymous;

	/**
	 * @param IsLocked
	 * @type <boolean>
	 */
	private $IsLocked;

	/**
	 * @param IsHidden
	 * @type <boolean>
	 */
	private $IsHidden;

	/**
	 * @param RequiresApproval
	 * @type <boolean>
	 */
	private $RequiresApproval;

	/**
	 * @param MustPostToParticipate
	 * @type <boolean>
	 */
	private $MustPostToParticipate;

	/**
	 * @param DisplayInCalendar
	 * @type <boolean>
	 */
	private $DisplayInCalendar;

	/**
	 * @param DisplayPostDatesInCalendar
	 * @type <boolean>
	 */
	private $DisplayPostDatesInCalendar;


	/**
	 * Constructor for ForumData
	 */
	public function __construct(array $attributes = [])
	{
		$this->Description = $attributes["Description"];
		$this->Name = $attributes["Name"];
		$this->ShowDescriptionInTopics = $attributes["ShowDescriptionInTopics"];
		$this->StartDate = $attributes["StartDate"];
		$this->EndDate = $attributes["EndDate"];
		$this->PostStartDate = $attributes["PostStartDate"];
		$this->PostEndDate = $attributes["PostEndDate"];
		$this->AllowAnonymous = $attributes["AllowAnonymous"];
		$this->IsLocked = $attributes["IsLocked"];
		$this->IsHidden = $attributes["IsHidden"];
		$this->RequiresApproval = $attributes["RequiresApproval"];
		$this->MustPostToParticipate = $attributes["MustPostToParticipate"];
		$this->DisplayInCalendar = $attributes["DisplayInCalendar"];
		$this->DisplayPostDatesInCalendar = $attributes["DisplayPostDatesInCalendar"];
	}
}
