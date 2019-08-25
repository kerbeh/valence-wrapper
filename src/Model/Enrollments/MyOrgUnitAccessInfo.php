<?php
namespace ValenceWrapper\Model\MyOrgUnitAccessInfo;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * If present, presents the start date of the org unit.
 * @see https://docs.valence.desire2learn.com#Enrollment.MyOrgUnitAccessInfo
 * If present, presents the start date of the org unit.
 *
 * If present, presents the end date of the org unit.
 *
 * If present, presents the name of the D2L enrollment role as it is
 * configured to appear in the classlist.
 *
 * If present, provides the list of standard IMS LIS roles that are
 * configured for the D2L enrollment role to get sent to an LTI Tool
 * on an LTI Launch.
 */
class MyOrgUnitAccessInfo
{
	/**
	 * @param AccessInfo
	 * @type {
	 */
	private $AccessInfo;

	/**
	 * @param IsActive
	 * @type <boolean>
	 */
	private $IsActive;

	/**
	 * @param StartDate
	 * @type <string:UTCDateTime>
	 */
	private $StartDate;

	/**
	 * @param EndDate
	 * @type <string:UTCDateTime>
	 */
	private $EndDate;

	/**
	 * @param CanAccess
	 * @type <boolean>
	 */
	private $CanAccess;

	/**
	 * @param ClasslistRoleName
	 * @type <string>
	 */
	private $ClasslistRoleName;

	/**
	 * @param LISRoles
	 * @type
	 */
	private $LISRoles;

	/**
	 * @param OrgUnitId
	 * @type <number:D2LID>
	 */
	private $OrgUnitId;


	/**
	 * Constructor for MyOrgUnitAccessInfo
	 */
	public function __construct(array $attributes = [])
	{
		$this->AccessInfo = $attributes["AccessInfo"];
		$this->IsActive = $attributes["IsActive"];
		$this->StartDate = $attributes["StartDate"];
		$this->EndDate = $attributes["EndDate"];
		$this->CanAccess = $attributes["CanAccess"];
		$this->ClasslistRoleName = $attributes["ClasslistRoleName"];
		$this->LISRoles = $attributes["LISRoles"];
		$this->OrgUnitId = $attributes["OrgUnitId"];
	}
}
