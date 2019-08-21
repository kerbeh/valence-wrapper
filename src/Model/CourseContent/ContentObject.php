<?php
namespace ValenceWrapper\Model\ContentObject;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you use an action to retrieve course content structure information, you
 * will receive one of two types of ContentObject JSON blocks (which use the
 * Type property to indicate which type it is):
 * @see https://docs.valence.desire2learn.com#Content.ContentObject
 * Some SCORM content packages can support sequencing, locking the topic
 * ordering. Content objects with this property set True don’t permit
 * content re-ordering or navigating the content out of sequence.
 *
 * When you use an action that retrieves information from the service for a
 * course’s content, you get back one of two types of ContentObject JSON
 * blocks (as indicated in the ContentObject’s Type property). In modules,
 * this property has the value 0; in topics, this property has the value 1.
 */
class ContentObject
{
	/**
	 * @param Description
	 * @type { <composite:RichText> }
	 */
	private $Description;

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
	 * @param Id
	 * @type <number:D2LID>
	 */
	private $Id;

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
	 * @param ParentModuleId
	 * @type <number:D2LID>
	 */
	private $ParentModuleId;

	/**
	 * @param Duration
	 * @type <number>
	 */
	private $Duration;

	/**
	 * @param LastModifiedDate
	 * @type <string:UTCDateTime>
	 */
	private $LastModifiedDate;


	/**
	 * Constructor for ContentObject
	 */
	public function __construct(array $attributes = [])
	{
		$this->Description = $attributes["Description"];
		$this->ModuleStartDate = $attributes["ModuleStartDate"];
		$this->ModuleEndDate = $attributes["ModuleEndDate"];
		$this->ModuleDueDate = $attributes["ModuleDueDate"];
		$this->IsHidden = $attributes["IsHidden"];
		$this->IsLocked = $attributes["IsLocked"];
		$this->Id = $attributes["Id"];
		$this->Title = $attributes["Title"];
		$this->ShortTitle = $attributes["ShortTitle"];
		$this->Type = $attributes["Type"];
		$this->ParentModuleId = $attributes["ParentModuleId"];
		$this->Duration = $attributes["Duration"];
		$this->LastModifiedDate = $attributes["LastModifiedDate"];
	}
}
