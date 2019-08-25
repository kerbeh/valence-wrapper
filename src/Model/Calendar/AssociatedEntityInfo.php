<?php
namespace ValenceWrapper\Model\AssociatedEntityInfo;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * @see https://docs.valence.desire2learn.com#Calendar.AssociatedEntityInfo
 */
class AssociatedEntityInfo
{
	/**
	 * @param AssociatedEntityType
	 * @type <string:ASSOCENTITY_T>
	 */
	private $AssociatedEntityType;

	/**
	 * @param AssociatedEntityId
	 * @type <number:D2LID>
	 */
	private $AssociatedEntityId;

	/**
	 * @param Link
	 * @type <string>
	 */
	private $Link;


	/**
	 * Constructor for AssociatedEntityInfo
	 */
	public function __construct(array $attributes = [])
	{
		$this->AssociatedEntityType = $attributes["AssociatedEntityType"];
		$this->AssociatedEntityId = $attributes["AssociatedEntityId"];
		$this->Link = $attributes["Link"];
	}
}
