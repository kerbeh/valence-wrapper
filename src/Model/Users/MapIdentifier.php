<?php
namespace ValenceWrapper\Model\MapIdentifier;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * For updating and retrieval, the back-end service uses this structure to
 * carry a global user map identifier for a user that can identify that user
 * across a consortium of Brightspace tenants:
 * @see https://docs.valence.desire2learn.com#global-user-mapping
 */
class MapIdentifier
{
	/**
	 * @param Identifier
	 * @type <string:D2LID>
	 */
	private $Identifier;


	/**
	 * Constructor for MapIdentifier
	 */
	public function __construct(array $attributes = [])
	{
		$this->Identifier = $attributes["Identifier"];
	}
}
