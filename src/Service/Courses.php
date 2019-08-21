<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Courses (course offerings, templates, schemas) — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/course.html
 */
class Courses
{
	/**
	 * Delete a course offering.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/course.html#delete--d2l-api-lp-(version)-courses-(orgUnitId)
	 * @return /PSR7 (Request)
	 */
	public function deleteCourses($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/courses/$orgUnitId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the list of parent org unit type constraints for course offerings.
	 *
	 * Return. This action returns a JSON array of SchemaElement
	 * blocks.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-lp-(version)-courses-schema
	 * @return /PSR7 (Request)
	 */
	public function getCoursesSchema($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/courses/schema", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a course offering.
	 *
	 * Return. This action returns a CourseOffering
	 * JSON block with the provided course’s information.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-lp-(version)-courses-(orgUnitId)
	 * @return /PSR7 (Request)
	 */
	public function getCourses($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/courses/$orgUnitId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the course image for a course offering.
	 *
	 * Return. This action returns a file stream containing the current course
	 * offering’s image.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-lp-(version)-courses-(orgUnitId)-image
	 * @return /PSR7 (Request)
	 */
	public function getCoursesImage($version, $orgUnitId, $height = null, $width = null)
	{
		$queryParrams = [
		                    "width" => $width,                    "height" => $height

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/courses/$orgUnitId/image?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new course offering.
	 *
	 * Return. This action returns a CourseOffering
	 * JSON block for the newly created course.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [Course.CreateCourseOffering] $createCourseOffering New course offering properties.
	 * @see https://docs.valence.desire2learn.com/res/course.html#post--d2l-api-lp-(version)-courses-
	 * @return /PSR7 (Request)
	 */
	public function postCourses($version, $createCourseOffering)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/courses/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update a current course offering.
	 *
	 * Input. This action replaces the associated course offering’s data with
	 * all the properties you provide.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [Course.CourseOfferingInfo] $courseOfferingInfo Updated course offering properties.
	 * @see https://docs.valence.desire2learn.com/res/course.html#put--d2l-api-lp-(version)-courses-(orgUnitId)
	 * @return /PSR7 (Request)
	 */
	public function putCourses($version, $orgUnitId, $courseOfferingInfo)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/courses/$orgUnitId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Update the course image for a course offering.
	 *
	 * Input. Provide an uploaded image file with these restrictions:
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/course.html#put--d2l-api-lp-(version)-courses-(orgUnitId)-image
	 * @return /PSR7 (Request)
	 */
	public function putCoursesImage($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/courses/$orgUnitId/image", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Delete a course template.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/course.html#delete--d2l-api-lp-(version)-coursetemplates-(orgUnitId)
	 * @return /PSR7 (Request)
	 */
	public function deleteCoursetemplates($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/coursetemplates/$orgUnitId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a course template.
	 *
	 * Return. This action returns a CourseTemplate
	 * JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-lp-(version)-coursetemplates-(orgUnitId)
	 * @return /PSR7 (Request)
	 */
	public function getCoursetemplates($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/coursetemplates/$orgUnitId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the list of parent org unit type constraints for course offerings
	 * built on this template.
	 *
	 * Return. This action returns a JSON array of SchemaElement
	 * blocks.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-lp-(version)-coursetemplates-schema
	 * @return /PSR7 (Request)
	 */
	public function getCoursetemplatesSchema($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/coursetemplates/schema", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new course template.
	 *
	 * Return. This action returns a CourseTemplate
	 * JSON block containing the data for the new course template.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [Course.CreateCourseTemplate] $createCourseTemplate New course template properties.
	 * @see https://docs.valence.desire2learn.com/res/course.html#post--d2l-api-lp-(version)-coursetemplates-
	 * @return /PSR7 (Request)
	 */
	public function postCoursetemplates($version, $createCourseTemplate)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/coursetemplates/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update the information for a course template.
	 *
	 * Input. This action uses the data in your provided block to completely
	 * replace the associated course template’s data on the service.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [Course.CourseTemplateInfo] $courseTemplateInfo Updated course template properties.
	 * @see https://docs.valence.desire2learn.com/res/course.html#put--d2l-api-lp-(version)-coursetemplates-(orgUnitId)
	 * @return /PSR7 (Request)
	 */
	public function putCoursetemplates($version, $orgUnitId, $courseTemplateInfo)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/coursetemplates/$orgUnitId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the status of a queued course copy job request.
	 *
	 * Return. This action returns a GetCopyJobResponse
	 * JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [string] $jobToken Course copy job token.
	 * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-le-(version)-import-(orgUnitId)-copy-(jobToken)
	 * @return /PSR7 (Request)
	 */
	public function getImportCopy($version, $orgUnitId, $jobToken)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/import/$orgUnitId/copy/$jobToken", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Queue up a new course copy job request.
	 *
	 * Return. This action returns a CreateCopyJobResponse
	 * JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID of the target course offering.
	 * @param [Course.CreateCopyJobRequest] $createCopyJobRequest Job request for course copy.
	 * @see https://docs.valence.desire2learn.com/res/course.html#post--d2l-api-le-(version)-import-(orgUnitId)-copy-
	 * @return /PSR7 (Request)
	 */
	public function postImportCopy($version, $orgUnitId, $createCopyJobRequest)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/import/$orgUnitId/copy/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Retrive the list of logs for course copy jobs.
	 *
	 * Return. This action returns an object list page
	 * containing the resulting CopyCourseLogMessage
	 * data blocks for the segment following your bookmark parameter (or the first
	 * segment if the parameter is empty or missing).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-le-(version)-ccb-logs
	 * @return /PSR7 (Request)
	 */
	public function getCcbLogs($version, $bookmark = null, $destinationOrgUnitId = null, $pageSize = null, $sourceOrgUnitId = null)
	{
		$queryParrams = [
		                    "bookmark" => $bookmark,                    "pageSize" => $pageSize,                    "sourceOrgUnitId" => $sourceOrgUnitId,                    "destinationOrgUnitId" => $destinationOrgUnitId

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/ccb/logs?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the status of a queued course import job request.
	 *
	 * Return. This action returns a GetImportJobResponse
	 * JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [string] $jobToken Course copy job token.
	 * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-le-(version)-import-(orgUnitId)-imports-(jobToken)
	 * @return /PSR7 (Request)
	 */
	public function getImportImports($version, $orgUnitId, $jobToken)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/import/$orgUnitId/imports/$jobToken", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the logs for a course import job.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting ImportCourseLog
	 * blocks for the segment following your bookmark parameter (or the first
	 * segment if that parameter is empty or missing).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [string] $jobToken Course copy job token.
	 * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-le-(version)-import-(orgUnitid)-imports-(jobToken)-logs-
	 * @return /PSR7 (Request)
	 */
	public function getImportImportsLogs($version, $orgUnitId, $jobToken, $bookmark = null)
	{
		$queryParrams = [
		                    "bookmark" => $bookmark

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/import/$orgUnitid/imports/$jobToken/logs/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new course import job request.
	 *
	 * Input. Provide the course package to import using the
	 * simple file upload process: provide the course
	 * package as the upload data to the POST form; set the filename field in the
	 * Content-Disposition part-header to the base name of the file you are
	 * uploading; set the name field in the part-header to file:
	 *
	 * Return. This action returns a CreateImportJobResponse
	 * JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID of the target course offering.
	 * @see https://docs.valence.desire2learn.com/res/course.html#post--d2l-api-le-(version)-import-(orgUnitId)-imports-
	 * @return /PSR7 (Request)
	 */
	public function postImportImports($version, $orgUnitId, $callbackUrl = null)
	{
		$queryParrams = [
		                    "callbackUrl" => $callbackUrl

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/import/$orgUnitId/imports/?$queryString", 'POST');
		return new Request('GET', $uri);
	}
}
