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
<<<<<<< HEAD
        $uri = "d2l/api/eP/$version/reflection/$objectId";
=======
        $uri = "/d2l/api/eP/$version/reflection/$objectId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
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
<<<<<<< HEAD
        $uri = "d2l/api/eP/$version/reflection/$reflectionId/on/$objectId";
=======
        $uri = "/d2l/api/eP/$version/reflection/$reflectionId/on/$objectId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
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
<<<<<<< HEAD
        $uri = "d2l/api/eP/$version/reflection/$objectId?$queryString";
=======
        $uri = "/d2l/api/eP/$version/reflection/$objectId?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
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
<<<<<<< HEAD
        $uri = "d2l/api/eP/$version/reflections/new";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/eP/$version/reflections/new";
        $body = $reflection;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
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
<<<<<<< HEAD
        $uri = "d2l/api/eP/$version/reflection/$objectId";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/eP/$version/reflection/$objectId";
        $body = $reflection;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
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
<<<<<<< HEAD
        $uri = "d2l/api/eP/$version/reflection/$reflectionId/on/$objectId";
=======
        $uri = "/d2l/api/eP/$version/reflection/$reflectionId/on/$objectId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }
}
