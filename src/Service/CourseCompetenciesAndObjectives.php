<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Course competencies and objectives — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/competency.html
 */
class CourseCompetenciesAndObjectives
{
    /**
     * Retrieve the structure of course competencies and objectives.
     * @see https://docs.valence.desire2learn.com/res/competency.html#get--d2l-api-le-(version)-(orgUnitId)-competencies-structure
     * @return /PSR7 (Request)
     * Return. This action returns a CompetencyObjectsPage
     * JSON block containing the portion of the competencies structure matching
     * your request.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $parentObjectid Optional. Id of the parent objective or competency (the root level, by default).
     * parentObjectid
     * @param [integer] $depth Optional. Depth, or Number of child generations to retrieve depth to return (default is 2, minimum is 0, which fetches only children of the parentObjectId).
     * depth
     * @param [integer] $pageSize Optional. Breadth, or number of sibling items to retrieve in each data page (default is 25, minimum is 1).
     * pageSize
     * @param [integer] $bookmark Optional. Bookmark one can use for fetching the next data page.
     * bookmark
     */
    public function getCompetenciesStructureOrgUnitId($version, $orgUnitId, $parentObjectid = null, $depth = null, $pageSize = null, $bookmark = null)
    {
        $queryParrams = [
                            "parentObjectid" => $parentObjectid,                    "depth" => $depth,                    "pageSize" => $pageSize,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
<<<<<<< HEAD
        $uri = "d2l/api/le/$version/$orgUnitId/competencies/structure?$queryString";
=======
        $uri = "/d2l/api/le/$version/$orgUnitId/competencies/structure?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }
}
