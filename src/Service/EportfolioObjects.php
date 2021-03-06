<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * ePortfolio Objects — Developer Platform (September 2020)
 * @see https://docs.valence.desire2learn.com/res/epobject.html
 */
class EportfolioObjects
{
    /**
     * Retrieve an EP object using a context chain of object IDs.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object
     * @return /PSR7 (Request)
     * Return. This action retrieves a EpObject JSON
     * data block containing the properties of your identified EP object.
     *
     * @param [D2LVERSION] $version API version.
     * @param [Context chain] $context Context chain of object IDs to follow to find the EP object.
     * @param [boolean] $c Optional. If “true”, include any comments attached to the object.
     * c
     */
    public function getObject($version, $context, $c = null)
    {
        $queryParrams = [
                            "context" => $context,                    "c" => $c

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/object?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieves the associated resource for an EP object (identified by a provided
     * context chain of object ID).
     * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-content
     * @return /PSR7 (Request)
     * Return. This action retrieves a file stream containing the contents of
     * the identified EP object’s associated resource.
     *
     * @param [D2LVERSION] $version API version.
     * @param [Context chain] $context Context chain of object IDs to follow to find the EP object.
     */
    public function getObjectContent($version, $context)
    {
        $queryParrams = [
                            "context" => $context

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/object/content?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieves a thumbnail of the associated resource for an EP object (identified
     * by a provided context chain of object IDs).
     * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-thumbnail
     * @return /PSR7 (Request)
     * Return. This action retrieves a file stream containing a thumbnail of the
     * contents of the identified EP object’s associated resource.
     *
     * @param [D2LVERSION] $version API verison.
     * @param [Context chain] $context Context chain of object IDs to follow to find the EP object.
     * @param [THUMBSZ] $size Thumbnail size to generate.
     */
    public function getObjectThumbnail($version, $context, $size)
    {
        $queryParrams = [
                            "context" => $context,                    "size" => $size

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/object/thumbnail?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve an EP object by ID.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-(objectId)
     * @return /PSR7 (Request)
     * Return. This action retrieves a EpObject JSON
     * data block containing the properties of your identified EP object.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID.
     * @param [boolean] $c Optional. If “true”, include any comments attached to the object.
     * c
     */
    public function getObjectObjectId($version, $objectId, $c = null)
    {
        $queryParrams = [
                            "c" => $c

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/object/$objectId?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the list of EP objects associated with a particular EP object.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-(objectId)-associations-
     * @return /PSR7 (Request)
     * Return. This action retrieves a paged result set
     * containing, in a single page, the resulting
     * EpObject data blocks associated with the identified
     * EP object. Use the type query parameter to control the kind of EP associations
     * to retrieve.
     *
     * @param [D2LID] $objectId EP object ID.
     * @param [EPASSOC_T] $type Optional. Assocation type to act as a filter.
     * type
     */
    public function getObjectAssociationsObjectId($objectId, $type = null)
    {
        $queryParrams = [
                            "type" => $type

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/object/$objectId/associations/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieves the associated resource for an EP object (identified by object ID).
     * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-(objectId)-content
     * @return /PSR7 (Request)
     * Return. This action retrieves a file stream containing the contents of
     * the identified EP object’s associated resource.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID.
     */
    public function getObjectContentObjectId($version, $objectId)
    {
        $uri = "/d2l/api/eP/$version/object/$objectId/content";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the EP objects owned by the current user context.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-objects-my-
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting EpObject JSON data blocks
     * for the segment following your bookmark parameter (or the first segment if
     * that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [boolean] $c Optional. If “true”, include any comments attached to the object.
     * c
     * @param [string] $q Optional. Query filter expression to narrow results.
     * q
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     * @param [integer] $pagesize Optional. Number of entries to retrieve in a single data set segment; if present, must be 1 or greater.
     * pagesize
     */
    public function getObjectsMy($version, $c = null, $q = null, $bookmark = null, $pagesize = null)
    {
        $queryParrams = [
                            "c" => $c,                    "q" => $q,                    "bookmark" => $bookmark,                    "pagesize" => $pagesize

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/objects/my/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of all targets an EP object is currently shared with.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-sharetargets
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting ShareTarget JSON data
     * blocks for the segment following your bookmark parameter (or the first
     * segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $search Optional. Name to search for.
     * search
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     * @param [integer] $pagesize Optional. Number of entries to retrieve in a single data set segment; if present, must be 1 or greater.
     * pagesize
     */
    public function getObjectSharetargets($version, $search = null, $bookmark = null, $pagesize = null)
    {
        $queryParrams = [
                            "search" => $search,                    "bookmark" => $bookmark,                    "pagesize" => $pagesize

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/object/sharetargets?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of all the sharing targets owned by the current user context.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-sharetargets-my
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting ShareTarget JSON data
     * blocks for the segment following your bookmark parameter (or the first
     * segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $search Optional. Name to search for.
     * search
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     * @param [integer] $pagesize Optional. Number of entries to retrieve in a single data set segment; if present, must be 1 or greater.
     * pagesize
     */
    public function getObjectSharetargetsMy($version, $search = null, $bookmark = null, $pagesize = null)
    {
        $queryParrams = [
                            "search" => $search,                    "bookmark" => $bookmark,                    "pagesize" => $pagesize

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/object/sharetargets/my?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of the available sharing groups that an EP object can be shared with.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-sharetargets-sharinggroups
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting sharing group ShareTarget JSON
     * data blocks for the segment following your bookmark parameter (or the first
     * segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $search Optional. Name to search for.
     * search
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     * @param [integer] $pagesize Optional. Number of entries to retrieve in a single data set segment; if present, must be 1 or greater.
     * pagesize
     */
    public function getObjectSharetargetsSharinggroups($version, $search = null, $bookmark = null, $pagesize = null)
    {
        $queryParrams = [
                            "search" => $search,                    "bookmark" => $bookmark,                    "pagesize" => $pagesize

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/object/sharetargets/sharinggroups?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of all available users that an EP object can be shared with.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-sharetargets-users
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting user ShareTarget JSON
     * data blocks for the segment following your bookmark parameter (or the first
     * segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $search Optional. Name to search for.
     * search
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     * @param [integer] $pagesize Optional. Number of entries to retrieve in a single data set segment; if present, must be 1 or greater.
     * pagesize
     */
    public function getObjectSharetargetsUsers($version, $search = null, $bookmark = null, $pagesize = null)
    {
        $queryParrams = [
                            "search" => $search,                    "bookmark" => $bookmark,                    "pagesize" => $pagesize

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/object/sharetargets/users?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the shares for a particular EP object.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-(objectId)-shares-
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting Share JSON data blocks in a
     * single page.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID.
     */
    public function getObjectSharesObjectId($version, $objectId)
    {
        $uri = "/d2l/api/eP/$version/object/$objectId/shares/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the EP objects shared by the current user context, and recently
     * modified by others.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-objects-my-shared-modified-
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting EpObject JSON data blocks
     * in a single page.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getObjectsMySharedModified($version)
    {
        $uri = "/d2l/api/eP/$version/objects/my/shared/modified/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all EP objects that others have shared to the current user context.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-objects-shared-
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting EpObject JSON data blocks
     * for the segment following your bookmark parameter (or the first segment if
     * that parameter is empty or missing).
     *
     * @param [D2LID] $version API version.
     * @param [boolean] $c Optional. If “true”, include any comments attached to the objects.
     * c
     * @param [string] $q Optional. Query filter expression to narrow results.
     * q
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     * @param [integer] $pagesize Optional. Number of entries to retrieve in a single data set segment; if present, must be 1 or greater.
     * pagesize
     */
    public function getObjectsShared($version, $c = null, $q = null, $bookmark = null, $pagesize = null)
    {
        $queryParrams = [
                            "c" => $c,                    "q" => $q,                    "bookmark" => $bookmark,                    "pagesize" => $pagesize

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/objects/shared/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all users sharing EP objects to the current user context.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-users-sharing-
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting UserObject JSON data
     * blocks in a single page.
     *
     * @param [D2LID] $version API version.
     * @param [string] $q Optional. Query filter expression to narrow results.
     * q
     */
    public function getUsersSharing($version, $q = null)
    {
        $queryParrams = [
                            "q" => $q

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/eP/$version/users/sharing/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Unshare a particular EP object from a sharing profile.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#post--d2l-api-eP-(version)-object-(objectId)-share-delete
     * @return /PSR7 (Request)
     * Input. Provide a simple POST form data set with profileTargetId and
     * profileType values.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID.
     */
    public function postObjectShareDeleteObjectId($version, $objectId)
    {
        $uri = "/d2l/api/eP/$version/object/$objectId/share/delete";
        return new Request('POST', $uri);
    }


    /**
     * Share a particular EP object to a sharing profile.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#post--d2l-api-eP-(version)-object-(objectId)-share-new
     * @return /PSR7 (Request)
     * Input. Provide a simple POST form data set with profileTargetId,
     * profileType, and permissions values. You can grant more than one
     * permission with a single action by providing the permissions query parameter
     * more than once: &permissions=2&permissions=3&permissions=4, and so
     * forth. Note that the service sets the view permission (1) on all share
     * targets by default, so you do not need to explicitly set it with this action.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $objectId EP object ID.
     */
    public function postObjectShareNewObjectId($version, $objectId)
    {
        $uri = "/d2l/api/eP/$version/object/$objectId/share/new";
        return new Request('POST', $uri);
    }


    /**
     * Retrieve all the users on the calling user’s ignored-users list.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-ignoredusers-
     * @return /PSR7 (Request)
     * Return. This action retrieves a list of user IDs currently on the calling
     * user’s ignored-users list.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getIgnoredusers($version)
    {
        $uri = "/d2l/api/eP/$version/ignoredusers/";
        return new Request('GET', $uri);
    }


    /**
     * Add a user to the calling user’s ignored-user list.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#post--d2l-api-eP-(version)-ignoredusers-add
     * @return /PSR7 (Request)
     * Input. Note that you must pass a single JSON number in the body of this
     * request; for example, if you want to add user with ID 1234 to the calling
     * user’s ignored list, your POST body would be:
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID as single JSON number] $userId User to add to the ignored-user list.
     */
    public function postIgnoredusersAdd($version, $userId)
    {
        $uri = "/d2l/api/eP/$version/ignoredusers/add";
        $body = $userId;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * Remove a user from the calling user’s ignored-user list.
     * @see https://docs.valence.desire2learn.com/res/epobject.html#post--d2l-api-eP-(version)-ignoredusers-remove
     * @return /PSR7 (Request)
     * Input. Note that you must pass a single JSON number in the body of this
     * request; for example, if you want to remove user with ID 1234 from the
     * calling user’s ignored list, your POST body would be:
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID as single JSON number] $userId User to remove from the ignored-user list.
     */
    public function postIgnoredusersRemove($version, $userId)
    {
        $uri = "/d2l/api/eP/$version/ignoredusers/remove";
        $body = $userId;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }
}
