<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * ePortfolio Presentation — Developer Platform (September 2020)
 * @see https://docs.valence.desire2learn.com/res/presentation.html
 */
class EportfolioPresentation
{
    /**
     * Delete a particular presentation.
     * @see https://docs.valence.desire2learn.com/res/presentation.html#delete--d2l-api-eP-(version)-presentation-(objectId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID.
     */
    public function deletePresentationObjectId($version, $objectId)
    {
        $uri = "/d2l/api/eP/$version/presentation/$objectId";
        return new Request('DELETE', $uri);
    }


    /**
     * Retrieve a particular presentation.
     * @see https://docs.valence.desire2learn.com/res/presentation.html#get--d2l-api-eP-(version)-presentation-(objectId)
     * @return /PSR7 (Request)
     * Return. This action retrieves a Presentation
     * JSON data block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID.
     * @param [boolean] $c Optional. If “true”, include comments attached to the presentation.
     * c
     */
    public function getPresentationObjectId($version, $objectId, $c = null)
    {
        $queryParrams = [
                            "c" => $c

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/presentation/$objectId?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Create a new presentation.
     * @see https://docs.valence.desire2learn.com/res/presentation.html#post--d2l-api-eP-(version)-presentations-new
     * @return /PSR7 (Request)
     * Return. This action returns a Presentation
     * JSON data block, in the Fetch form, for the newly created presentation.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function postPresentationsNew($version)
    {
        $uri = "/d2l/api/eP/$version/presentations/new";
        return new Request('POST', $uri);
    }


    /**
     * Update an existing presentation.
     * @see https://docs.valence.desire2learn.com/res/presentation.html#post--d2l-api-eP-(version)-presentation-(objectId)
     * @return /PSR7 (Request)
     * Return. This action returns a Presentation
     * JSON data block for the updated presentation.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID.
     */
    public function postPresentationObjectId($version, $objectId)
    {
        $uri = "/d2l/api/eP/$version/presentation/$objectId";
        return new Request('POST', $uri);
    }
}
