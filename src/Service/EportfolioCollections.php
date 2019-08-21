<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * ePortfolio Collections — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/collection.html
 */
class EportfolioCollections
{
	/**
	 * Delete a particular EP collection.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID for collection.
	 * @see https://docs.valence.desire2learn.com/res/collection.html#delete--d2l-api-eP-(version)-collection-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function deleteCollection($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/collection/$objectId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular EP collection, without its contents.
	 *
	 * Return. This action retrieves a Collection
	 * JSON data block but without populating the Items property. The service will
	 * populate the ItemsCount and ItemIds properties, so you will know what the
	 * collection’s contents are.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID for collection.
	 * @see https://docs.valence.desire2learn.com/res/collection.html#get--d2l-api-eP-(version)-collection-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function getCollection($version, $objectId, $c = null)
	{
		$queryParrams = [
		                    "c" => $c

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/collection/$objectId?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular EP collection, with its contents.
	 *
	 * Return. This action retrieves a Collection
	 * JSON data block with a fully populated Items property array.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID for collection.
	 * @see https://docs.valence.desire2learn.com/res/collection.html#get--d2l-api-eP-(version)-collection-(objectId)-contents-
	 * @return /PSR7 (Request)
	 */
	public function getCollectionContents($version, $objectId, $c = null)
	{
		$queryParrams = [
		                    "c" => $c

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/collection/$objectId/contents/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new EP collection.
	 *
	 * Return. This action returns a Collection
	 * JSON data block for the new collection created.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [EP.Collection] $collection Properties for the new collection.
	 * @see https://docs.valence.desire2learn.com/res/collection.html#post--d2l-api-eP-(version)-collections-new
	 * @return /PSR7 (Request)
	 */
	public function postCollectionsNew($version, $collection)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/collections/new", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update an EP collection.
	 *
	 * Return. This action returns a Collection
	 * JSON data block for the updated collection.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID for collection.
	 * @param [EP.Collection] $collection Updated properties for collection.
	 * @see https://docs.valence.desire2learn.com/res/collection.html#post--d2l-api-eP-(version)-collection-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function postCollection($version, $objectId, $collection)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/collection/$objectId", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Add an existing EP object to an EP collection.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $collectionId EP object ID for collection.
	 * @param [D2LID] $objectId EP object ID for item in collection.
	 * @see https://docs.valence.desire2learn.com/res/collection.html#post--d2l-api-eP-(version)-collection-(collectionId)-add-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function postCollectionAdd($version, $collectionId, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/collection/$collectionId/add/$objectId", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Remove a particular item from an EP collection.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $collectionId EP object ID for collection.
	 * @param [D2LID] $objectId EP object ID for item in collection.
	 * @see https://docs.valence.desire2learn.com/res/collection.html#post--d2l-api-eP-(version)-collection-(collectionId)-remove-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function postCollectionRemove($version, $collectionId, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/collection/$collectionId/remove/$objectId", 'POST');
		return new Request('GET', $uri);
	}
}
