<?php
namespace ValenceWrapper\Model\ContentObjectData;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you use an action to provide course content information, you use one of
 * two types of ContentObjectData JSON blocks (and use the Type property to
 * indicate which type it is):
 * @see https://docs.valence.desire2learn.com#Content.ContentObjectData
 * This rich text property is optional and may be empty or null.
 *
 * This field may not be empty, null, or consist only of white-space
 * characters.
 *
 * This field may be empty or null.
 *
 * In modules, this property has the value 0; in topics, this property has
 * the value 1.
 */
class ContentObjectData
{
	/**
	 * @param Description
	 * @type { <composite:RichTextInput> }
	 */
	private $Description;

	/**
	 * @param Title
	 * @type <string>
	 */
	private $Title;

	/**
	 * @param ShortTitle
	 * @type <string>
	 */
	private $ShortTitle;

	/**
	 * @param Type
	 * @type 0
	 */
	private $Type;

	/**
	 * @param ModuleStartDate
	 * @type <string:UTCDateTime>
	 */
	private $ModuleStartDate;

	/**
	 * @param ModuleEndDate
	 * @type <string:UTCDateTime>
	 */
	private $ModuleEndDate;

	/**
	 * @param ModuleDueDate
	 * @type <string:UTCDateTime>
	 */
	private $ModuleDueDate;

	/**
	 * @param IsHidden
	 * @type <boolean>
	 */
	private $IsHidden;

	/**
	 * @param IsLocked
	 * @type <boolean>
	 */
	private $IsLocked;

	/**
	 * @param Duration
	 * @type <number>
	 */
	private $Duration;


	/**
	 * Constructor for ContentObjectData
	 */
	public function __construct(array $attributes = [])
	{
		$this->Description = $attributes["Description"];
		$this->Title = $attributes["Title"];
		$this->ShortTitle = $attributes["ShortTitle"];
		$this->Type = $attributes["Type"];
		$this->ModuleStartDate = $attributes["ModuleStartDate"];
		$this->ModuleEndDate = $attributes["ModuleEndDate"];
		$this->ModuleDueDate = $attributes["ModuleDueDate"];
		$this->IsHidden = $attributes["IsHidden"];
		$this->IsLocked = $attributes["IsLocked"];
		$this->Duration = $attributes["Duration"];
	}
}
