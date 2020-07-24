<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Grades (grade objects, categories, values, schemes) — Developer Platform (July 2020)
 * @see https://docs.valence.desire2learn.com/res/grade.html
 */
class Grades
{
    /**
     * Delete a specific grade object for a particular org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#delete--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $gradeObjectID Grade object ID.
     */
    public function deleteGradesOrgUnitIdGradeObjectID($version, $orgUnitId, $gradeObjectID)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the current grade objects for a particular org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of GradeObject blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getGradesOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a specific grade object for a particular org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)
     * @return /PSR7 (Request)
     * Return. This action returns a GradeObject JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $gradeObjectId Grade object ID.
     */
    public function getGradesOrgUnitIdGradeObjectId($version, $orgUnitId, $gradeObjectId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of users with access to a specified grade.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-access-
     * @return /PSR7 (Request)
     * Return. This action returns a object list page
     * containing the resulting UserAccess
     * blocks for the segment following your bookmark parameter (or the first
     * segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $gradeObjectId Grade object ID.
     * @param [D2LID] $userId Optional. Retrieve access for a single user.
     * userId
     * @param [D2LID] $roleId Optional. Retrieve access for users with the given role.
     * roleId
     */
    public function getGradesAccessOrgUnitIdGradeObjectId($version, $orgUnitId, $gradeObjectId, $userId = null, $roleId = null)
    {
        $queryParrams = [
                            "userId" => $userId,                    "roleId" => $roleId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId/access/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Create a new grade object for a particular org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#post--d2l-api-le-(version)-(orgUnitId)-grades-
     * @return /PSR7 (Request)
     * Input. This action expects a grade object of one of the
     * first four grade object types.
     *
     * Return. This action returns a GradeObject
     * JSON block for the grade object that the service just created, so you can
     * quickly retrieve the grade object ID.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [Grade.GradeObject] $gradeObject New grade object for org unit.
     */
    public function postGradesOrgUnitId($version, $orgUnitId, $gradeObject)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/";
        $body = $gradeObject;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update a specific grade object.
     * @see https://docs.valence.desire2learn.com/res/grade.html#put--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)
     * @return /PSR7 (Request)
     * Input. This action expects a grade object of one of the first four
     * grade object types. Note that your provided block’s data
     * replaces all the associated grade object’s data on the service.
     *
     * Return. This action returns a GradeObject
     * JSON block for the grade object that the service just updated.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $gradeObjectId Grade object ID.
     * @param [Grade.GradeObject] $gradeObject Updated properties for grade object.
     */
    public function putGradesOrgUnitIdGradeObjectId($version, $orgUnitId, $gradeObjectId, $gradeObject)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId";
        $body = $gradeObject;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Delete a specific grade category for a provided org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#delete--d2l-api-le-(version)-(orgUnitId)-grades-categories-(categoryId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $categoryId Grade category ID.
     */
    public function deleteGradesCategoriesOrgUnitIdCategoryId($version, $orgUnitId, $categoryId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/categories/$categoryId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of all grade categories for a provided org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-categories-
     * @return /PSR7 (Request)
     * Return. This action retrieves a JSON array of
     * GradeObjectCategory blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getGradesCategoriesOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/categories/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a specific grade category for a provided org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-categories-(categoryId)
     * @return /PSR7 (Request)
     * Return. This action retrieves a
     * GradeObjectCategory JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $categoryId Grade category ID.
     */
    public function getGradesCategoriesOrgUnitIdCategoryId($version, $orgUnitId, $categoryId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/categories/$categoryId";
        return new Request('GET', $uri);
    }


    /**
     * Create a new grade category for a provided org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#post--d2l-api-le-(version)-(orgUnitId)-grades-categories-
     * @return /PSR7 (Request)
     * Return. This action returns the newly created grade object category in a
     * GradeObjectCategory JSON block, so
     * that you can quickly gather its grade category ID.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [Grade.GradeObjectCategoryData] $gradeCategoryData New grade category for org unit.
     */
    public function postGradesCategoriesOrgUnitId($version, $orgUnitId, $gradeCategoryData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/categories/";
        $body = $gradeCategoryData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Retrieve all the grade schemes for a provided org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-schemes-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of GradeScheme blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getGradesSchemesOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/schemes/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular grade scheme.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-schemes-(gradeSchemeId)
     * @return /PSR7 (Request)
     * Return. This action returns a GradeScheme JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $gradeSchemeId Grade scheme ID.
     */
    public function getGradesSchemesOrgUnitIdGradeSchemeId($version, $orgUnitId, $gradeSchemeId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/schemes/$gradeSchemeId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the final grade value for the current user context.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-final-values-myGradeValue
     * @return /PSR7 (Request)
     * Return. This action returns a GradeValue
     * JSON block containing the final calculated grade value for the current user context.
     *
     * @param [D2LVERSION] $version API verison.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getGradesFinalValuesMygradevalueOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/final/values/myGradeValue";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of final grade values for the current user context across a
     * number of org units.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-grades-final-values-myGradeValues-
     * @return /PSR7 (Request)
     * Input. When calling this action, you must provide a list of org unit
     * IDs that amount to some or all of the calling user’s active enrollments.
     *
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of final calculated grade values
     * sorted by the OrgUnitIds that match the provided query parameter filters.
     *
     * @param [D2LVERSION] $version API verison.
     * @param [CSV of D2LIDs] $orgUnitIdsCSV List of org units to check (limited to 100 or fewer).
     */
    public function getGradesFinalValuesMygradevalues($version, $orgUnitIdsCSV)
    {
        $queryParrams = [
                            "orgUnitIdsCSV" => $orgUnitIdsCSV

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/grades/final/values/myGradeValues/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the final grade value for a particular user.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-final-values-(userId)
     * @return /PSR7 (Request)
     * Input. This action can take an optional query parameter:
     *
     * Return. This action returns a GradeValue
     * JSON block containing the final calculated grade value for the provided user.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $userId User ID.
     * @param [string] $gradeType Optional. Force return of final calculated or adjusted grade (see description).
     * gradeType
     */
    public function getGradesFinalValuesOrgUnitIdUserId($version, $orgUnitId, $userId, $gradeType = null)
    {
        $queryParrams = [
                            "gradeType" => $gradeType

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/final/values/$userId?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve each user’s grade value for a particular grade object.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-values-
     * @return /PSR7 (Request)
     * Input. This action can take a number of optional sort and filter
     * parameters:
     *
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of user grade values
     * for your provided grade object.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $gradeObjectId Grade object ID.
     * @param [string] $sort Optional. Sort by firstname, lastname, or grade value (see description).
     * sort
     * @param [number] $pageSize Optional. Number of objects to return in each data page (see description).
     * pageSize
     * @param [boolean] $isGraded Optional. Filter to graded or not graded users (see description).
     * isGraded
     * @param [string] $searchText Optional. Show only users that match this string inside first and last names.
     * searchText
     */
    public function getGradesValuesOrgUnitIdGradeObjectId(
        $version,
        $orgUnitId,
        $gradeObjectId,
        $sort = null,
        $pageSize = null,
        $isGraded = null,
        $searchText = null
    ) {
        $queryParrams = [
                            "sort" => $sort,                    "pageSize" => $pageSize,                    "isGraded" => $isGraded,                    "searchText" => $searchText

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId/values/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve each user’s final grade value for a particular org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-final-values-
     * @return /PSR7 (Request)
     * Input. This action can take a number of optional sort and filter
     * parameters:
     *
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of user grade values
     * for the final grade object.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [string] $sort Optional. Sort by firstname, lastname, or grade value (see description).
     * sort
     * @param [number] $pageSize Optional. Number of objects to return in each data page (see description).
     * pageSize
     * @param [boolean] $isGraded Optional. Filter to graded or not graded users (see description).
     * isGraded
     * @param [string] $searchText Optional. Show only users that match this string inside first and last names.
     * searchText
     */
    public function getGradesFinalValuesOrgUnitId($version, $orgUnitId, $sort = null, $pageSize = null, $isGraded = null, $searchText = null)
    {
        $queryParrams = [
                            "sort" => $sort,                    "pageSize" => $pageSize,                    "isGraded" => $isGraded,                    "searchText" => $searchText

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/final/values/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a specific grade value for a particular user assigned in an org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-values-(userId)
     * @return /PSR7 (Request)
     * Return. This action returns a GradeValue JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $gradeObjectId Grade object ID.
     * @param [D2LID] $userId User ID.
     */
    public function getGradesValuesOrgUnitIdGradeObjectIdUserId($version, $orgUnitId, $gradeObjectId, $userId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId/values/$userId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a specific grade value for the current user context assigned in a
     * particular org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-values-myGradeValue
     * @return /PSR7 (Request)
     * Return. This action returns a GradeValue JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $gradeObjectId Grade object ID.
     */
    public function getGradesValuesMygradevalueOrgUnitIdGradeObjectId($version, $orgUnitId, $gradeObjectId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId/values/myGradeValue";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the grade objects for the current user context assigned in a
     * particular org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-values-myGradeValues-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of GradeValue blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getGradesValuesMygradevaluesOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/values/myGradeValues/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the grade objects for a particular user assigned in an org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-values-(userId)-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of GradeValue blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $userId User ID.
     */
    public function getGradesValuesOrgUnitIdUserId($version, $orgUnitId, $userId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/values/$userId/";
        return new Request('GET', $uri);
    }


    /**
     * Recalculate final grade value for provided user in org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#post--d2l-api-le-(version)-(orgUnitId)-grades-final-calculated-(userId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $userId User ID.
     */
    public function postGradesFinalCalculatedOrgUnitIdUserId($version, $orgUnitId, $userId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/final/calculated/$userId";
        return new Request('GET', $uri);
    }


    /**
     * Recalculate all final grade values for provided org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#post--d2l-api-le-(version)-(orgUnitId)-grades-final-calculated-all
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function postGradesFinalCalculatedAllOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/final/calculated/all";
        return new Request('GET', $uri);
    }


    /**
     * Set the adjusted final grade value for provided user in org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#put--d2l-api-le-(version)-(orgUnitId)-grades-final-values-(userId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $userId User ID.
     * @param [Grade.IncomingFinalAdjustedGradeValue] $finalAdjustedGradeValue Updated adjusted final grade value for a user.
     */
    public function putGradesFinalValuesOrgUnitIdUserId($version, $orgUnitId, $userId, $finalAdjustedGradeValue)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/final/values/$userId";
        $body = $finalAdjustedGradeValue;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Provide a specific grade value for a particular user.
     * @see https://docs.valence.desire2learn.com/res/grade.html#put--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-values-(userId)
     * @return /PSR7 (Request)
     * Input. This action expects an IncomingGradeValue
     * aligned with one of the first four grade object types.
     * Note that your provided block’s data replaces all the associated grade value
     * data on the service.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $gradeObjectId Grade object ID
     * @param [D2LID] $userId User ID.
     * @param [Grade.IncomingGradeValue] $gradeValue Updated grade value for a user.
     */
    public function putGradesValuesOrgUnitIdGradeObjectIdUserId($version, $orgUnitId, $gradeObjectId, $userId, $gradeValue)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId/values/$userId";
        $body = $gradeValue;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Delete a course completion.
     * @see https://docs.valence.desire2learn.com/res/grade.html#delete--d2l-api-le-(version)-(orgUnitId)-grades-courseCompletion-(completionId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $completionId Completion ID.
     */
    public function deleteGradesCoursecompletionOrgUnitIdCompletionId($version, $orgUnitId, $completionId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/courseCompletion/$completionId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the course completion records for an org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-courseCompletion-
     * @return /PSR7 (Request)
     * Input. You can limit the scope of this query by providing an optional
     * start and/or end date to clamp the search. You can also limit the scope of
     * this query by providing an optional User ID (to fetch only course completions
     * for that user within the org unit).
     *
     * Return. This action returns a paged result set
     * containing the resulting CourseCompletion
     * data blocks for the segment following your bookmark parameter (or the first
     * segment if the parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $userId Optional. User ID.
     * userId
     * @param [UTCDateTime] $startExpiry Optional. Start of expiration range to query.
     * startExpiry
     * @param [UTCDateTime] $endExpiry Optional. End of expirtation range to query.
     * endExpiry
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     */
    public function getGradesCoursecompletionOrgUnitId($version, $orgUnitId, $userId = null, $startExpiry = null, $endExpiry = null, $bookmark = null)
    {
        $queryParrams = [
                            "userId" => $userId,                    "startExpiry" => $startExpiry,                    "endExpiry" => $endExpiry,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/courseCompletion/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the course completion records for a user.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-grades-courseCompletion-(userId)-
     * @return /PSR7 (Request)
     * Input. You can limit the scope of this query by providing an optional
     * start and/or end date to clamp the search.
     *
     * Return. This action returns a paged result set
     * containing the resulting CourseCompletion
     * data blocks for the segment following your bookmark parameter (or the first
     * segment if the parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [UTCDateTime] $startExpiry Optional. Start of expiration range to query.
     * startExpiry
     * @param [UTCDateTime] $endExpiry Optional. End of expirtation range to query.
     * endExpiry
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     */
    public function getGradesCoursecompletionUserId($version, $userId, $startExpiry = null, $endExpiry = null, $bookmark = null)
    {
        $queryParrams = [
                            "startExpiry" => $startExpiry,                    "endExpiry" => $endExpiry,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/grades/courseCompletion/$userId/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Create a new course completion for an org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#post--d2l-api-le-(version)-(orgUnitId)-grades-courseCompletion-
     * @return /PSR7 (Request)
     * Return. This action returns a CourseCompletion
     * JSON block with the newly created course completion record.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [Grade.CourseCompletionCreationData] $courseCompletionData New course completion properties for org unit.
     */
    public function postGradesCoursecompletionOrgUnitId($version, $orgUnitId, $courseCompletionData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/courseCompletion/";
        $body = $courseCompletionData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update an existing course completion.
     * @see https://docs.valence.desire2learn.com/res/grade.html#put--d2l-api-le-(version)-(orgUnitId)-grades-courseCompletion-(completionId)
     * @return /PSR7 (Request)
     * Return. This action returns a CourseCompletion
     * JSON block with the updated course completion record.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $completionId Completion ID.
     * @param [Grade.CourseCompletionCreationData] $courseCompletionData Updated course completion properties for org unit.
     */
    public function putGradesCoursecompletionOrgUnitIdCompletionId($version, $orgUnitId, $completionId, $courseCompletionData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/courseCompletion/$completionId";
        $body = $courseCompletionData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Get statistics for a specified grade item.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-statistics
     * @return /PSR7 (Request)
     * Return. This action returns a GradeStatisticsInfo
     * JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getGradesStatisticsOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId/statistics";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the grades configuration for the org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-setup-
     * @return /PSR7 (Request)
     * Return. This action returns a GradeSetupInfo
     * JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getGradesSetupOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/setup/";
        return new Request('GET', $uri);
    }


    /**
     * Update the grades configuration for the org unit.
     * @see https://docs.valence.desire2learn.com/res/grade.html#put--d2l-api-le-(version)-(orgUnitId)-grades-setup-
     * @return /PSR7 (Request)
     * Input. This action expects a GradeSetupInfo
     * JSON block.
     *
     * Return. This action returns a GradeSetupInfo
     * JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function putGradesSetupOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/setup/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the exempt users for a provided grade.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-exemptions-
     * @return /PSR7 (Request)
     * Return. This action retrieves a JSON array of User blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $gradeObjectId Grade object ID.
     */
    public function getGradesExemptionsOrgUnitIdGradeObjectId($version, $orgUnitId, $gradeObjectId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId/exemptions/";
        return new Request('GET', $uri);
    }


    /**
     * Determine if a user is exempt from a grade.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-exemptions-(userId)
     * @return /PSR7 (Request)
     * Return. This action returns a User JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $gradeObjectId Grade object ID.
     * @param [D2LID] $userId User ID.
     */
    public function getGradesExemptionsOrgUnitIdGradeObjectIdUserId($version, $orgUnitId, $gradeObjectId, $userId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId/exemptions/$userId";
        return new Request('GET', $uri);
    }


    /**
     * Exempt a user from a grade.
     * @see https://docs.valence.desire2learn.com/res/grade.html#post--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-exemptions-(userId)
     * @return /PSR7 (Request)
     * Return. This action returns a User JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $gradeObjectId Grade object ID.
     * @param [D2LID] $userId User ID.
     */
    public function postGradesExemptionsOrgUnitIdGradeObjectIdUserId($version, $orgUnitId, $gradeObjectId, $userId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId/exemptions/$userId";
        return new Request('GET', $uri);
    }


    /**
     * Remove a user’s exemption from a grade.
     * @see https://docs.valence.desire2learn.com/res/grade.html#delete--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-exemptions-(userId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $gradeObjectId Grade object ID.
     * @param [D2LID] $userId User ID.
     */
    public function deleteGradesExemptionsOrgUnitIdGradeObjectIdUserId($version, $orgUnitId, $gradeObjectId, $userId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId/exemptions/$userId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the grade objects for a provided user in a provided org unit with
     * exemption status included.
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-exemptions-(userId)
     * @return /PSR7 (Request)
     * Return. This action returns a
     * BulkGradeObjectExemptionResult JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $userId User ID.
     */
    public function getGradesExemptionsOrgUnitIdUserId($version, $orgUnitId, $userId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/exemptions/$userId";
        return new Request('GET', $uri);
    }


    /**
     * Attempt to exempt or unexempt a set of grades for a user.
     * @see https://docs.valence.desire2learn.com/res/grade.html#post--d2l-api-le-(version)-(orgUnitId)-grades-exemptions-(userId)
     * @return /PSR7 (Request)
     * Input. This action expects a BulkGradeObjectExemptionUpdate.
     * If a grade has been changed since the provided ExemptionAccessDate,
     * a conflict will be added to the result set and that grade will not be exempted or unexempted.
     *
     * Return. This action retrieves a JSON array of
     * BulkGradeObjectExemptionConflict blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $userId User ID.
     */
    public function postGradesExemptionsOrgUnitIdUserId($version, $orgUnitId, $userId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/grades/exemptions/$userId";
        return new Request('GET', $uri);
    }
}
