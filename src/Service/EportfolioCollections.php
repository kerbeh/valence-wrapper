<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * ePortfolio Collections — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/collection.html
 */
class EportfolioCollections
{
    /**
     * Delete a particular EP collection.
     * @see https://docs.valence.desire2learn.com/res/collection.html#delete--d2l-api-eP-(version)-collection-(objectId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID for collection.
     */
    public function deleteCollectionObjectId($version, $objectId)
    {
        $uri = "/d2l/api/eP/$version/collection/$objectId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular EP collection, without its contents.
     * @see https://docs.valence.desire2learn.com/res/collection.html#get--d2l-api-eP-(version)-collection-(objectId)
     * @return /PSR7 (Request)
     * Return. This action retrieves a Collection
     * JSON data block but without populating the Items property. The service will
     * populate the ItemsCount and ItemIds properties, so you will know what the
     * collection’s contents are.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID for collection.
     * @param [boolean] $c Optional. If “true”, include comments attached to the collection.
     * c
     */
    public function getCollectionObjectId($version, $objectId, $c = null)
    {
        $queryParrams = [
                            "c" => $c

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/collection/$objectId?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular EP collection, with its contents.
     * @see https://docs.valence.desire2learn.com/res/collection.html#get--d2l-api-eP-(version)-collection-(objectId)-contents-
     * @return /PSR7 (Request)
     * Return. This action retrieves a Collection
     * JSON data block with a fully populated Items property array.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID for collection.
     * @param [boolean] $c Optional. If “true”, include comments attached to the collection.
     * c
     */
    public function getCollectionContentsObjectId($version, $objectId, $c = null)
    {
        $queryParrams = [
                            "c" => $c

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/collection/$objectId/contents/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Create a new EP collection.
     * @see https://docs.valence.desire2learn.com/res/collection.html#post--d2l-api-eP-(version)-collections-new
     * @return /PSR7 (Request)
     * Return. This action returns a Collection
     * JSON data block for the new collection created.
     *
     * @param [D2LVERSION] $version API version.
     * @param [EP.Collection] $collection Properties for the new collection.
     */
    public function postCollectionsNew($version, $collection)
    {
        $uri = "/d2l/api/eP/$version/collections/new";
        $body = collection;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update an EP collection.
     * @see https://docs.valence.desire2learn.com/res/collection.html#post--d2l-api-eP-(version)-collection-(objectId)
     * @return /PSR7 (Request)
     * Return. This action returns a Collection
     * JSON data block for the updated collection.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID for collection.
     * @param [EP.Collection] $collection Updated properties for collection.
     */
    public function postCollectionObjectId($version, $objectId, $collection)
    {
        $uri = "/d2l/api/eP/$version/collection/$objectId";
        $body = collection;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Add an existing EP object to an EP collection.
     * @see https://docs.valence.desire2learn.com/res/collection.html#post--d2l-api-eP-(version)-collection-(collectionId)-add-(objectId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $collectionId EP object ID for collection.
     * @param [D2LID] $objectId EP object ID for item in collection.
     */
    public function postCollectionAddCollectionIdObjectId($version, $collectionId, $objectId)
    {
        $uri = "/d2l/api/eP/$version/collection/$collectionId/add/$objectId";
        return new Request('GET', $uri);
    }


    /**
     * Remove a particular item from an EP collection.
     * @see https://docs.valence.desire2learn.com/res/collection.html#post--d2l-api-eP-(version)-collection-(collectionId)-remove-(objectId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $collectionId EP object ID for collection.
     * @param [D2LID] $objectId EP object ID for item in collection.
     */
    public function postCollectionRemoveCollectionIdObjectId($version, $collectionId, $objectId)
    {
        $uri = "/d2l/api/eP/$version/collection/$collectionId/remove/$objectId";
        return new Request('GET', $uri);
    }
}
