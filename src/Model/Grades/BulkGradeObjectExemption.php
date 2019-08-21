<?php
namespace ValenceWrapper\Model\BulkGradeObjectExemption;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * The time the BulkGradeObjectExemptionResult is originally requested. Used for
 * conflict checking prior to updating exemption data.
 * @see https://docs.valence.desire2learn.com#bulk-grade-exemptions
 */
class BulkGradeObjectExemption
{
	/**
	 * @param GradeObjectCategory
	 * @type <composite:BulkGradeObjectCategory>
	 */
	private $GradeObjectCategory;

	/**
	 * @param GradeObjectId
	 * @type <number:D2LID>
	 */
	private $GradeObjectId;

	/**
	 * @param GradeObjectName
	 * @type <string>
	 */
	private $GradeObjectName;

	/**
	 * @param GradeObjectType
	 * @type <number:GRADEOBJ_T>
	 */
	private $GradeObjectType;

	/**
	 * @param GradeValue
	 * @type <composite:GradeObjectValue>
	 */
	private $GradeValue;

	/**
	 * @param IsExempt
	 * @type <boolean>
	 */
	private $IsExempt;


	/**
	 * Constructor for BulkGradeObjectExemption
	 */
	public function __construct(array $attributes = [])
	{
		$this->GradeObjectCategory = $attributes["GradeObjectCategory"];
		$this->GradeObjectId = $attributes["GradeObjectId"];
		$this->GradeObjectName = $attributes["GradeObjectName"];
		$this->GradeObjectType = $attributes["GradeObjectType"];
		$this->GradeValue = $attributes["GradeValue"];
		$this->IsExempt = $attributes["IsExempt"];
	}
}
