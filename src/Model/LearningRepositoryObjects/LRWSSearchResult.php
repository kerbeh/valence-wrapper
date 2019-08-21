<?php
namespace ValenceWrapper\Model\LRWSSearchResult;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * @see https://docs.valence.desire2learn.com#Repository.LRWSSearchResult
 */
class LRWSSearchResult
{
	/**
	 * @param RepositoryId
	 * @type <number>
	 */
	private $RepositoryId;

	/**
	 * @param IdentId
	 * @type <number>
	 */
	private $IdentId;

	/**
	 * @param Version
	 * @type <number>
	 */
	private $Version;

	/**
	 * @param URL
	 * @type <string>
	 */
	private $Url;

	/**
	 * @param Title
	 * @type <string>
	 */
	private $Title;

	/**
	 * @param OrgId
	 * @type <number>
	 */
	private $OrgId;

	/**
	 * @param TypeId
	 * @type <number:LR_OBJECT_T>
	 */
	private $TypeId;


	/**
	 * Constructor for LRWSSearchResult
	 */
	public function __construct(array $attributes = [])
	{
		$this->RepositoryId = $attributes["RepositoryId"];
		$this->IdentId = $attributes["IdentId"];
		$this->Version = $attributes["Version"];
		$this->URL = $attributes["URL"];
		$this->Title = $attributes["Title"];
		$this->OrgId = $attributes["OrgId"];
		$this->TypeId = $attributes["TypeId"];
	}
}
