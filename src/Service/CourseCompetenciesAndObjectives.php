<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Course competencies and objectives — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/competency.html
 */
class CourseCompetenciesAndObjectives
{
	/**
	 * Retrieve the structure of course competencies and objectives.
	 *
	 * Return. This action returns a CompetencyObjectsPage
	 * JSON block containing the portion of the competencies structure matching
	 * your request.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/competency.html#get--d2l-api-le-(version)-(orgUnitId)-competencies-structure
	 * @return /PSR7 (Request)
	 */
	public function getCompetenciesStructure($version, $orgUnitId, $bookmark = null, $depth = null, $pageSize = null, $parentObjectid = null)
	{
		$queryParrams = [
		                    "parentObjectid" => $parentObjectid,                    "depth" => $depth,                    "pageSize" => $pageSize,                    "bookmark" => $bookmark

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/competencies/structure?$queryString", 'GET');
		return new Request('GET', $uri);
	}
}
