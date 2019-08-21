<?php
namespace ValenceWrapper\Model\Award;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you use an action that retrieves award details, the service
 * returns a block like this:
 * @see https://docs.valence.desire2learn.com#award
 * This property is always null for awards of type
 * Badge (AwardType property has value ‘1’).
 */
class Award
{
	/**
	 * @param ImageData
	 * @type { <composite:Awards.FileData> }
	 */
	private $ImageData;

	/**
	 * @param AwardId
	 * @type <number:D2LID>
	 */
	private $AwardId;

	/**
	 * @param CreatedBy
	 * @type <number:D2LID>
	 */
	private $CreatedBy;

	/**
	 * @param Title
	 * @type <string>
	 */
	private $Title;

	/**
	 * @param Description
	 * @type <string>
	 */
	private $Description;

	/**
	 * @param ExpiryCalculation
	 * @type { <composite:Awards.ExpiryCalculation> }
	 */
	private $ExpiryCalculation;

	/**
	 * @param ExpiryNotification
	 * @type { <composite:Awards.ExpiryNotification> }
	 */
	private $ExpiryNotification;

	/**
	 * @param IssuerName
	 * @type <string>
	 */
	private $IssuerName;

	/**
	 * @param IssuerUrl
	 * @type <string:URL>
	 */
	private $IssuerUrl;

	/**
	 * @param IssuerContact
	 * @type <string>
	 */
	private $IssuerContact;

	/**
	 * @param AwardType
	 * @type <number:AWARD_T>
	 */
	private $AwardType;

	/**
	 * @param CertificateData
	 * @type { <composite:Awards.FileData> }
	 */
	private $CertificateData;

	/**
	 * @param IsDeleted
	 * @type <boolean>
	 */
	private $IsDeleted;


	/**
	 * Constructor for Award
	 */
	public function __construct(array $attributes = [])
	{
		$this->ImageData = $attributes["ImageData"];
		$this->AwardId = $attributes["AwardId"];
		$this->CreatedBy = $attributes["CreatedBy"];
		$this->Title = $attributes["Title"];
		$this->Description = $attributes["Description"];
		$this->ExpiryCalculation = $attributes["ExpiryCalculation"];
		$this->ExpiryNotification = $attributes["ExpiryNotification"];
		$this->IssuerName = $attributes["IssuerName"];
		$this->IssuerUrl = $attributes["IssuerUrl"];
		$this->IssuerContact = $attributes["IssuerContact"];
		$this->AwardType = $attributes["AwardType"];
		$this->CertificateData = $attributes["CertificateData"];
		$this->IsDeleted = $attributes["IsDeleted"];
	}
}
