<?php
namespace ValenceWrapper\Model\AssociatedEntity;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * @see https://docs.valence.desire2learn.com#Calendar.AssociatedEntity
 */
class AssociatedEntity
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
	 * Constructor for AssociatedEntity
	 */
	public function __construct(array $attributes = [])
	{
		$this->AssociatedEntityType = $attributes["AssociatedEntityType"];
		$this->AssociatedEntityId = $attributes["AssociatedEntityId"];
	}
}
