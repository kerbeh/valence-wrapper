<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * ePortfolio Reflection — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/reflection.html
 */
class EportfolioReflection
{
    /**
     * Delete a reflection.
     * @see https://docs.valence.desire2learn.com/res/reflection.html#delete--d2l-api-eP-(version)-reflection-(objectId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID for reflection.
     */
    public function deleteReflectionObjectId($version, $objectId)
    {
        $uri = "/d2l/api/eP/$version/reflection/$objectId";
        return new Request('GET', $uri);
    }


    /**
     * Remove the association between a reflection and another EP object.
     * @see https://docs.valence.desire2learn.com/res/reflection.html#delete--d2l-api-eP-(version)-reflection-(reflectionId)-on-(objectId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $reflectionId EP object ID for reflection.
     * @param [D2LID] $objectId EP object ID for target object.
     */
    public function deleteReflectionOnReflectionIdObjectId($version, $reflectionId, $objectId)
    {
        $uri = "/d2l/api/eP/$version/reflection/$reflectionId/on/$objectId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a reflection.
     * @see https://docs.valence.desire2learn.com/res/reflection.html#get--d2l-api-eP-(version)-reflection-(objectId)
     * @return /PSR7 (Request)
     * Return. This action retrieves a Reflection
     * JSON data block for the identified reflection.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID for reflection.
     * @param [boolean] $c Optional. If “true”, include all the comments associated with the reflection object.
     * c
     */
    public function getReflectionObjectId($version, $objectId, $c = null)
    {
        $queryParrams = [
                            "c" => $c

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/reflection/$objectId?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Create a new reflection.
     * @see https://docs.valence.desire2learn.com/res/reflection.html#post--d2l-api-eP-(version)-reflections-new
     * @return /PSR7 (Request)
     * Return. This action retrieves a Reflection
     * JSON data block for the new reflection created.
     *
     * @param [D2LVERSION] $version API version.
     * @param [EP.Reflection] $reflection Data for new reflection.
     */
    public function postReflectionsNew($version, $reflection)
    {
        $uri = "/d2l/api/eP/$version/reflections/new";
        $body = $reflection;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update an existing reflection.
     * @see https://docs.valence.desire2learn.com/res/reflection.html#post--d2l-api-eP-(version)-reflection-(objectId)
     * @return /PSR7 (Request)
     * Return. This action returns a Reflection JSON
     * data block for the updated reflection.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID for reflection.
     * @param [EP.Reflection] $reflection Updated data for reflection.
     */
    public function postReflectionObjectId($version, $objectId, $reflection)
    {
        $uri = "/d2l/api/eP/$version/reflection/$objectId";
        $body = $reflection;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Associate a reflection with another EP object.
     * @see https://docs.valence.desire2learn.com/res/reflection.html#post--d2l-api-eP-(version)-reflection-(reflectionId)-on-(objectId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LVERSION] $reflectionId EP object ID for reflection.
     * @param [D2LVERSION] $objectId EP object ID for target object.
     */
    public function postReflectionOnReflectionIdObjectId($version, $reflectionId, $objectId)
    {
        $uri = "/d2l/api/eP/$version/reflection/$reflectionId/on/$objectId";
        return new Request('GET', $uri);
    }
}
