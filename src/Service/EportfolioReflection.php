<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * ePortfolio Reflection — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/reflection.html
 */
class EportfolioReflection
{
	/**
	 * Delete a reflection.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID for reflection.
	 * @see https://docs.valence.desire2learn.com/res/reflection.html#delete--d2l-api-eP-(version)-reflection-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function deleteReflection($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/reflection/$objectId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Remove the association between a reflection and another EP object.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $reflectionId EP object ID for reflection.
	 * @param [D2LID] $objectId EP object ID for target object.
	 * @see https://docs.valence.desire2learn.com/res/reflection.html#delete--d2l-api-eP-(version)-reflection-(reflectionId)-on-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function deleteReflectionOn($version, $reflectionId, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/reflection/$reflectionId/on/$objectId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a reflection.
	 *
	 * Return. This action retrieves a Reflection
	 * JSON data block for the identified reflection.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID for reflection.
	 * @see https://docs.valence.desire2learn.com/res/reflection.html#get--d2l-api-eP-(version)-reflection-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function getReflection($version, $objectId, $c = null)
	{
		$queryParrams = [
		                    "c" => $c

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/reflection/$objectId?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new reflection.
	 *
	 * Return. This action retrieves a Reflection
	 * JSON data block for the new reflection created.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [EP.Reflection] $reflection Data for new reflection.
	 * @see https://docs.valence.desire2learn.com/res/reflection.html#post--d2l-api-eP-(version)-reflections-new
	 * @return /PSR7 (Request)
	 */
	public function postReflectionsNew($version, $reflection)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/reflections/new", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update an existing reflection.
	 *
	 * Return. This action returns a Reflection JSON
	 * data block for the updated reflection.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID for reflection.
	 * @param [EP.Reflection] $reflection Updated data for reflection.
	 * @see https://docs.valence.desire2learn.com/res/reflection.html#post--d2l-api-eP-(version)-reflection-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function postReflection($version, $objectId, $reflection)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/reflection/$objectId", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Associate a reflection with another EP object.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LVERSION] $reflectionId EP object ID for reflection.
	 * @param [D2LVERSION] $objectId EP object ID for target object.
	 * @see https://docs.valence.desire2learn.com/res/reflection.html#post--d2l-api-eP-(version)-reflection-(reflectionId)-on-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function postReflectionOn($version, $reflectionId, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/reflection/$reflectionId/on/$objectId", 'POST');
		return new Request('GET', $uri);
	}
}
