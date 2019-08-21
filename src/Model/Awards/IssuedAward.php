<?php
namespace ValenceWrapper\Model\IssuedAward;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you use an action that retrieves an issued award, the
 * service returns a block like this:
 * @see https://docs.valence.desire2learn.com#issuedaward
 * The user ID of the person who issued the award.
 *
 * The user ID of the person to issue the award to.
 *
 * This property contains a list of sharing types describing the sharing
 * relationship with respect to another corresponding service endpoint.
 * If the type name starts with “With”, this indicates that you can share
 * the award to the corresponding service; if the type starts with “SentTo”,
 * this indicates the back-end has already shared the award to the
 * corresponding service.
 *
 * The ePortfolio item the award is shared to.
 */
class IssuedAward
{
	/**
	 * @param Award
	 * @type { <composite:Awards.Award> }
	 */
	private $Award;

	/**
	 * @param IssuedId
	 * @type <number:D2LID>
	 */
	private $IssuedId;

	/**
	 * @param OrgUnitId
	 * @type <number:D2LID>
	 */
	private $OrgUnitId;

	/**
	 * @param Criteria
	 * @type <string>
	 */
	private $Criteria;

	/**
	 * @param Evidence
	 * @type <string>
	 */
	private $Evidence;

	/**
	 * @param IssuedDate
	 * @type <string:UTCDateTime>
	 */
	private $IssuedDate;

	/**
	 * @param ExpiryDate
	 * @type <string:UTCDateTime>
	 */
	private $ExpiryDate;

	/**
	 * @param IssuedByUserId
	 * @type <number:D2LID>
	 */
	private $IssuedByUserId;

	/**
	 * @param IssuedToUserId
	 * @type <number:D2LID>
	 */
	private $IssuedToUserId;

	/**
	 * @param Credit
	 * @type <number:decimal>
	 */
	private $Credit;

	/**
	 * @param Share
	 * @type {
	 */
	private $Share;

	/**
	 * @param SentToProfile
	 * @type <boolean>
	 */
	private $SentToProfile;

	/**
	 * @param SentToMozilla
	 * @type <boolean>
	 */
	private $SentToMozilla;

	/**
	 * @param SentToEportfolio
	 * @type <boolean>
	 */
	private $SentToEportfolio;

	/**
	 * @param SharedObjectId
	 * @type <number:D2LID>
	 */
	private $SharedObjectId;

	/**
	 * @param WithProfile
	 * @type <boolean>
	 */
	private $WithProfile;

	/**
	 * @param WithMozilla
	 * @type <boolean>
	 */
	private $WithMozilla;

	/**
	 * @param WithEportfolio
	 * @type <boolean>
	 */
	private $WithEportfolio;


	/**
	 * Constructor for IssuedAward
	 */
	public function __construct(array $attributes = [])
	{
		$this->Award = $attributes["Award"];
		$this->IssuedId = $attributes["IssuedId"];
		$this->OrgUnitId = $attributes["OrgUnitId"];
		$this->Criteria = $attributes["Criteria"];
		$this->Evidence = $attributes["Evidence"];
		$this->IssuedDate = $attributes["IssuedDate"];
		$this->ExpiryDate = $attributes["ExpiryDate"];
		$this->IssuedByUserId = $attributes["IssuedByUserId"];
		$this->IssuedToUserId = $attributes["IssuedToUserId"];
		$this->Credit = $attributes["Credit"];
		$this->Share = $attributes["Share"];
		$this->SentToProfile = $attributes["SentToProfile"];
		$this->SentToMozilla = $attributes["SentToMozilla"];
		$this->SentToEportfolio = $attributes["SentToEportfolio"];
		$this->SharedObjectId = $attributes["SharedObjectId"];
		$this->WithProfile = $attributes["WithProfile"];
		$this->WithMozilla = $attributes["WithMozilla"];
		$this->WithEportfolio = $attributes["WithEportfolio"];
	}
}
