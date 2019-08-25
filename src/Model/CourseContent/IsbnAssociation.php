<?php
namespace ValenceWrapper\Model\IsbnAssociation;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * The ISBN actions support
 * ISO 2108:2005 standard
 * 10- and 13-digit ISBN numbers passed as strings in JSON blocks and HTTP query parameter values.
 * @see https://docs.valence.desire2learn.com#isbn
 * If this property is present, it will be either true (to indicate that the
 * content item is required for the org unit) or false (to indicate the
 * content item is optional for the org unit).
 */
class IsbnAssociation
{
	/**
	 * @param OrgUnitId
	 * @type <number:D2LID>
	 */
	private $OrgUnitId;

	/**
	 * @param Isbn
	 * @type <string>
	 */
	private $Isbn;

	/**
	 * @param IsRequired
	 * @type <boolean>
	 */
	private $IsRequired;


	/**
	 * Constructor for IsbnAssociation
	 */
	public function __construct(array $attributes = [])
	{
		$this->OrgUnitId = $attributes["OrgUnitId"];
		$this->Isbn = $attributes["Isbn"];
		$this->IsRequired = $attributes["IsRequired"];
	}
}
