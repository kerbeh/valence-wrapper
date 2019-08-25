<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Quizzes — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/quiz.html
 */
class Quizzes
{
    /**
     * Retrieve the quizzes belonging to an org unit.
     * @see https://docs.valence.desire2learn.com/res/quiz.html#get--d2l-api-le-(version)-(orgUnitId)-quizzes-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of quizzes belonging
     * to the org unit.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getQuizzesOrgUnitId($version, $orgUnitId)
    {
        $uri = "d2l/api/le/$version/$orgUnitId/quizzes/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a quiz.
     * @see https://docs.valence.desire2learn.com/res/quiz.html#get--d2l-api-le-(version)-(orgUnitId)-quizzes-(quizId)
     * @return /PSR7 (Request)
     * Return. This action returns a QuizReadData JSON block
     * containing the properties of your identified quiz.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $quizId Quiz ID.
     */
    public function getQuizzesOrgUnitIdQuizId($version, $orgUnitId, $quizId)
    {
        $uri = "d2l/api/le/$version/$orgUnitId/quizzes/$quizId";
        return new Request('GET', $uri);
    }


    /**
     * Update a quiz.
     * @see https://docs.valence.desire2learn.com/res/quiz.html#put--d2l-api-le-(version)-(orgUnitId)-quizzes-(quizId)
     * @return /PSR7 (Request)
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
     */
    public function putQuizzesOrgUnitIdQuizId($version, $orgUnitId, $quizId, $quizData)
    {
        $uri = "d2l/api/le/$version/$orgUnitId/quizzes/$quizId";
        return new Request('GET', $uri);
    }
}
