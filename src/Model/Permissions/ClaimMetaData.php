<?php
namespace ValenceWrapper\Model\ClaimMetaData;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * @see https://docs.valence.desire2learn.com#Permissions.ClaimMetaData
 */
class ClaimMetaData
{
	/**
	 * @param ClaimId
	 * @type <string>
	 */
	private $ClaimId;

	/**
	 * @param DisplayName
	 * @type <string>
	 */
	private $DisplayName;


	/**
	 * Constructor for ClaimMetaData
	 */
	public function __construct(array $attributes = [])
	{
		$this->ClaimId = $attributes["ClaimId"];
		$this->DisplayName = $attributes["DisplayName"];
	}
}
