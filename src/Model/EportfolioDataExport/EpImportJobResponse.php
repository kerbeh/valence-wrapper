<?php
namespace ValenceWrapper\Model\EpImportJobResponse;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you use an action to create an import job with some immediate response
 * details, the details get sent back in a JSON data block that looks like this:
 * @see https://docs.valence.desire2learn.com#EP.EpImportJobResponse
 */
class EpImportJobResponse
{
	/**
	 * @param ImportJobResultType
	 * @type <string>
	 */
	private $ImportJobResultType;


	/**
	 * Constructor for EpImportJobResponse
	 */
	public function __construct(array $attributes = [])
	{
		$this->ImportJobResultType = $attributes["ImportJobResultType"];
	}
}
