<?php
namespace ValenceWrapper\Model\CustomParameter;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Encapsulates a custom LTI parameter in a name-value pair.
 * @see https://docs.valence.desire2learn.com#LTI.CustomParameter
 */
class CustomParameter
{
	/**
	 * @param Name
	 * @type <string>
	 */
	private $Name;

	/**
	 * @param Value
	 * @type <string>
	 */
	private $Value;


	/**
	 * Constructor for CustomParameter
	 */
	public function __construct(array $attributes = [])
	{
		$this->Name = $attributes["Name"];
		$this->Value = $attributes["Value"];
	}
}
