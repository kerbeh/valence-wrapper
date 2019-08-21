<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Quizzes — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/quiz.html
 */
class Quizzes
{
	/**
	 * Retrieve a quiz.
	 *
	 * Return. This action returns a QuizReadData JSON block
	 * containing the properties of your identified quiz.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $quizId Quiz ID.
	 * @see https://docs.valence.desire2learn.com/res/quiz.html#get--d2l-api-le-(version)-(orgUnitId)-quizzes-(quizId)
	 * @return /PSR7 (Request)
	 */
	public function getQuizzes($version, $orgUnitId, $quizId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/quizzes/$quizId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Update a quiz.
	 *
	 * Input. Note that your provided block’s data replaces all the associated
	 * quiz’s properties on the service.
	 *
	 * Return. This action returns a QuizReadData JSON block
	 * containing the updated properties of your quiz.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $quizId Quiz ID.
	 * @param [QuizData] $quizData Updated quiz data.
	 * @see https://docs.valence.desire2learn.com/res/quiz.html#put--d2l-api-le-(version)-(orgUnitId)-quizzes-(quizId)
	 * @return /PSR7 (Request)
	 */
	public function putQuizzes($version, $orgUnitId, $quizId, $quizData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/quizzes/$quizId", 'PUT');
		return new Request('GET', $uri);
	}
}
