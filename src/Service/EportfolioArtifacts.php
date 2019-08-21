<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * ePortfolio Artifacts — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/artifact.html
 */
class EportfolioArtifacts
{
	/**
	 * Delete a particular EP artifact.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID.
	 * @see https://docs.valence.desire2learn.com/res/artifact.html#delete--d2l-api-eP-(version)-artifact-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function deleteArtifact($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/artifact/$objectId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Delete a particular EP file artifact.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID.
	 * @see https://docs.valence.desire2learn.com/res/artifact.html#delete--d2l-api-eP-(version)-artifact-file-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function deleteArtifactFile($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/artifact/file/$objectId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Delete a particular EP link artifact.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID.
	 * @see https://docs.valence.desire2learn.com/res/artifact.html#delete--d2l-api-eP-(version)-artifact-link-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function deleteArtifactLink($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/artifact/link/$objectId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular EP artifact.
	 *
	 * Return. This action retrieves an Artifact JSON
	 * data block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID.
	 * @see https://docs.valence.desire2learn.com/res/artifact.html#get--d2l-api-eP-(version)-artifact-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function getArtifact($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/artifact/$objectId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular EP file artifact.
	 *
	 * Return. This action retrieves a FileArtifact
	 * JSON data block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID.
	 * @see https://docs.valence.desire2learn.com/res/artifact.html#get--d2l-api-eP-(version)-artifact-file-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function getArtifactFile($version, $objectId, $c = null)
	{
		$queryParrams = [
		                    "c" => $c

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/artifact/file/$objectId?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular EP link artifact.
	 *
	 * Return. This action retrieves a UrlArtifact
	 * JSON data block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID.
	 * @see https://docs.valence.desire2learn.com/res/artifact.html#get--d2l-api-eP-(version)-artifact-link-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function getArtifactLink($version, $objectId, $c = null)
	{
		$queryParrams = [
		                    "c" => $c

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/artifact/link/$objectId?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new file artifact by starting a new resumable upload or attaching an already uploaded file.
	 *
	 * Input. If you want to initiate a resumable upload
	 * process, your POST request must include three special headers:
	 *
	 * Return. If you successfully initiate a resumable upload process, the
	 * service will respond with an HTTP 308, and provides you with an upload key
	 * value that you can use to attach the uploaded file data to a file artifact
	 * EP object.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [EP.FileArtifact] $fileArtifact File artifact property data for your upload.
	 * @see https://docs.valence.desire2learn.com/res/artifact.html#post--d2l-api-eP-(version)-artifacts-file-new
	 * @return /PSR7 (Request)
	 */
	public function postArtifactsFileNew($version, $fileArtifact)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/artifacts/file/new", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new file artifact from a simple file upload.
	 *
	 * Input. Provide a simple POST multipart/form file upload (RFC 1867) to
	 * provide the file data for the new artifact.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/artifact.html#post--d2l-api-eP-(version)-artifacts-file-upload
	 * @return /PSR7 (Request)
	 */
	public function postArtifactsFileUpload($version, $description = null, $name = null)
	{
		$queryParrams = [
		                    "name" => $name,                    "description" => $description

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/artifacts/file/upload?$queryString", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update an existing file artifact.
	 *
	 * Return. This action returns a FileArtifact
	 * JSON data block for the updated file artifact.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID.
	 * @param [EP.FileArtifact] $fileArtifact Updated file artifact property data for file artifact.
	 * @see https://docs.valence.desire2learn.com/res/artifact.html#post--d2l-api-eP-(version)-artifact-file-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function postArtifactFile($version, $objectId, $fileArtifact)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/artifact/file/$objectId", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new link artifact.
	 *
	 * Return. This action returns a UrlArtifact
	 * JSON data block for the new link artifact created.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [EP.UrlArtifact] $urlArtifact URL artifact property data for your new link artifact.
	 * @see https://docs.valence.desire2learn.com/res/artifact.html#post--d2l-api-eP-(version)-artifacts-link-new
	 * @return /PSR7 (Request)
	 */
	public function postArtifactsLinkNew($version, $urlArtifact)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/artifacts/link/new", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update an existing link artifact.
	 *
	 * Return. This action returns a UrlArtifact
	 * JSON data block for the updated link artifact.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID.
	 * @param [EP.UrlArtifact] $urlArtifact Updated URL artifact property data for link artifact.
	 * @see https://docs.valence.desire2learn.com/res/artifact.html#post--d2l-api-eP-(version)-artifact-link-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function postArtifactLink($version, $objectId, $urlArtifact)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/artifact/link/$objectId", 'POST');
		return new Request('GET', $uri);
	}
}
