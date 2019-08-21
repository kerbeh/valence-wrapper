<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Assessments and rubrics — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/assessment.html
 */
class AssessmentsAndRubrics
{
	/**
	 * Retrieve rubrics for an object in an org unit.
	 *
	 * Input. You must provide a particular object type name (for example,
	 * Discussion), and the identifier for that object.
	 *
	 * Return. This action returns a JSON array of Rubric
	 * blocks for all the rubrics that apply to your specified object.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/assessment.html#get--d2l-api-le-(version)-(orgUnitId)-rubrics
	 * @return /PSR7 (Request)
	 */
	public function getRubrics($version, $orgUnitId, $objectId = null, $objectType = null)
	{
		$queryParrams = [
		                    "objectType" => $objectType,                    "objectId" => $objectId

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/rubrics?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve an assessment in an org unit.
	 *
	 * Input. You must provide: a particular object type name (for example,
	 * Discussion), the identifier for that object, an assessment type, a rubric
	 * identifier for the relevant rubric, and the user ID for the user in
	 * question.
	 *
	 * Return. This action returns a RubricAssessment
	 * JSON structure.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/assessment.html#get--d2l-api-le-(version)-(orgUnitId)-assessment
	 * @return /PSR7 (Request)
	 */
	public function getAssessment($version, $orgUnitId, $objectId = null, $objectType = null, $rubricId = null, $userId = null)
	{
		$queryParrams = [
		                    "objectType" => $objectType,                    "objectId" => $objectId,                    "rubricId" => $rubricId,                    "userId" => $userId

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/assessment?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Update an assessment in an org unit.
	 *
	 * Input. You must provide a query parameter value for: a particular object
	 * type name (for example, Discussion); the identifier for that object; an
	 * assessment type; and the user ID for the user in question. You must also
	 * provide a RubricAssessment for the new
	 * assessment for the user.
	 *
	 * Return. This action returns the updated value of the assessment in
	 * a RubricAssessment JSON structure.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/assessment.html#put--d2l-api-le-(version)-(orgUnitId)-assessment
	 * @return /PSR7 (Request)
	 */
	public function putAssessment($version, $orgUnitId, $objectId = null, $objectType = null, $userId = null)
	{
		$queryParrams = [
		                    "objectType" => $objectType,                    "objectId" => $objectId,                    "userId" => $userId

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/assessment?$queryString", 'PUT');
		return new Request('GET', $uri);
	}
}
