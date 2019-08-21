<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * ePortfolio Learning Objective — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/epobjective.html
 */
class EportfolioLearningObjective
{
	/**
	 * Remove association between a learning objective and an associated EP object.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectiveId EP object ID for learning objective.
	 * @param [D2LID] $objectId EP object ID for associated object.
	 * @see https://docs.valence.desire2learn.com/res/epobjective.html#delete--d2l-api-eP-(version)-learningobjective-(objectiveId)-association-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function deleteLearningobjectiveAssociation($version, $objectiveId, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/learningobjective/$objectiveId/association/$objectId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Delete a learning objective.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectiveId EP object ID for learning objective.
	 * @see https://docs.valence.desire2learn.com/res/epobjective.html#delete--d2l-api-eP-(version)-learningobjective-(objectiveId)
	 * @return /PSR7 (Request)
	 */
	public function deleteLearningobjective($version, $objectiveId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/learningobjective/$objectiveId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a learning objective.
	 *
	 * Return. This action retrieves a LearningObjective
	 * JSON data block for the identified learning objective.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectiveId EP object ID for learning objective.
	 * @see https://docs.valence.desire2learn.com/res/epobjective.html#get--d2l-api-eP-(version)-learningobjective-(objectiveId)
	 * @return /PSR7 (Request)
	 */
	public function getLearningobjective($version, $objectiveId, $c = null)
	{
		$queryParrams = [
		                    "c" => $c

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/learningobjective/$objectiveId?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Update an existing learning objective.
	 *
	 * Return. This action retrieves a LearningObjective
	 * JSON data block for the updated reflection.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectiveId EP object ID for learning objective.
	 * @param [EP.LearningObjective] $learningObjective Updated data for learning objective.
	 * @see https://docs.valence.desire2learn.com/res/epobjective.html#post--d2l-api-eP-(version)-learningobjective-(objectiveId)
	 * @return /PSR7 (Request)
	 */
	public function postLearningobjective($version, $objectiveId, $learningObjective)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/learningobjective/$objectiveId", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Create an association between a learning objective and another EP object.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectiveId EP object ID for learning objective.
	 * @param [D2LID] $objectId EP object ID for associated object.
	 * @see https://docs.valence.desire2learn.com/res/epobjective.html#post--d2l-api-eP-(version)-learningobjective-(objectiveId)-association-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function postLearningobjectiveAssociation($version, $objectiveId, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/learningobjective/$objectiveId/association/$objectId", 'POST');
		return new Request('GET', $uri);
	}
}
