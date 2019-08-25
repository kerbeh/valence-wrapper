<?php
namespace ValenceWrapper\Model\ExportJobData;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * This composite contains information about a data export job.
 * @see https://docs.valence.desire2learn.com#DataExport.ExportJobData
 * The GUID for a given export of a particular data set.
 *
 * The GUID representing a specific data set type.
 *
 * The category of the data set on the back-end service (e.g. Insights).
 */
class ExportJobData
{
	/**
	 * @param ExportJobId
	 * @type <string:GUID>
	 */
	private $ExportJobId;

	/**
	 * @param DataSetId
	 * @type <string:GUID>
	 */
	private $DataSetId;

	/**
	 * @param Name
	 * @type <string>
	 */
	private $Name;

	/**
	 * @param SubmitDate
	 * @type <string:UTCDateTime>
	 */
	private $SubmitDate;

	/**
	 * @param Status
	 * @type <int:EXPORTJOBSTATUS_T>
	 */
	private $Status;

	/**
	 * @param Category
	 * @type <string>
	 */
	private $Category;


	/**
	 * Constructor for ExportJobData
	 */
	public function __construct(array $attributes = [])
	{
		$this->ExportJobId = $attributes["ExportJobId"];
		$this->DataSetId = $attributes["DataSetId"];
		$this->Name = $attributes["Name"];
		$this->SubmitDate = $attributes["SubmitDate"];
		$this->Status = $attributes["Status"];
		$this->Category = $attributes["Category"];
	}
}
