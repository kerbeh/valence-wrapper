<?php
<<<<<<< HEAD
=======

>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Courses (course offerings, templates, schemas) — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/course.html
 */
class Courses
{
    /**
     * Delete a course offering.
     * @see https://docs.valence.desire2learn.com/res/course.html#delete--d2l-api-lp-(version)-courses-(orgUnitId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function deleteCoursesOrgUnitId($version, $orgUnitId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/courses/$orgUnitId";
=======
        $uri = "/d2l/api/lp/$version/courses/$orgUnitId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the list of parent org unit type constraints for course offerings.
     * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-lp-(version)-courses-schema
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of SchemaElement
     * blocks.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getCoursesSchema($version)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/courses/schema";
=======
        $uri = "/d2l/api/lp/$version/courses/schema";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a course offering.
     * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-lp-(version)-courses-(orgUnitId)
     * @return /PSR7 (Request)
     * Return. This action returns a CourseOffering
     * JSON block with the provided course’s information.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getCoursesOrgUnitId($version, $orgUnitId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/courses/$orgUnitId";
=======
        $uri = "/d2l/api/lp/$version/courses/$orgUnitId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the course image for a course offering.
     * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-lp-(version)-courses-(orgUnitId)-image
     * @return /PSR7 (Request)
     * Return. This action returns a file stream containing the current course
     * offering’s image.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [integer] $width Optional. Desired width (pixels) of course image.
     * width
     * @param [integer] $height Optional. Desired height (pixels) of course image.
     * height
     */
    public function getCoursesImageOrgUnitId($version, $orgUnitId, $width = null, $height = null)
    {
        $queryParrams = [
<<<<<<< HEAD
                            "width" => $width,                    "height" => $height

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "d2l/api/lp/$version/courses/$orgUnitId/image?$queryString";
=======
            "width" => $width,                    "height" => $height

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/courses/$orgUnitId/image?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Create a new course offering.
     * @see https://docs.valence.desire2learn.com/res/course.html#post--d2l-api-lp-(version)-courses-
     * @return /PSR7 (Request)
     * Return. This action returns a CourseOffering
     * JSON block for the newly created course.
     *
     * @param [D2LVERSION] $version API version.
     * @param [Course.CreateCourseOffering] $createCourseOffering New course offering properties.
     */
    public function postCourses($version, $createCourseOffering)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/courses/";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/courses/";
        $body = $createCourseOffering;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Update a current course offering.
     * @see https://docs.valence.desire2learn.com/res/course.html#put--d2l-api-lp-(version)-courses-(orgUnitId)
     * @return /PSR7 (Request)
     * Input. This action replaces the associated course offering’s data with
     * all the properties you provide.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [Course.CourseOfferingInfo] $courseOfferingInfo Updated course offering properties.
     */
    public function putCoursesOrgUnitId($version, $orgUnitId, $courseOfferingInfo)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/courses/$orgUnitId";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/courses/$orgUnitId";
        $body = $courseOfferingInfo;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Update the course image for a course offering.
     * @see https://docs.valence.desire2learn.com/res/course.html#put--d2l-api-lp-(version)-courses-(orgUnitId)-image
     * @return /PSR7 (Request)
     * Input. Provide an uploaded image file with these restrictions:
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function putCoursesImageOrgUnitId($version, $orgUnitId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/courses/$orgUnitId/image";
=======
        $uri = "/d2l/api/lp/$version/courses/$orgUnitId/image";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Delete a course template.
     * @see https://docs.valence.desire2learn.com/res/course.html#delete--d2l-api-lp-(version)-coursetemplates-(orgUnitId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function deleteCoursetemplatesOrgUnitId($version, $orgUnitId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/coursetemplates/$orgUnitId";
=======
        $uri = "/d2l/api/lp/$version/coursetemplates/$orgUnitId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a course template.
     * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-lp-(version)-coursetemplates-(orgUnitId)
     * @return /PSR7 (Request)
     * Return. This action returns a CourseTemplate
     * JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getCoursetemplatesOrgUnitId($version, $orgUnitId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/coursetemplates/$orgUnitId";
=======
        $uri = "/d2l/api/lp/$version/coursetemplates/$orgUnitId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the list of parent org unit type constraints for course offerings
     * built on this template.
     * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-lp-(version)-coursetemplates-schema
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of SchemaElement
     * blocks.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getCoursetemplatesSchema($version)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/coursetemplates/schema";
=======
        $uri = "/d2l/api/lp/$version/coursetemplates/schema";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Create a new course template.
     * @see https://docs.valence.desire2learn.com/res/course.html#post--d2l-api-lp-(version)-coursetemplates-
     * @return /PSR7 (Request)
     * Return. This action returns a CourseTemplate
     * JSON block containing the data for the new course template.
     *
     * @param [D2LVERSION] $version API version.
     * @param [Course.CreateCourseTemplate] $createCourseTemplate New course template properties.
     */
    public function postCoursetemplates($version, $createCourseTemplate)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/coursetemplates/";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/coursetemplates/";
        $body = $createCourseTemplate;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Update the information for a course template.
     * @see https://docs.valence.desire2learn.com/res/course.html#put--d2l-api-lp-(version)-coursetemplates-(orgUnitId)
     * @return /PSR7 (Request)
     * Input. This action uses the data in your provided block to completely
     * replace the associated course template’s data on the service.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [Course.CourseTemplateInfo] $courseTemplateInfo Updated course template properties.
     */
    public function putCoursetemplatesOrgUnitId($version, $orgUnitId, $courseTemplateInfo)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/coursetemplates/$orgUnitId";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/coursetemplates/$orgUnitId";
        $body = $courseTemplateInfo;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Retrieve the status of a queued course copy job request.
     * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-le-(version)-import-(orgUnitId)-copy-(jobToken)
     * @return /PSR7 (Request)
     * Return. This action returns a GetCopyJobResponse
     * JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [string] $jobToken Course copy job token.
     */
    public function getImportCopyOrgUnitIdJobToken($version, $orgUnitId, $jobToken)
    {
<<<<<<< HEAD
        $uri = "d2l/api/le/$version/import/$orgUnitId/copy/$jobToken";
=======
        $uri = "/d2l/api/le/$version/import/$orgUnitId/copy/$jobToken";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Queue up a new course copy job request.
     * @see https://docs.valence.desire2learn.com/res/course.html#post--d2l-api-le-(version)-import-(orgUnitId)-copy-
     * @return /PSR7 (Request)
     * Return. This action returns a CreateCopyJobResponse
     * JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID of the target course offering.
     * @param [Course.CreateCopyJobRequest] $createCopyJobRequest Job request for course copy.
     */
    public function postImportCopyOrgUnitId($version, $orgUnitId, $createCopyJobRequest)
    {
<<<<<<< HEAD
        $uri = "d2l/api/le/$version/import/$orgUnitId/copy/";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/le/$version/import/$orgUnitId/copy/";
        $body = $createCopyJobRequest;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Retrive the list of logs for course copy jobs.
     * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-le-(version)-ccb-logs
     * @return /PSR7 (Request)
     * Return. This action returns an object list page
     * containing the resulting CopyCourseLogMessage
     * data blocks for the segment following your bookmark parameter (or the first
     * segment if the parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     * @param [number] $pageSize Optional. Number of log entries (maximum) to return in each data page (default is 20, maximum is 100).
     * pageSize
     * @param [number] $sourceOrgUnitId Optional. Org unit ID from which components where copied.
     * sourceOrgUnitId
     * @param [number] $destinationOrgUnitId Optional. Org unit ID to which components where copied.
     * destinationOrgUnitId
     */
    public function getCcbLogs($version, $bookmark = null, $pageSize = null, $sourceOrgUnitId = null, $destinationOrgUnitId = null)
    {
        $queryParrams = [
<<<<<<< HEAD
                            "bookmark" => $bookmark,                    "pageSize" => $pageSize,                    "sourceOrgUnitId" => $sourceOrgUnitId,                    "destinationOrgUnitId" => $destinationOrgUnitId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "d2l/api/le/$version/ccb/logs?$queryString";
=======
            "bookmark" => $bookmark,                    "pageSize" => $pageSize,                    "sourceOrgUnitId" => $sourceOrgUnitId,                    "destinationOrgUnitId" => $destinationOrgUnitId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/ccb/logs?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the status of a queued course import job request.
     * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-le-(version)-import-(orgUnitId)-imports-(jobToken)
     * @return /PSR7 (Request)
     * Return. This action returns a GetImportJobResponse
     * JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [string] $jobToken Course copy job token.
     */
    public function getImportImportsOrgUnitIdJobToken($version, $orgUnitId, $jobToken)
    {
<<<<<<< HEAD
        $uri = "d2l/api/le/$version/import/$orgUnitId/imports/$jobToken";
=======
        $uri = "/d2l/api/le/$version/import/$orgUnitId/imports/$jobToken";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the logs for a course import job.
     * @see https://docs.valence.desire2learn.com/res/course.html#get--d2l-api-le-(version)-import-(orgUnitid)-imports-(jobToken)-logs-
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting ImportCourseLog
     * blocks for the segment following your bookmark parameter (or the first
     * segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [string] $jobToken Course copy job token.
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getImportImportsLogsOrgUnitIdJobToken($version, $orgUnitId, $jobToken, $bookmark = null)
    {
        $queryParrams = [
<<<<<<< HEAD
                            "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "d2l/api/le/$version/import/$orgUnitid/imports/$jobToken/logs/?$queryString";
=======
            "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/import/$orgUnitid/imports/$jobToken/logs/?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Create a new course import job request.
     * @see https://docs.valence.desire2learn.com/res/course.html#post--d2l-api-le-(version)-import-(orgUnitId)-imports-
     * @return /PSR7 (Request)
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
     * @param [string] $callbackUrl Callback URL to post status to.
     */
    public function postImportImportsOrgUnitId($version, $orgUnitId, $callbackUrl)
    {
        $queryParrams = [
<<<<<<< HEAD
                            "callbackUrl" => $callbackUrl

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "d2l/api/le/$version/import/$orgUnitId/imports/?$queryString";
=======
            "callbackUrl" => $callbackUrl

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/import/$orgUnitId/imports/?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }
}
