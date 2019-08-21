<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Learning Repository objects — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/lor.html
 */
class LearningRepositoryObjects
{
	/**
	 * Retrieve the results for a query-based search across one or more repositories.
	 *
	 * Input. None of the query parameters are optional; all must be present:
	 *
	 * Return. If successful, this action returns a
	 * LRWSSearchResultCollection
	 * JSON data block containing the result set matching your search.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/lor.html#get--d2l-api-lr-(version)-objects-search-
	 * @return /PSR7 (Request)
	 */
	public function getObjectsSearch($version, $count = null, $offset = null, $query = null, $repositories = null)
	{
		$queryParrams = [
		                    "query" => $query,                    "offset" => $offset,                    "count" => $count,                    "repositories" => $repositories

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lr/$version/objects/search/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Download a package containing a particular version of a learning object from
	 * a local repository.
	 *
	 * Return. If successful, this action returns a file stream containing the
	 * packaged learning object: if the learning object was a quiz, the returned
	 * file is a D2L package; otherwise, the returned file is a SCORM package.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId Learning object ID.
	 * @see https://docs.valence.desire2learn.com/res/lor.html#get--d2l-api-lr-(version)-objects-(objectId)-(objectVersion)-download-
	 * @return /PSR7 (Request)
	 */
	public function getObjectsDownload($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lr/$version/objects/$objectId/$objectVersion/download/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Download the content file contained in a particular version of a file
	 * learning object from a local repository.
	 *
	 * Return. If successful, this action returns the contents of the file for
	 * the requested version of the learning object. The file content type can be
	 * any supported file type, and will be communicated in the
	 * Content-Disposition header in the response.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId Learning object ID.
	 * @see https://docs.valence.desire2learn.com/res/lor.html#get--d2l-api-lr-(version)-objects-(objectId)-(objectVersion)-downloadfile-
	 * @return /PSR7 (Request)
	 */
	public function getObjectsDownloadfile($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lr/$version/objects/$objectId/$objectVersion/downloadfile/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a URL that a client can use to view a particular version of a
	 * learning object.
	 *
	 * Return. This action returns a LRWSObjectLink
	 * JSON data block containing status data for the task as well as (if
	 * successful) the viewing-URL for the learning object.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId Learning object ID.
	 * @see https://docs.valence.desire2learn.com/res/lor.html#get--d2l-api-lr-(version)-objects-(objectId)-(objectVersion)-link-
	 * @return /PSR7 (Request)
	 */
	public function getObjectsLink($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lr/$version/objects/$objectId/$objectVersion/link/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the properties for a particular version of a learning object.
	 *
	 * Return. This action returns a LRWSObjectProperties
	 * JSON data block containing status data for the task as well as (if
	 * successful) the basic property data for a particular version of the learning
	 * object.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId Learning object ID.
	 * @see https://docs.valence.desire2learn.com/res/lor.html#get--d2l-api-lr-(version)-objects-(objectId)-(objectVersion)-properties-
	 * @return /PSR7 (Request)
	 */
	public function getObjectsProperties($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lr/$version/objects/$objectId/$objectVersion/properties/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the metadata for a particular version of a learning object.
	 *
	 * Return. If successful, this action sends back an XML document
	 * (application/xml mime-type, Dublin Core schema) containing the
	 * identified learning object’s metadata.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId Learning object ID.
	 * @see https://docs.valence.desire2learn.com/res/lor.html#get--d2l-api-lr-(version)-objects-(objectId)-(objectVersion)-metadata-
	 * @return /PSR7 (Request)
	 */
	public function getObjectsMetadata($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lr/$version/objects/$objectId/$objectVersion/metadata/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Delete all versions of a learning object.
	 *
	 * Input. Provide an empty post body for this action. You should ensure that
	 * your request includes a Content-Length: 0 HTTP header value (some HTTP
	 * client libraries may neglect to do this with empty POST calls).
	 *
	 * Return. This action returns a LRWSBaseResult
	 * JSON data block containing status data for the task.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId Learning object ID.
	 * @see https://docs.valence.desire2learn.com/res/lor.html#post--d2l-api-lr-(version)-objects-(objectId)-delete-
	 * @return /PSR7 (Request)
	 */
	public function postObjectsDelete($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lr/$version/objects/$objectId/delete/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Publish a SCORM package to overwrite an existing learning object, using the
	 * default publishing options.
	 *
	 * Input. Provide the SCORM package (as a .zip archive) using the
	 * simple file upload process: provide the SCORM
	 * package as the upload data to the POST form, and set the name field in the
	 * Content-Disposition part-header for the request to “Resource”.
	 *
	 * Return. This action returns a LRWSPublishResult
	 * JSON data block containing status data for the task and (if successful) the
	 * new version number for the identified learning object.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId Learning object ID for a learning object in a local repository.
	 * @see https://docs.valence.desire2learn.com/res/lor.html#post--d2l-api-lr-(version)-objects-(objectId)-
	 * @return /PSR7 (Request)
	 */
	public function postObjects($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lr/$version/objects/$objectId/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update the properties for a particular version of a learning object in a
	 * local repository.
	 *
	 * Input. If the calling user context owns the learning object, then that
	 * user context must have Manage My Objects in the LOR permission; otherwise,
	 * the user context must have Manage All Objects in the LOR permission. If you
	 * provide a new RepositoryId property (to move the learning object from one
	 * repository to another), the user context must have Publish to the LOR
	 * permission.
	 *
	 * Return. This action returns a LRWSBaseResult
	 * JSON data block containing status data for the task.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId Learning object ID.
	 * @param [Repository.LRWSObjectPropertiesInput] $lRWSObjectPropertiesInput Updated properties for the learning object.
	 * @see https://docs.valence.desire2learn.com/res/lor.html#post--d2l-api-lr-(version)-objects-(objectId)-(objectVersion)-properties-
	 * @return /PSR7 (Request)
	 */
	public function postObjectsProperties($version, $objectId, $lRWSObjectPropertiesInput)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lr/$version/objects/$objectId/$objectVersion/properties/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Publish a SCORM package as a new learning object, using the default
	 * publishing options.
	 *
	 * Input. Provide the SCORM package (as a .zip archive) using the
	 * simple file upload process: provide the SCORM
	 * package as the upload data to the PUT request, and set the name field in the
	 * Content-Disposition part-header for the request to “Resource”.
	 *
	 * Return. This action returns a LRWSPublishResult
	 * JSON data block containing status data for the task and (if successful) the
	 * learning object ID and version for the newly created learning object.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/lor.html#put--d2l-api-lr-(version)-objects-
	 * @return /PSR7 (Request)
	 */
	public function putObjects($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lr/$version/objects/", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of all the trust permissions tied to provided roles within provided org units.
	 *
	 * Return. If successful, this action returns a
	 * LRWSTrustCollection JSON data
	 * block containing the LRWSTrust information
	 * for each appropriate role (identified by roleId) within each appropriate org
	 * unit (identified by orgUnitId).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $repositoryId Repository ID.
	 * @see https://docs.valence.desire2learn.com/res/lor.html#get--d2l-api-lr-(version)-repository-(repositoryId)-listorgUnittrusts-
	 * @return /PSR7 (Request)
	 */
	public function getRepositoryListorgunittrusts($version, $repositoryId, $orgUnits = null, $roles = null)
	{
		$queryParrams = [
		                    "orgUnits" => $orgUnits,                    "roles" => $roles

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lr/$version/repository/$repositoryId/listorgUnittrusts/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all repositories with the Search trust permission.
	 *
	 * Return. If successful, this action returns a
	 * LRWSRepositoryCollection
	 * JSON data block containing the matching, searchable repositories in its
	 * Repositories property (an array of
	 * LRWSRepository JSON blocks).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/lor.html#get--d2l-api-lr-(version)-repositories-all-
	 * @return /PSR7 (Request)
	 */
	public function getRepositoriesAll($version, $repositoryId = null)
	{
		$queryParrams = [
		                    "repositoryId" => $repositoryId

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lr/$version/repositories/all/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of all repositories of a provided type, that have the
	 * provided trust permissions.
	 *
	 * Return. If successful, this action returns a
	 * LRWSRepositoryCollection
	 * JSON data block containing the matching repositories in its Repositories
	 * property (an array of LRWSRepository
	 * JSON blocks).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/lor.html#get--d2l-api-lr-(version)-repositories-(type)-
	 * @return /PSR7 (Request)
	 */
	public function getRepositories($version, $orgUnitId = null, $trustParams = null)
	{
		$queryParrams = [
		                    "orgUnitId" => $orgUnitId,                    "trustParams" => $trustParams

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lr/$version/repositories/$type/?$queryString", 'GET');
		return new Request('GET', $uri);
	}
}
