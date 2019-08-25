<?php
namespace ValenceWrapper\Model\Entity;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Entities are those users (or groups of users) that can provide submissions
 * for assessment and/or assess the submissions of other entities and provide
 * feedback.
 * @see https://docs.valence.desire2learn.com#Dropbox.Entity
 * The DisplayName will reflect the Anonymous display settings of the dropbox.
 */
class Entity
{
	/**
	 * @param EntityId
	 * @type <number:D2LID>
	 */
	private $EntityId;

	/**
	 * @param EntityType
	 * @type
	 */
	private $EntityType;

	/**
	 * @param DisplayName
	 * @type <string>
	 */
	private $DisplayName;


	/**
	 * Constructor for Entity
	 */
	public function __construct(array $attributes = [])
	{
		$this->EntityId = $attributes["EntityId"];
		$this->EntityType = $attributes["EntityType"];
		$this->DisplayName = $attributes["DisplayName"];
	}
}
