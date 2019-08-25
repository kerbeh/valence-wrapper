<?php
namespace ValenceWrapper\Model\CreateTopicData;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Discussion topics can be rated in different ways, classified by type. We
 * use the term RATING_T to stand in for an appropriate integer value.
 * @see https://docs.valence.desire2learn.com#topics
 * Note that although this property gets passed as a string, you should
 * use the appropriate numeric value for the topic’s scoring type.
 *
 * If true, the contents of the topic won’t be visible to a user until the user
 * creates a post for the topic; otherwise, if the user has permission to
 * view the topic, the topic’s posts will be visible whether or not the user
 * has posted.
 *
 * If null, this topic inherents the org unit’s default rating type. If not
 * null, sets the rating type for this discussion topic.
 *
 * If true, the start date and end date of the topic (if they exist) will
 * appear in the calendars of all users who can see the topic. Default is
 * false. This cannot be true if neither start date nor end date is
 * provided (400 error).
 *
 * If true, the unlock start date and unlock end date of the topic (if
 * they exist) will appear in the calendars of all users who can see the
 * topic. Default is false. This cannot be true if neither unlock start date
 * nor unlock end date is provided (400 error).
 *
 * If set, it specifies that the topic is associated with a group category.
 * The group category specified must be in the same org unit as the topic.
 */
class CreateTopicData
{
	/**
	 * @param Description
	 * @type { <composite:RichTextInput> }
	 */
	private $Description;

	/**
	 * @param Name
	 * @type <string>
	 */
	private $Name;

	/**
	 * @param AllowAnonymousPosts
	 * @type <boolean>
	 */
	private $AllowAnonymousPosts;

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
	 * @param IsHidden
	 * @type <boolean>
	 */
	private $IsHidden;

	/**
	 * @param UnlockStartDate
	 * @type <string:UTCDateTime>
	 */
	private $UnlockStartDate;

	/**
	 * @param UnlockEndDate
	 * @type <string:UTCDateTime>
	 */
	private $UnlockEndDate;

	/**
	 * @param RequiresApproval
	 * @type <boolean>
	 */
	private $RequiresApproval;

	/**
	 * @param ScoreOutOf
	 * @type <number>
	 */
	private $ScoreOutOf;

	/**
	 * @param IsAutoScore
	 * @type <boolean>
	 */
	private $IsAutoScore;

	/**
	 * @param IncludeNonScoredValues
	 * @type <boolean>
	 */
	private $IncludeNonScoredValues;

	/**
	 * @param ScoringType
	 * @type <string:SCORING_T>
	 */
	private $ScoringType;

	/**
	 * @param IsLocked
	 * @type <boolean>
	 */
	private $IsLocked;

	/**
	 * @param MustPostToParticipate
	 * @type <boolean>
	 */
	private $MustPostToParticipate;

	/**
	 * @param RatingType
	 * @type <string:RATING_T>
	 */
	private $RatingType;

	/**
	 * @param DisplayInCalendar
	 * @type <boolean>
	 */
	private $DisplayInCalendar;

	/**
	 * @param DisplayUnlockDatesInCalendar
	 * @type <boolean>
	 */
	private $DisplayUnlockDatesInCalendar;

	/**
	 * @param GroupTypeId
	 * @type <number:D2LID>
	 */
	private $GroupTypeId;


	/**
	 * Constructor for CreateTopicData
	 */
	public function __construct(array $attributes = [])
	{
		$this->Description = $attributes["Description"];
		$this->Name = $attributes["Name"];
		$this->AllowAnonymousPosts = $attributes["AllowAnonymousPosts"];
		$this->StartDate = $attributes["StartDate"];
		$this->EndDate = $attributes["EndDate"];
		$this->IsHidden = $attributes["IsHidden"];
		$this->UnlockStartDate = $attributes["UnlockStartDate"];
		$this->UnlockEndDate = $attributes["UnlockEndDate"];
		$this->RequiresApproval = $attributes["RequiresApproval"];
		$this->ScoreOutOf = $attributes["ScoreOutOf"];
		$this->IsAutoScore = $attributes["IsAutoScore"];
		$this->IncludeNonScoredValues = $attributes["IncludeNonScoredValues"];
		$this->ScoringType = $attributes["ScoringType"];
		$this->IsLocked = $attributes["IsLocked"];
		$this->MustPostToParticipate = $attributes["MustPostToParticipate"];
		$this->RatingType = $attributes["RatingType"];
		$this->DisplayInCalendar = $attributes["DisplayInCalendar"];
		$this->DisplayUnlockDatesInCalendar = $attributes["DisplayUnlockDatesInCalendar"];
		$this->GroupTypeId = $attributes["GroupTypeId"];
	}
}
