<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * ePortfolio Presentation — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/presentation.html
 */
class EportfolioPresentation
{
	/**
	 * Delete a particular presentation.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID.
	 * @see https://docs.valence.desire2learn.com/res/presentation.html#delete--d2l-api-eP-(version)-presentation-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function deletePresentation($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/presentation/$objectId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular presentation.
	 *
	 * Return. This action retrieves a Presentation
	 * JSON data block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID.
	 * @see https://docs.valence.desire2learn.com/res/presentation.html#get--d2l-api-eP-(version)-presentation-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function getPresentation($version, $objectId, $c = null)
	{
		$queryParrams = [
		                    "c" => $c

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/presentation/$objectId?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new presentation.
	 *
	 * Return. This action returns a Presentation
	 * JSON data block, in the Fetch form, for the newly created presentation.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/presentation.html#post--d2l-api-eP-(version)-presentations-new
	 * @return /PSR7 (Request)
	 */
	public function postPresentationsNew($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/presentations/new", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update an existing presentation.
	 *
	 * Return. This action returns a Presentation
	 * JSON data block for the updated presentation.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID.
	 * @see https://docs.valence.desire2learn.com/res/presentation.html#post--d2l-api-eP-(version)-presentation-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function postPresentation($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/presentation/$objectId", 'POST');
		return new Request('GET', $uri);
	}
}
