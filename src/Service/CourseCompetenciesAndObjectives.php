<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Course competencies and objectives — Developer Platform (July 2020)
 * @see https://docs.valence.desire2learn.com/res/competency.html
 */
class CourseCompetenciesAndObjectives
{
    /**
     * Retrieve the structure of course competencies and objectives as visible to the calling user.
     * @see https://docs.valence.desire2learn.com/res/competency.html#get--d2l-api-le-(version)-(orgUnitId)-competencies-structure
     * @return /PSR7 (Request)
     * Return. This action returns a CompetencyObjectsPage
     * JSON block containing the portion of the competencies structure matching
     * your request.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $parentObjectId Optional. Id of the parent objective or competency (the root level, by default).
     * parentObjectId
     * @param [integer] $depth Optional. Depth, or Number of child generations to retrieve depth to return (default is 2, minimum is 0, which fetches only children of the parentObjectId).
     * depth
     * @param [integer] $pageSize Optional. Breadth, or number of sibling items to retrieve in each data page (default is 25, minimum is 1).
     * pageSize
     * @param [integer] $bookmark Optional. Bookmark one can use for fetching the next data page.
     * bookmark
     * @param [D2LID] $forUserId Optional. If present, further filters the returned competency structure to include only results also viewable by this user ID.
     * forUserId
     */
    public function getCompetenciesStructureOrgUnitId(
        $version,
        $orgUnitId,
        $parentObjectId = null,
        $depth = null,
        $pageSize = null,
        $bookmark = null,
        $forUserId = null
    ) {
        $queryParrams = [
                            "parentObjectId" => $parentObjectId,                    "depth" => $depth,                    "pageSize" => $pageSize,                    "bookmark" => $bookmark,                    "forUserId" => $forUserId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/competencies/structure?$queryString";
        return new Request('GET', $uri);
    }
}
