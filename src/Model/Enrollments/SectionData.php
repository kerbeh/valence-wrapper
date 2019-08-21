<?php
namespace ValenceWrapper\Model\SectionData;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Create, Update. When you use actions that provide Section Data information to the
 * service, you should provide a block that looks like this:
 * @see https://docs.valence.desire2learn.com#sections
 * Note that section code values have these limitations:
 *
 * They cannot be more than 50 characters in length.
 * They may not contain these special characters:
 * \ : * ? “ ” < > | ‘  # , % &
 */
class SectionData
{
	/**
	 * @param Description
	 * @type { <composite:RichTextInput> }
	 */
	private $Description;

	/**
	 * @param Name
	 * @type <string>
	 */
	private $Name;

	/**
	 * @param Code
	 * @type <string>
	 */
	private $Code;


	/**
	 * Constructor for SectionData
	 */
	public function __construct(array $attributes = [])
	{
		$this->Description = $attributes["Description"];
		$this->Name = $attributes["Name"];
		$this->Code = $attributes["Code"];
	}
}
