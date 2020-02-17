<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Subscriptions to user and object activities — Developer Platform (September 2019)
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
<<<<<<< HEAD
        $uri = "d2l/api/eP/$version/subscriptions/objects/$objectId";
=======
        $uri = "/d2l/api/eP/$version/subscriptions/objects/$objectId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
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
<<<<<<< HEAD
        $uri = "d2l/api/eP/$version/subscriptions/objects/";
=======
        $uri = "/d2l/api/eP/$version/subscriptions/objects/";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
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
<<<<<<< HEAD
        $uri = "d2l/api/eP/$version/subscriptions/objects/exists?$queryString";
=======
        $uri = "/d2l/api/eP/$version/subscriptions/objects/exists?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
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
<<<<<<< HEAD
        $uri = "d2l/api/eP/$version/subscriptions/objects/$objectId";
=======
        $uri = "/d2l/api/eP/$version/subscriptions/objects/$objectId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
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
<<<<<<< HEAD
        $uri = "d2l/api/eP/$version/subscriptions/users/$userId";
=======
        $uri = "/d2l/api/eP/$version/subscriptions/users/$userId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
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
<<<<<<< HEAD
        $uri = "d2l/api/eP/$version/subscriptions/users/";
=======
        $uri = "/d2l/api/eP/$version/subscriptions/users/";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
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
<<<<<<< HEAD
        $uri = "d2l/api/eP/$version/subscriptions/users/exists?$queryString";
=======
        $uri = "/d2l/api/eP/$version/subscriptions/users/exists?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
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
<<<<<<< HEAD
        $uri = "d2l/api/eP/$version/subscriptions/users/$userId";
=======
        $uri = "/d2l/api/eP/$version/subscriptions/users/$userId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }
}
