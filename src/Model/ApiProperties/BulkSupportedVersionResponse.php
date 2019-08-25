<?php
namespace ValenceWrapper\Model\BulkSupportedVersionResponse;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you make a query about whether one or more product components support
 * your provided versions, the framework responds with a JSON block like this:
 * @see https://docs.valence.desire2learn.com#versions
 */
class BulkSupportedVersionResponse
{
	/**
	 * @param Supported
	 * @type <boolean>
	 */
	private $Supported;


	/**
	 * Constructor for BulkSupportedVersionResponse
	 */
	public function __construct(array $attributes = [])
	{
		$this->Supported = $attributes["Supported"];
	}
}
