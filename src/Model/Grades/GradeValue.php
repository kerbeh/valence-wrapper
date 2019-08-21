<?php
namespace ValenceWrapper\Model\GradeValue;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * The framework can provide grade values slightly differently depending upon
 * whether the underlying grade object type is a computable value, or not
 * (basically, only Text (4) grade types are not
 * computable).
 * @see https://docs.valence.desire2learn.com#grade-values
 */
class GradeValue
{
	/**
	 * @param UserId
	 * @type <string:D2LID>
	 */
	private $UserId;

	/**
	 * @param OrgUnitId
	 * @type <string:D2LID>
	 */
	private $OrgUnitId;

	/**
	 * @param DisplayedGrade
	 * @type <string>
	 */
	private $DisplayedGrade;

	/**
	 * @param GradeObjectIdentifier
	 * @type <string:D2LID>
	 */
	private $GradeObjectIdentifier;

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
	 * @param GradeObjectTypeName
	 * @type <string>
	 */
	private $GradeObjectTypeName;

	/**
	 * @param Comments
	 * @type <composite:RichText>
	 */
	private $Comments;

	/**
	 * @param PrivateComments
	 * @type <composite:RichText>
	 */
	private $PrivateComments;

	/**
	 * @param LastModified
	 * @type <string:UTCDateTime>
	 */
	private $LastModified;

	/**
	 * @param LastModifiedBy
	 * @type <string:D2LID>
	 */
	private $LastModifiedBy;

	/**
	 * @param ReleasedDate
	 * @type <string:UTCDateTime>
	 */
	private $ReleasedDate;


	/**
	 * Constructor for GradeValue
	 */
	public function __construct(array $attributes = [])
	{
		$this->UserId = $attributes["UserId"];
		$this->OrgUnitId = $attributes["OrgUnitId"];
		$this->DisplayedGrade = $attributes["DisplayedGrade"];
		$this->GradeObjectIdentifier = $attributes["GradeObjectIdentifier"];
		$this->GradeObjectName = $attributes["GradeObjectName"];
		$this->GradeObjectType = $attributes["GradeObjectType"];
		$this->GradeObjectTypeName = $attributes["GradeObjectTypeName"];
		$this->Comments = $attributes["Comments"];
		$this->PrivateComments = $attributes["PrivateComments"];
		$this->LastModified = $attributes["LastModified"];
		$this->LastModifiedBy = $attributes["LastModifiedBy"];
		$this->ReleasedDate = $attributes["ReleasedDate"];
	}
}
