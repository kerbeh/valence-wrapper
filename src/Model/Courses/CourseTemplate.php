<?php
namespace ValenceWrapper\Model\CourseTemplate;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * @see https://docs.valence.desire2learn.com#Course.CourseTemplate
 */
class CourseTemplate
{
	/**
	 * @param Identifier
	 * @type <string:D2LID>
	 */
	private $Identifier;

	/**
	 * @param Code
	 * @type <string>
	 */
	private $Code;

	/**
	 * @param Name
	 * @type <string>
	 */
	private $Name;

	/**
	 * @param Path
	 * @type <string>
	 */
	private $Path;


	/**
	 * Constructor for CourseTemplate
	 */
	public function __construct(array $attributes = [])
	{
		$this->Identifier = $attributes["Identifier"];
		$this->Code = $attributes["Code"];
		$this->Name = $attributes["Name"];
		$this->Path = $attributes["Path"];
	}
}
