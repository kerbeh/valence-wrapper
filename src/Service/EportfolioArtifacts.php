<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * ePortfolio Artifacts — Developer Platform (September 2020)
 * @see https://docs.valence.desire2learn.com/res/artifact.html
 */
class EportfolioArtifacts
{
    /**
     * Delete a particular EP artifact.
     * @see https://docs.valence.desire2learn.com/res/artifact.html#delete--d2l-api-eP-(version)-artifact-(objectId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID.
     */
    public function deleteArtifactObjectId($version, $objectId)
    {
        $uri = "/d2l/api/eP/$version/artifact/$objectId";
        return new Request('DELETE', $uri);
    }


    /**
     * Delete a particular EP file artifact.
     * @see https://docs.valence.desire2learn.com/res/artifact.html#delete--d2l-api-eP-(version)-artifact-file-(objectId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID.
     */
    public function deleteArtifactFileObjectId($version, $objectId)
    {
        $uri = "/d2l/api/eP/$version/artifact/file/$objectId";
        return new Request('DELETE', $uri);
    }


    /**
     * Delete a particular EP link artifact.
     * @see https://docs.valence.desire2learn.com/res/artifact.html#delete--d2l-api-eP-(version)-artifact-link-(objectId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID.
     */
    public function deleteArtifactLinkObjectId($version, $objectId)
    {
        $uri = "/d2l/api/eP/$version/artifact/link/$objectId";
        return new Request('DELETE', $uri);
    }


    /**
     * Retrieve a particular EP artifact.
     * @see https://docs.valence.desire2learn.com/res/artifact.html#get--d2l-api-eP-(version)-artifact-(objectId)
     * @return /PSR7 (Request)
     * Return. This action retrieves an Artifact JSON
     * data block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID.
     */
    public function getArtifactObjectId($version, $objectId)
    {
        $uri = "/d2l/api/eP/$version/artifact/$objectId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular EP file artifact.
     * @see https://docs.valence.desire2learn.com/res/artifact.html#get--d2l-api-eP-(version)-artifact-file-(objectId)
     * @return /PSR7 (Request)
     * Return. This action retrieves a FileArtifact
     * JSON data block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID.
     * @param [boolean] $c Optional. If “true”, include comments attached to the file artifact.
     * c
     */
    public function getArtifactFileObjectId($version, $objectId, $c = null)
    {
        $queryParrams = [
                            "c" => $c

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/artifact/file/$objectId?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular EP link artifact.
     * @see https://docs.valence.desire2learn.com/res/artifact.html#get--d2l-api-eP-(version)-artifact-link-(objectId)
     * @return /PSR7 (Request)
     * Return. This action retrieves a UrlArtifact
     * JSON data block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID.
     * @param [boolean] $c Optional. If “true”, include comments attached to the file artifact.
     * c
     */
    public function getArtifactLinkObjectId($version, $objectId, $c = null)
    {
        $queryParrams = [
                            "c" => $c

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/artifact/link/$objectId?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Create a new file artifact by starting a new resumable upload or attaching an already uploaded file.
     * @see https://docs.valence.desire2learn.com/res/artifact.html#post--d2l-api-eP-(version)-artifacts-file-new
     * @return /PSR7 (Request)
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
     */
    public function postArtifactsFileNew($version, $fileArtifact)
    {
        $uri = "/d2l/api/eP/$version/artifacts/file/new";
        $body = $fileArtifact;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * Create a new file artifact from a simple file upload.
     * @see https://docs.valence.desire2learn.com/res/artifact.html#post--d2l-api-eP-(version)-artifacts-file-upload
     * @return /PSR7 (Request)
     * Input. Provide a simple POST multipart/form file upload (RFC 1867) to
     * provide the file data for the new artifact.
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $name Optional. Name for the file artifact (if absent, default value is “file”).
     * name
     * @param [string] $description Optional. Description for the file artifact.
     * description
     */
    public function postArtifactsFileUpload($version, $name = null, $description = null)
    {
        $queryParrams = [
                            "name" => $name,                    "description" => $description

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/artifacts/file/upload?$queryString";
        return new Request('POST', $uri);
    }


    /**
     * Update an existing file artifact.
     * @see https://docs.valence.desire2learn.com/res/artifact.html#post--d2l-api-eP-(version)-artifact-file-(objectId)
     * @return /PSR7 (Request)
     * Return. This action returns a FileArtifact
     * JSON data block for the updated file artifact.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID.
     * @param [EP.FileArtifact] $fileArtifact Updated file artifact property data for file artifact.
     */
    public function postArtifactFileObjectId($version, $objectId, $fileArtifact)
    {
        $uri = "/d2l/api/eP/$version/artifact/file/$objectId";
        $body = $fileArtifact;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * Create a new link artifact.
     * @see https://docs.valence.desire2learn.com/res/artifact.html#post--d2l-api-eP-(version)-artifacts-link-new
     * @return /PSR7 (Request)
     * Return. This action returns a UrlArtifact
     * JSON data block for the new link artifact created.
     *
     * @param [D2LVERSION] $version API version.
     * @param [EP.UrlArtifact] $urlArtifact URL artifact property data for your new link artifact.
     */
    public function postArtifactsLinkNew($version, $urlArtifact)
    {
        $uri = "/d2l/api/eP/$version/artifacts/link/new";
        $body = $urlArtifact;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * Update an existing link artifact.
     * @see https://docs.valence.desire2learn.com/res/artifact.html#post--d2l-api-eP-(version)-artifact-link-(objectId)
     * @return /PSR7 (Request)
     * Return. This action returns a UrlArtifact
     * JSON data block for the updated link artifact.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID.
     * @param [EP.UrlArtifact] $urlArtifact Updated URL artifact property data for link artifact.
     */
    public function postArtifactLinkObjectId($version, $objectId, $urlArtifact)
    {
        $uri = "/d2l/api/eP/$version/artifact/link/$objectId";
        $body = $urlArtifact;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }
}
