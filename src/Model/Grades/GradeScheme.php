<?php
namespace ValenceWrapper\Model\GradeScheme;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * @see https://docs.valence.desire2learn.com#grade-schemes
 */
class GradeScheme
{
	/**
	 * @param Id
	 * @type <number:D2LID>
	 */
	private $Id;

	/**
	 * @param Name
	 * @type <string>
	 */
	private $Name;

	/**
	 * @param ShortName
	 * @type <string>
	 */
	private $ShortName;


	/**
	 * Constructor for GradeScheme
	 */
	public function __construct(array $attributes = [])
	{
		$this->Id = $attributes["Id"];
		$this->Name = $attributes["Name"];
		$this->ShortName = $attributes["ShortName"];
	}
}
