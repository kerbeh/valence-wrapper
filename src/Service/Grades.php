<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Grades (grade objects, categories, values, schemes) — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/grade.html
 */
class Grades
{
	/**
	 * Delete a specific grade object for a particular org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $gradeObjectID Grade object ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#delete--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)
	 * @return /PSR7 (Request)
	 */
	public function deleteGrades($version, $orgUnitId, $gradeObjectID)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a specific grade object for a particular org unit.
	 *
	 * Return. This action returns a GradeObject JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $gradeObjectId Grade object ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)
	 * @return /PSR7 (Request)
	 */
	public function getGrades($version, $orgUnitId, $gradeObjectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new grade object for a particular org unit.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/grade.html#post--d2l-api-le-(version)-(orgUnitId)-grades-
	 * @return /PSR7 (Request)
	 */
	public function postGrades($version, $orgUnitId, $gradeObject)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update a specific grade object.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/grade.html#put--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)
	 * @return /PSR7 (Request)
	 */
	public function putGrades($version, $orgUnitId, $gradeObjectId, $gradeObject)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Delete a specific grade category for a provided org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $categoryId Grade category ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#delete--d2l-api-le-(version)-(orgUnitId)-grades-categories-(categoryId)
	 * @return /PSR7 (Request)
	 */
	public function deleteGradesCategories($version, $orgUnitId, $categoryId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/categories/$categoryId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a specific grade category for a provided org unit.
	 *
	 * Return. This action retrieves a
	 * GradeObjectCategory JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $categoryId Grade category ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-categories-(categoryId)
	 * @return /PSR7 (Request)
	 */
	public function getGradesCategories($version, $orgUnitId, $categoryId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/categories/$categoryId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new grade category for a provided org unit.
	 *
	 * Return. This action returns the newly created grade object category in a
	 * GradeObjectCategory JSON block, so
	 * that you can quickly gather its grade category ID.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [Grade.GradeObjectCategoryData] $gradeCategoryData New grade category for org unit.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#post--d2l-api-le-(version)-(orgUnitId)-grades-categories-
	 * @return /PSR7 (Request)
	 */
	public function postGradesCategories($version, $orgUnitId, $gradeCategoryData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/categories/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular grade scheme.
	 *
	 * Return. This action returns a GradeScheme JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $gradeSchemeId Grade scheme ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-schemes-(gradeSchemeId)
	 * @return /PSR7 (Request)
	 */
	public function getGradesSchemes($version, $orgUnitId, $gradeSchemeId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/schemes/$gradeSchemeId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the final grade value for the current user context.
	 *
	 * Return. This action returns a GradeValue
	 * JSON block containing the final calculated grade value for the current user context.
	 *
	 * @param [D2LVERSION] $version API verison.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-final-values-myGradeValue
	 * @return /PSR7 (Request)
	 */
	public function getGradesFinalValuesMygradevalue($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/final/values/myGradeValue", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of final grade values for the current user context across a
	 * number of org units.
	 *
	 * Input. When calling this action, you must provide a list of org unit
	 * IDs that amount to some or all of the calling user’s active enrollments.
	 *
	 * Return. This action returns an ObjectListPage
	 * JSON block containing a list of final calculated grade values
	 * sorted by the OrgUnitIds that match the provided query parameter filters.
	 *
	 * @param [D2LVERSION] $version API verison.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-grades-final-values-myGradeValues-
	 * @return /PSR7 (Request)
	 */
	public function getGradesFinalValuesMygradevalues($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/grades/final/values/myGradeValues/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve each user’s final grade value for a particular org unit.
	 *
	 * Input. This action can take a number of optional sort and filter
	 * parameters:
	 *
	 * Return. This action returns an ObjectListPage
	 * JSON block containing a list of user grade values
	 * for the final grade object.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-final-values-
	 * @return /PSR7 (Request)
	 */
	public function getGradesFinalValues($version, $orgUnitId, $isGraded = null, $pageSize = null, $searchText = null, $sort = null)
	{
		$queryParrams = [
		                    "sort" => $sort,                    "pageSize" => $pageSize,                    "isGraded" => $isGraded,                    "searchText" => $searchText

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/final/values/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the grade objects for a particular user assigned in an org unit.
	 *
	 * Return. This action returns a JSON array of GradeValue blocks.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-values-(userId)-
	 * @return /PSR7 (Request)
	 */
	public function getGradesValues($version, $orgUnitId, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/values/$userId/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a specific grade value for the current user context assigned in a
	 * particular org unit.
	 *
	 * Return. This action returns a GradeValue JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $gradeObjectId Grade object ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-values-myGradeValue
	 * @return /PSR7 (Request)
	 */
	public function getGradesValuesMygradevalue($version, $orgUnitId, $gradeObjectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId/values/myGradeValue", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the grade objects for the current user context assigned in a
	 * particular org unit.
	 *
	 * Return. This action returns a JSON array of GradeValue blocks.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-values-myGradeValues-
	 * @return /PSR7 (Request)
	 */
	public function getGradesValuesMygradevalues($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/values/myGradeValues/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Recalculate final grade value for provided user in org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#post--d2l-api-le-(version)-(orgUnitId)-grades-final-calculated-(userId)
	 * @return /PSR7 (Request)
	 */
	public function postGradesFinalCalculated($version, $orgUnitId, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/final/calculated/$userId", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Recalculate all final grade values for provided org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#post--d2l-api-le-(version)-(orgUnitId)-grades-final-calculated-all
	 * @return /PSR7 (Request)
	 */
	public function postGradesFinalCalculatedAll($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/final/calculated/all", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Set the adjusted final grade value for provided user in org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $userId User ID.
	 * @param [Grade.IncomingFinalAdjustedGradeValue] $finalAdjustedGradeValue Updated adjusted final grade value for a user.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#put--d2l-api-le-(version)-(orgUnitId)-grades-final-values-(userId)
	 * @return /PSR7 (Request)
	 */
	public function putGradesFinalValues($version, $orgUnitId, $userId, $finalAdjustedGradeValue)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/final/values/$userId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Provide a specific grade value for a particular user.
	 *
	 * Input. This action expects an IncomingGradeValue
	 * aligned with one of the first four grade object types.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $gradeObjectId Grade object ID
	 * @param [D2LID] $userId User ID.
	 * @param [Grade.IncomingGradeValue] $gradeValue Updated grade value for a user.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#put--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-values-(userId)
	 * @return /PSR7 (Request)
	 */
	public function putGradesValues($version, $orgUnitId, $gradeObjectId, $userId, $gradeValue)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId/values/$userId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Delete a course completion.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $completionId Completion ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#delete--d2l-api-le-(version)-(orgUnitId)-grades-courseCompletion-(completionId)
	 * @return /PSR7 (Request)
	 */
	public function deleteGradesCoursecompletion($version, $orgUnitId, $completionId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/courseCompletion/$completionId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the course completion records for a user.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-grades-courseCompletion-(userId)-
	 * @return /PSR7 (Request)
	 */
	public function getGradesCoursecompletion($version, $userId, $bookmark = null, $endExpiry = null, $startExpiry = null)
	{
		$queryParrams = [
		                    "startExpiry" => $startExpiry,                    "endExpiry" => $endExpiry,                    "bookmark" => $bookmark

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/grades/courseCompletion/$userId/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new course completion for an org unit.
	 *
	 * Return. This action returns a CourseCompletion
	 * JSON block with the newly created course completion record.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [Grade.CourseCompletionCreationData] $courseCompletionData New course completion properties for org unit.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#post--d2l-api-le-(version)-(orgUnitId)-grades-courseCompletion-
	 * @return /PSR7 (Request)
	 */
	public function postGradesCoursecompletion($version, $orgUnitId, $courseCompletionData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/courseCompletion/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update an existing course completion.
	 *
	 * Return. This action returns a CourseCompletion
	 * JSON block with the updated course completion record.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $completionId Completion ID.
	 * @param [Grade.CourseCompletionCreationData] $courseCompletionData Updated course completion properties for org unit.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#put--d2l-api-le-(version)-(orgUnitId)-grades-courseCompletion-(completionId)
	 * @return /PSR7 (Request)
	 */
	public function putGradesCoursecompletion($version, $orgUnitId, $completionId, $courseCompletionData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/courseCompletion/$completionId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Get statistics for a specified grade item.
	 *
	 * Return. This action returns a GradeStatisticsInfo
	 * JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-statistics
	 * @return /PSR7 (Request)
	 */
	public function getGradesStatistics($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId/statistics", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the grades configuration for the org unit.
	 *
	 * Return. This action returns a GradeSetupInfo
	 * JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-setup-
	 * @return /PSR7 (Request)
	 */
	public function getGradesSetup($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/setup/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Update the grades configuration for the org unit.
	 *
	 * Input. This action expects a GradeSetupInfo
	 * JSON block.
	 *
	 * Return. This action returns a GradeSetupInfo
	 * JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#put--d2l-api-le-(version)-(orgUnitId)-grades-setup-
	 * @return /PSR7 (Request)
	 */
	public function putGradesSetup($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/setup/", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the grade objects for a provided user in a provided org unit with
	 * exemption status included.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-exemptions-(userId)
	 * @return /PSR7 (Request)
	 */
	public function getGradesExemptions($version, $orgUnitId, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/exemptions/$userId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Attempt to exempt or unexempt a set of grades for a user.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/grade.html#post--d2l-api-le-(version)-(orgUnitId)-grades-exemptions-(userId)
	 * @return /PSR7 (Request)
	 */
	public function postGradesExemptions($version, $orgUnitId, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/exemptions/$userId", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Remove a user’s exemption from a grade.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $gradeObjectId Grade object ID.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/grade.html#delete--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-exemptions-(userId)
	 * @return /PSR7 (Request)
	 */
	public function deleteGradesExemptions($version, $orgUnitId, $gradeObjectId, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/grades/$gradeObjectId/exemptions/$userId", 'DELETE');
		return new Request('GET', $uri);
	}
}
