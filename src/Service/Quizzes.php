<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Quizzes — Developer Platform (July 2020)
 * @see https://docs.valence.desire2learn.com/res/quiz.html
 */
class Quizzes
{
    /**
     * Delete a quiz.
     * @see https://docs.valence.desire2learn.com/res/quiz.html#delete--d2l-api-le-(version)-(orgUnitId)-quizzes-(quizId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $quizId Quiz ID.
     */
    public function deleteQuizzesOrgUnitIdQuizId($version, $orgUnitId, $quizId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/quizzes/$quizId";
        return new Request('GET', $uri);
    }


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
        $uri = "/d2l/api/le/$version/$orgUnitId/quizzes/";
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
        $uri = "/d2l/api/le/$version/$orgUnitId/quizzes/$quizId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of users with access to a specified quiz.
     * @see https://docs.valence.desire2learn.com/res/quiz.html#get--d2l-api-le-(version)-(orgUnitId)-quizzes-(quizId)-access-
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set containing the resulting UserAccess blocks for the segment following your bookmark
     * parameter (or the first segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $quizId Quiz ID.
     * @param [D2LID] $userId Optional. Retrieve access for a single user.
     * userId
     * @param [D2LID] $roleId Optional. Retrieve access for users with the given role.
     * roleId
     */
    public function getQuizzesAccessOrgUnitIdQuizId($version, $orgUnitId, $quizId, $userId = null, $roleId = null)
    {
        $queryParrams = [
                            "userId" => $userId,                    "roleId" => $roleId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/quizzes/$quizId/access/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Create a new quiz.
     * @see https://docs.valence.desire2learn.com/res/quiz.html#post--d2l-api-le-(version)-(orgUnitId)-quizzes-
     * @return /PSR7 (Request)
     * Return. This action returns a QuizReadData JSON block
     * containing the properties of your quiz.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [QuizData] $quizData Create quiz data.
     */
    public function postQuizzesOrgUnitId($version, $orgUnitId, $quizData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/quizzes/";
        $body = $quizData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
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
        $uri = "/d2l/api/le/$version/$orgUnitId/quizzes/$quizId";
        $body = $quizData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Retrieve a quiz attempt.
     * @see https://docs.valence.desire2learn.com/res/quiz.html#get--d2l-api-le-(version)-(orgUnitId)-quizzes-(quizId)-attempts-(attemptId)
     * @return /PSR7 (Request)
     * Return. This action returns a Quiz.QuizAttemptData JSON block
     * containing the properties of your identified quiz attempt.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $quizId Quiz ID.
     */
    public function getQuizzesAttemptsOrgUnitIdQuizId($version, $orgUnitId, $quizId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/quizzes/$quizId/attempts/$attemptId";
        return new Request('GET', $uri);
    }


    /**
     * Delete a quiz category.
     * @see https://docs.valence.desire2learn.com/res/quiz.html#delete--d2l-api-le-(version)-(orgUnitId)-quizzes-categories-(categoryId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $categoryId Quiz Category ID.
     */
    public function deleteQuizzesCategoriesOrgUnitIdCategoryId($version, $orgUnitId, $categoryId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/quizzes/categories/$categoryId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the quiz categories belonging to an org unit.
     * @see https://docs.valence.desire2learn.com/res/quiz.html#get--d2l-api-le-(version)-(orgUnitId)-quizzes-categories-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of QuizCategoryReadData
     * belonging to the org unit.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getQuizzesCategoriesOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/quizzes/categories/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a quiz category.
     * @see https://docs.valence.desire2learn.com/res/quiz.html#get--d2l-api-le-(version)-(orgUnitId)-quizzes-categories-(categoryId)
     * @return /PSR7 (Request)
     * Return. This action returns a QuizCategoryReadData
     * JSON block containing the properties of your identified quiz category.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $categoryId Quiz Category ID.
     */
    public function getQuizzesCategoriesOrgUnitIdCategoryId($version, $orgUnitId, $categoryId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/quizzes/categories/$categoryId";
        return new Request('GET', $uri);
    }


    /**
     * Create a new quiz category.
     * @see https://docs.valence.desire2learn.com/res/quiz.html#post--d2l-api-le-(version)-(orgUnitId)-quizzes-categories-
     * @return /PSR7 (Request)
     * Return. This action returns a QuizCategoryReadData
     * JSON block containing the data for the newly created quiz category.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [QuizCategoryData] $categoryData Quiz category data for a new quiz category.
     */
    public function postQuizzesCategoriesOrgUnitId($version, $orgUnitId, $categoryData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/quizzes/categories/";
        $body = $categoryData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update a quiz category.
     * @see https://docs.valence.desire2learn.com/res/quiz.html#put--d2l-api-le-(version)-(orgUnitId)-quizzes-categories-(categoryId)
     * @return /PSR7 (Request)
     * Return. This action returns a QuizCategoryReadData
     * JSON block containing the updated data for your quiz category.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $categoryId Quiz Category ID.
     * @param [QuizCategoryData] $categoryData Updated data for the quiz category.
     */
    public function putQuizzesCategoriesOrgUnitIdCategoryId($version, $orgUnitId, $categoryId, $categoryData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/quizzes/categories/$categoryId";
        $body = $categoryData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Retrieve all the questions in a quiz.
     * @see https://docs.valence.desire2learn.com/res/quiz.html#get--d2l-api-le-(version)-(orgUnitId)-quizzes-(quizId)-questions-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of QuestionData
     * belonging to the quiz you specified, blocks for the segment following your bookmark
     * parameter (or the first segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $quizId Quiz ID.
     */
    public function getQuizzesQuestionsOrgUnitIdQuizId($version, $orgUnitId, $quizId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/quizzes/$quizId/questions/";
        return new Request('GET', $uri);
    }
}
