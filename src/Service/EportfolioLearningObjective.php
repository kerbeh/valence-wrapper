<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * ePortfolio Learning Objective — Developer Platform (July 2020)
 * @see https://docs.valence.desire2learn.com/res/epobjective.html
 */
class EportfolioLearningObjective
{
    /**
     * Remove association between a learning objective and an associated EP object.
     * @see https://docs.valence.desire2learn.com/res/epobjective.html#delete--d2l-api-eP-(version)-learningobjective-(objectiveId)-association-(objectId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectiveId EP object ID for learning objective.
     * @param [D2LID] $objectId EP object ID for associated object.
     */
    public function deleteLearningobjectiveAssociationObjectiveIdObjectId($version, $objectiveId, $objectId)
    {
        $uri = "/d2l/api/eP/$version/learningobjective/$objectiveId/association/$objectId";
        return new Request('GET', $uri);
    }


    /**
     * Delete a learning objective.
     * @see https://docs.valence.desire2learn.com/res/epobjective.html#delete--d2l-api-eP-(version)-learningobjective-(objectiveId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectiveId EP object ID for learning objective.
     */
    public function deleteLearningobjectiveObjectiveId($version, $objectiveId)
    {
        $uri = "/d2l/api/eP/$version/learningobjective/$objectiveId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a learning objective.
     * @see https://docs.valence.desire2learn.com/res/epobjective.html#get--d2l-api-eP-(version)-learningobjective-(objectiveId)
     * @return /PSR7 (Request)
     * Return. This action retrieves a LearningObjective
     * JSON data block for the identified learning objective.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectiveId EP object ID for learning objective.
     * @param [boolean] $c Optional. If “true”, include all the comments associated with the learning objective objective.
     * c
     */
    public function getLearningobjectiveObjectiveId($version, $objectiveId, $c = null)
    {
        $queryParrams = [
                            "c" => $c

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/learningobjective/$objectiveId?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Update an existing learning objective.
     * @see https://docs.valence.desire2learn.com/res/epobjective.html#post--d2l-api-eP-(version)-learningobjective-(objectiveId)
     * @return /PSR7 (Request)
     * Return. This action retrieves a LearningObjective
     * JSON data block for the updated reflection.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectiveId EP object ID for learning objective.
     * @param [EP.LearningObjective] $learningObjective Updated data for learning objective.
     */
    public function postLearningobjectiveObjectiveId($version, $objectiveId, $learningObjective)
    {
        $uri = "/d2l/api/eP/$version/learningobjective/$objectiveId";
        $body = $learningObjective;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Create an association between a learning objective and another EP object.
     * @see https://docs.valence.desire2learn.com/res/epobjective.html#post--d2l-api-eP-(version)-learningobjective-(objectiveId)-association-(objectId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectiveId EP object ID for learning objective.
     * @param [D2LID] $objectId EP object ID for associated object.
     */
    public function postLearningobjectiveAssociationObjectiveIdObjectId($version, $objectiveId, $objectId)
    {
        $uri = "/d2l/api/eP/$version/learningobjective/$objectiveId/association/$objectId";
        return new Request('GET', $uri);
    }
}
