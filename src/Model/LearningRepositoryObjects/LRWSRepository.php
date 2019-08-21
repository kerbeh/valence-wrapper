<?php
namespace ValenceWrapper\Model\LRWSRepository;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * @see https://docs.valence.desire2learn.com#Repository.LRWSRepository
 */
class LRWSRepository
{
	/**
	 * @param RepositoryId
	 * @type <number:D2LID>
	 */
	private $RepositoryId;

	/**
	 * @param Name
	 * @type <string>
	 */
	private $Name;

	/**
	 * @param Description
	 * @type <string>
	 */
	private $Description;

	/**
	 * @param Type
	 * @type <string>
	 */
	private $Type;

	/**
	 * @param OrgId
	 * @type <number:D2LID>
	 */
	private $OrgId;

	/**
	 * @param ObjectCount
	 * @type <number>
	 */
	private $ObjectCount;


	/**
	 * Constructor for LRWSRepository
	 */
	public function __construct(array $attributes = [])
	{
		$this->RepositoryId = $attributes["RepositoryId"];
		$this->Name = $attributes["Name"];
		$this->Description = $attributes["Description"];
		$this->Type = $attributes["Type"];
		$this->OrgId = $attributes["OrgId"];
		$this->ObjectCount = $attributes["ObjectCount"];
	}
}
