<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Surveys — Developer Platform (September 2020)
 * @see https://docs.valence.desire2learn.com/res/survey.html
 */
class Surveys
{
    /**
     * Delete a survey.
     * @see https://docs.valence.desire2learn.com/res/survey.html#delete--d2l-api-le-(version)-(orgUnitId)-surveys-(surveyId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $surveyId Survey ID.
     */
    public function deleteSurveysOrgUnitIdSurveyId($version, $orgUnitId, $surveyId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/$surveyId";
        return new Request('DELETE', $uri);
    }


    /**
     * Remove survey special access for a user.
     * @see https://docs.valence.desire2learn.com/res/survey.html#delete--d2l-api-le-(version)-(orgUnitId)-surveys-(surveyId)-specialaccess-(userId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $surveyId Survey ID.
     * @param [D2LID] $userId User ID.
     */
    public function deleteSurveysSpecialaccessOrgUnitIdSurveyIdUserId($version, $orgUnitId, $surveyId, $userId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/$surveyId/specialaccess/$userId";
        return new Request('DELETE', $uri);
    }


    /**
     * Retrieve the surveys belonging to an org unit.
     * @see https://docs.valence.desire2learn.com/res/survey.html#get--d2l-api-le-(version)-(orgUnitId)-surveys-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of SurveyReadData
     * JSON blocks belonging to the org unit.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getSurveysOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a survey.
     * @see https://docs.valence.desire2learn.com/res/survey.html#get--d2l-api-le-(version)-(orgUnitId)-surveys-(surveyId)
     * @return /PSR7 (Request)
     * Return. This action returns a SurveyReadData
     * JSON block containing the properties of the survey.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $surveyId Survey ID.
     */
    public function getSurveysOrgUnitIdSurveyId($version, $orgUnitId, $surveyId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/$surveyId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of users with access to a specified survey.
     * @see https://docs.valence.desire2learn.com/res/survey.html#get--d2l-api-le-(version)-(orgUnitId)-surveys-(surveyId)-access-
     * @return /PSR7 (Request)
     * Return. This action returns a object list page
     * containing the resulting UserAccess blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $surveyId Survey ID.
     * @param [D2LID] $userId Optional. Retrieve access for a single user.
     * userId
     * @param [D2LID] $roleId Optional. Retrieve access for users with the given role.
     * roleId
     */
    public function getSurveysAccessOrgUnitIdSurveyId($version, $orgUnitId, $surveyId, $userId = null, $roleId = null)
    {
        $queryParrams = [
                            "userId" => $userId,                    "roleId" => $roleId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/$surveyId/access/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve special access rules in a survey.
     * @see https://docs.valence.desire2learn.com/res/survey.html#get--d2l-api-le-(version)-(orgUnitId)-surveys-(surveyId)-specialaccess-
     * @return /PSR7 (Request)
     * Return. This action returns a object list page
     * containing the resulting SpecialAccessUserData
     * blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $surveyId Survey ID.
     */
    public function getSurveysSpecialaccessOrgUnitIdSurveyId($version, $orgUnitId, $surveyId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/$surveyId/specialaccess/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a user’s special access rule for a survey.
     * @see https://docs.valence.desire2learn.com/res/survey.html#get--d2l-api-le-(version)-(orgUnitId)-surveys-(surveyId)-specialaccess-(userId)
     * @return /PSR7 (Request)
     * Return. This action returns a SpecialAccessData
     * JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $surveyId Survey ID.
     * @param [D2LID] $userId User ID.
     */
    public function getSurveysSpecialaccessOrgUnitIdSurveyIdUserId($version, $orgUnitId, $surveyId, $userId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/$surveyId/specialaccess/$userId";
        return new Request('GET', $uri);
    }


    /**
     * Create a new survey belonging to an org unit.
     * @see https://docs.valence.desire2learn.com/res/survey.html#post--d2l-api-le-(version)-(orgUnitId)-surveys-
     * @return /PSR7 (Request)
     * Return. This action returns a SurveyReadData
     * JSON block containing the properties of your new survey.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [SurveyWriteData] $surveyWriteData Survey data for the new survey.
     */
    public function postSurveysOrgUnitId($version, $orgUnitId, $surveyWriteData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/";
        $body = $surveyWriteData;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * Create or update a special access rule for a user and survey.
     * @see https://docs.valence.desire2learn.com/res/survey.html#put--d2l-api-le-(version)-(orgUnitId)-surveys-(surveyId)-specialaccess-(userId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $surveyId Survey ID.
     * @param [D2LID] $userId User ID.
     * @param [SpecialAccessData] $specialAccessData Special access data.
     */
    public function putSurveysSpecialaccessOrgUnitIdSurveyIdUserId($version, $orgUnitId, $surveyId, $userId, $specialAccessData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/$surveyId/specialaccess/$userId";
        $body = $specialAccessData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update a survey belonging to an org unit.
     * @see https://docs.valence.desire2learn.com/res/survey.html#put--d2l-api-le-(version)-(orgUnitId)-surveys-(surveyId)
     * @return /PSR7 (Request)
     * Return. This action returns a
     * SurveyReadData JSON block containing the
     * properties of your updated survey.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $surveyId Survey ID.
     * @param [SurveyWriteData] $surveyWriteData New survey data for survey.
     */
    public function putSurveysOrgUnitIdSurveyId($version, $orgUnitId, $surveyId, $surveyWriteData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/$surveyId";
        $body = $surveyWriteData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Retrieve a list of attempts for a survey.
     * @see https://docs.valence.desire2learn.com/res/survey.html#get--d2l-api-le-(version)-(orgUnitId)-surveys-(surveyId)-attempts-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of SurveyAttemptData
     * belonging to the survey.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $surveyId Survey ID.
     * @param [D2LID] $userId Optional. Retrieve attempts for a single user.
     * userId
     */
    public function getSurveysAttemptsOrgUnitIdSurveyId($version, $orgUnitId, $surveyId, $userId = null)
    {
        $queryParrams = [
                            "userId" => $userId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/$surveyId/attempts/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a survey attempt.
     * @see https://docs.valence.desire2learn.com/res/survey.html#get--d2l-api-le-(version)-(orgUnitId)-surveys-(surveyId)-attempts-(attemptId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $surveyId Survey ID.
     * @param [D2LID] $attemptId Attempt ID.
     */
    public function getSurveysAttemptsOrgUnitIdSurveyIdAttemptId($version, $orgUnitId, $surveyId, $attemptId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/$surveyId/attempts/$attemptId";
        return new Request('GET', $uri);
    }


    /**
     * Delete the survey category belonging to an org unit.
     * @see https://docs.valence.desire2learn.com/res/survey.html#delete--d2l-api-le-(version)-(orgUnitId)-surveys-categories-(categoryId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $categoryId Category ID.
     */
    public function deleteSurveysCategoriesOrgUnitIdCategoryId($version, $orgUnitId, $categoryId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/categories/$categoryId";
        return new Request('DELETE', $uri);
    }


    /**
     * Retrieve the survey categories belonging to an org unit.
     * @see https://docs.valence.desire2learn.com/res/survey.html#get--d2l-api-le-(version)-(orgUnitId)-surveys-categories-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of SurveyCategoryReadData
     * belonging to the org unit.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getSurveysCategoriesOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/categories/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the survey category belonging to an org unit.
     * @see https://docs.valence.desire2learn.com/res/survey.html#get--d2l-api-le-(version)-(orgUnitId)-surveys-categories-(categoryId)
     * @return /PSR7 (Request)
     * Return. This action returns a
     * SurveyCategoryReadData JSON block
     * containing the properties of your survey category.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $categoryId Category ID.
     */
    public function getSurveysCategoriesOrgUnitIdCategoryId($version, $orgUnitId, $categoryId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/categories/$categoryId";
        return new Request('GET', $uri);
    }


    /**
     * Create a new survey category.
     * @see https://docs.valence.desire2learn.com/res/survey.html#post--d2l-api-le-(version)-(orgUnitId)-surveys-categories-
     * @return /PSR7 (Request)
     * Return. This action returns a
     * SurveyCategoryReadData JSON block
     * containing the properties of your survey category.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [SurveyCategory Data] $categoryData New survey category data.
     */
    public function postSurveysCategoriesOrgUnitId($version, $orgUnitId, $categoryData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/categories/";
        $body = $categoryData;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * Update a survey category.
     * @see https://docs.valence.desire2learn.com/res/survey.html#put--d2l-api-le-(version)-(orgUnitId)-surveys-categories-(categoryId)
     * @return /PSR7 (Request)
     * Return. This action returns a
     * SurveyCategoryReadData JSON block
     * containing the updated data for your survey category.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $categoryId Survey Category ID.
     * @param [SurveyCategoryData] $categoryData Updated data for the survey category.
     */
    public function putSurveysCategoriesOrgUnitIdCategoryId($version, $orgUnitId, $categoryId, $categoryData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/categories/$categoryId";
        $body = $categoryData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Retrieve all the questions in a survey.
     * @see https://docs.valence.desire2learn.com/res/survey.html#get--d2l-api-le-(version)-(orgUnitId)-surveys-(surveyId)-questions-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of QuestionData
     * belonging to the survey you specified, blocks for the segment following your
     * bookmark parameter (or the first segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $surveyId Survey ID.
     */
    public function getSurveysQuestionsOrgUnitIdSurveyId($version, $orgUnitId, $surveyId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/surveys/$surveyId/questions/";
        return new Request('GET', $uri);
    }
}
