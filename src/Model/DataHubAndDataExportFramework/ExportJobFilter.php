<?php
namespace ValenceWrapper\Model\ExportJobFilter;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * This composite contains information about a filter to apply to a data export.
 * @see https://docs.valence.desire2learn.com#DataExport.ExportJobFilter
 */
class ExportJobFilter
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
	 * Constructor for ExportJobFilter
	 */
	public function __construct(array $attributes = [])
	{
		$this->Name = $attributes["Name"];
		$this->Value = $attributes["Value"];
	}
}
