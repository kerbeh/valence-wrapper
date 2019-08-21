<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Subscriptions to user and object activities — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/subscription.html
 */
class SubscriptionsToUserAndObjectActivities
{
	/**
	 * Remove an object from the list of subscribed-to EP objects for the calling user context.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $id Object ID for the subscribed-to object.
	 * @see https://docs.valence.desire2learn.com/res/subscription.html#delete--d2l-api-eP-(version)-subscriptions-objects-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function deleteSubscriptionsObjects($version, $id)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/subscriptions/objects/$objectId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Return a list of subscribed-to EP objects for the calling user context.
	 *
	 * Return. This action retrieves a JSON data block containing an array of
	 * all the EP object IDs for the objects subscribed to
	 * by the calling context’s user.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/subscription.html#get--d2l-api-eP-(version)-subscriptions-objects-
	 * @return /PSR7 (Request)
	 */
	public function getSubscriptionsObjects($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/subscriptions/objects/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Determine if the calling user context already subscribes to a provided EP object ID.
	 *
	 * Return. This action retrieves a JSON boolean value: true if the calling
	 * user context is currently subscribed to the identified EP object; otherwise, false.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/subscription.html#get--d2l-api-eP-(version)-subscriptions-objects-exists
	 * @return /PSR7 (Request)
	 */
	public function getSubscriptionsObjectsExists($version, $objectId = null)
	{
		$queryParrams = [
		                    "objectId" => $objectId

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/subscriptions/objects/exists?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Add an EP object to the list of subscribed-to objects for the calling user context.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $id Object ID for the subscribed-to object.
	 * @see https://docs.valence.desire2learn.com/res/subscription.html#post--d2l-api-eP-(version)-subscriptions-objects-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function postSubscriptionsObjects($version, $id)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/subscriptions/objects/$objectId", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Remove a user from the list of subscribed-to users for the calling user context.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $id User ID for the subscribed-to user.
	 * @see https://docs.valence.desire2learn.com/res/subscription.html#delete--d2l-api-eP-(version)-subscriptions-users-(userId)
	 * @return /PSR7 (Request)
	 */
	public function deleteSubscriptionsUsers($version, $id)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/subscriptions/users/$userId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Return a list of subscribed-to users for the calling user context.
	 *
	 * Return. This action retrieves a JSON data block containing an array of
	 * all the User IDs for the users subscribed to by the calling context’s user.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/subscription.html#get--d2l-api-eP-(version)-subscriptions-users-
	 * @return /PSR7 (Request)
	 */
	public function getSubscriptionsUsers($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/subscriptions/users/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Determine if the calling user context already subscribes to a provided User ID.
	 *
	 * Return. This action retrieves a JSON boolean value: true if the calling
	 * user context is currently subscribed to the identified user; otherwise, false.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/subscription.html#get--d2l-api-eP-(version)-subscriptions-users-exists
	 * @return /PSR7 (Request)
	 */
	public function getSubscriptionsUsersExists($version, $userId = null)
	{
		$queryParrams = [
		                    "userId" => $userId

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/subscriptions/users/exists?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Add a user to the list of subscribed-to users for the calling user context.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $id User ID for user to subscribe to.
	 * @see https://docs.valence.desire2learn.com/res/subscription.html#post--d2l-api-eP-(version)-subscriptions-users-(userId)
	 * @return /PSR7 (Request)
	 */
	public function postSubscriptionsUsers($version, $id)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/subscriptions/users/$userId", 'POST');
		return new Request('GET', $uri);
	}
}
