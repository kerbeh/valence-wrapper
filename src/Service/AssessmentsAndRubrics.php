<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Assessments and rubrics — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/assessment.html
 */
class AssessmentsAndRubrics
{
    /**
     * Retrieve rubrics for an object in an org unit.
     * @see https://docs.valence.desire2learn.com/res/assessment.html#get--d2l-api-le-(version)-(orgUnitId)-rubrics
     * @return /PSR7 (Request)
     * Input. You must provide a particular object type name (for example,
     * Discussion), and the identifier for that object.
     *
     * Return. This action returns a JSON array of Rubric
     * blocks for all the rubrics that apply to your specified object.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [EVAL_T] $objectType Type name for object associated with the evaluation.
     * @param [D2LID] $objectId Object ID.
     */
    public function getRubricsOrgUnitId($version, $orgUnitId, $objectType, $objectId)
    {
        $queryParrams = [
                            "objectType" => $objectType,                    "objectId" => $objectId

        ];
        $queryString = http_build_query($queryParrams);
<<<<<<< HEAD
        $uri = "d2l/api/le/$version/$orgUnitId/rubrics?$queryString";
=======
        $uri = "/d2l/api/le/$version/$orgUnitId/rubrics?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve an assessment in an org unit.
     * @see https://docs.valence.desire2learn.com/res/assessment.html#get--d2l-api-le-(version)-(orgUnitId)-assessment
     * @return /PSR7 (Request)
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
     * @param [EVAL_T] $objectType Type name for object associated with the assessment.
     * @param [D2LID] $objectId Object ID.
     * @param [D2LID] $rubricId Rubrid ID.
     * @param [D2LID] $userId User for whom the assessment applies.
     */
    public function getAssessmentOrgUnitId($version, $orgUnitId, $objectType, $objectId, $rubricId, $userId)
    {
        $queryParrams = [
                            "objectType" => $objectType,                    "objectId" => $objectId,                    "rubricId" => $rubricId,                    "userId" => $userId

        ];
        $queryString = http_build_query($queryParrams);
<<<<<<< HEAD
        $uri = "d2l/api/le/$version/$orgUnitId/assessment?$queryString";
=======
        $uri = "/d2l/api/le/$version/$orgUnitId/assessment?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Update an assessment in an org unit.
     * @see https://docs.valence.desire2learn.com/res/assessment.html#put--d2l-api-le-(version)-(orgUnitId)-assessment
     * @return /PSR7 (Request)
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
     * @param [EVAL_T] $objectType Type name for object associated with the assessment.
     * @param [D2LID] $objectId Object ID.
     * @param [D2LID] $userId User for whom the assessment applies.
     */
    public function putAssessmentOrgUnitId($version, $orgUnitId, $objectType, $objectId, $userId)
    {
        $queryParrams = [
                            "objectType" => $objectType,                    "objectId" => $objectId,                    "userId" => $userId

        ];
        $queryString = http_build_query($queryParrams);
<<<<<<< HEAD
        $uri = "d2l/api/le/$version/$orgUnitId/assessment?$queryString";
=======
        $uri = "/d2l/api/le/$version/$orgUnitId/assessment?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }
}
