<?php
namespace ValenceWrapper\Model\CourseTemplateInfo;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Note that org unit code values have these limitations:
 * @see https://docs.valence.desire2learn.com#Course.CourseTemplateInfo
 */
class CourseTemplateInfo
{
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
	 * Constructor for CourseTemplateInfo
	 */
	public function __construct(array $attributes = [])
	{
		$this->Name = $attributes["Name"];
		$this->Code = $attributes["Code"];
	}
}
