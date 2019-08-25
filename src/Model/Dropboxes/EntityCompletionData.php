<?php
namespace ValenceWrapper\Model\EntityCompletionData;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you use this API to set the completion status of an entity, you provide the completion
 * value:
 * @see https://docs.valence.desire2learn.com#Dropbox.EntityCompletionData
 */
class EntityCompletionData
{
	/**
	 * @param IsComplete
	 * @type <boolean>
	 */
	private $IsComplete;


	/**
	 * Constructor for EntityCompletionData
	 */
	public function __construct(array $attributes = [])
	{
		$this->IsComplete = $attributes["IsComplete"];
	}
}
