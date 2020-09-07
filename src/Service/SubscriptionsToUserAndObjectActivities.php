<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Subscriptions to user and object activities — Developer Platform (September 2020)
 * @see https://docs.valence.desire2learn.com/res/subscription.html
 */
class SubscriptionsToUserAndObjectActivities
{
    /**
     * Remove an object from the list of subscribed-to EP objects for the calling user context.
     * @see https://docs.valence.desire2learn.com/res/subscription.html#delete--d2l-api-eP-(version)-subscriptions-objects-(objectId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $id Object ID for the subscribed-to object.
     */
    public function deleteSubscriptionsObjectsId($version, $id)
    {
        $uri = "/d2l/api/eP/$version/subscriptions/objects/$objectId";
        return new Request('GET', $uri);
    }


    /**
     * Return a list of subscribed-to EP objects for the calling user context.
     * @see https://docs.valence.desire2learn.com/res/subscription.html#get--d2l-api-eP-(version)-subscriptions-objects-
     * @return /PSR7 (Request)
     * Return. This action retrieves a JSON data block containing an array of
     * all the EP object IDs for the objects subscribed to
     * by the calling context’s user.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getSubscriptionsObjects($version)
    {
        $uri = "/d2l/api/eP/$version/subscriptions/objects/";
        return new Request('GET', $uri);
    }


    /**
     * Determine if the calling user context already subscribes to a provided EP object ID.
     * @see https://docs.valence.desire2learn.com/res/subscription.html#get--d2l-api-eP-(version)-subscriptions-objects-exists
     * @return /PSR7 (Request)
     * Return. This action retrieves a JSON boolean value: true if the calling
     * user context is currently subscribed to the identified EP object; otherwise, false.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object to check for subscription.
     */
    public function getSubscriptionsObjectsExists($version, $objectId)
    {
        $queryParrams = [
                            "objectId" => $objectId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/subscriptions/objects/exists?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Add an EP object to the list of subscribed-to objects for the calling user context.
     * @see https://docs.valence.desire2learn.com/res/subscription.html#post--d2l-api-eP-(version)-subscriptions-objects-(objectId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $id Object ID for the subscribed-to object.
     */
    public function postSubscriptionsObjectsId($version, $id)
    {
        $uri = "/d2l/api/eP/$version/subscriptions/objects/$objectId";
        return new Request('GET', $uri);
    }


    /**
     * Remove a user from the list of subscribed-to users for the calling user context.
     * @see https://docs.valence.desire2learn.com/res/subscription.html#delete--d2l-api-eP-(version)-subscriptions-users-(userId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $id User ID for the subscribed-to user.
     */
    public function deleteSubscriptionsUsersId($version, $id)
    {
        $uri = "/d2l/api/eP/$version/subscriptions/users/$userId";
        return new Request('GET', $uri);
    }


    /**
     * Return a list of subscribed-to users for the calling user context.
     * @see https://docs.valence.desire2learn.com/res/subscription.html#get--d2l-api-eP-(version)-subscriptions-users-
     * @return /PSR7 (Request)
     * Return. This action retrieves a JSON data block containing an array of
     * all the User IDs for the users subscribed to by the calling context’s user.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getSubscriptionsUsers($version)
    {
        $uri = "/d2l/api/eP/$version/subscriptions/users/";
        return new Request('GET', $uri);
    }


    /**
     * Determine if the calling user context already subscribes to a provided User ID.
     * @see https://docs.valence.desire2learn.com/res/subscription.html#get--d2l-api-eP-(version)-subscriptions-users-exists
     * @return /PSR7 (Request)
     * Return. This action retrieves a JSON boolean value: true if the calling
     * user context is currently subscribed to the identified user; otherwise, false.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User to look for amongst current subscriptions.
     */
    public function getSubscriptionsUsersExists($version, $userId)
    {
        $queryParrams = [
                            "userId" => $userId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/subscriptions/users/exists?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Add a user to the list of subscribed-to users for the calling user context.
     * @see https://docs.valence.desire2learn.com/res/subscription.html#post--d2l-api-eP-(version)-subscriptions-users-(userId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $id User ID for user to subscribe to.
     */
    public function postSubscriptionsUsersId($version, $id)
    {
        $uri = "/d2l/api/eP/$version/subscriptions/users/$userId";
        return new Request('GET', $uri);
    }
}
