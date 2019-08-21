<?php
namespace ValenceWrapper\Model\CreateExportJobData;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * This composite contains information about the built-in data set you want
 * to use for your data export.
 * @see https://docs.valence.desire2learn.com#DataExport.CreateExportJobData
 * The GUID for an available data set on the back-end service.
 */
class CreateExportJobData
{
	/**
	 * @param DataSetId
	 * @type <string:GUID>
	 */
	private $DataSetId;


	/**
	 * Constructor for CreateExportJobData
	 */
	public function __construct(array $attributes = [])
	{
		$this->DataSetId = $attributes["DataSetId"];
	}
}
