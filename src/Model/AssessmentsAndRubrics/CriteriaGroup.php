<?php
namespace ValenceWrapper\Model\CriteriaGroup;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * @see https://docs.valence.desire2learn.com#Rubric.CriteriaGroup
 */
class CriteriaGroup
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
	 * Constructor for CriteriaGroup
	 */
	public function __construct(array $attributes = [])
	{
		$this->Description = $attributes["Description"];
		$this->Name = $attributes["Name"];
	}
}
