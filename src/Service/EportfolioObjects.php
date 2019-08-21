<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * ePortfolio Objects — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/epobject.html
 */
class EportfolioObjects
{
	/**
	 * Retrieve an EP object by ID.
	 *
	 * Return. This action retrieves a EpObject JSON
	 * data block containing the properties of your identified EP object.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-(objectId)
	 * @return /PSR7 (Request)
	 */
	public function getObject($version, $objectId, $c = null)
	{
		$queryParrams = [
		                    "c" => $c

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/object/$objectId?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieves the associated resource for an EP object (identified by object ID).
	 *
	 * Return. This action retrieves a file stream containing the contents of
	 * the identified EP object’s associated resource.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-(objectId)-content
	 * @return /PSR7 (Request)
	 */
	public function getObjectContent($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/object/$objectId/content", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieves a thumbnail of the associated resource for an EP object (identified
	 * by a provided context chain of object IDs).
	 *
	 * Return. This action retrieves a file stream containing a thumbnail of the
	 * contents of the identified EP object’s associated resource.
	 *
	 * @param [D2LVERSION] $version API verison.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-thumbnail
	 * @return /PSR7 (Request)
	 */
	public function getObjectThumbnail($version, $size = null)
	{
		$queryParrams = [
		                    "size" => $size

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/object/thumbnail?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the list of EP objects associated with a particular EP object.
	 *
	 * Return. This action retrieves a paged result set
	 * containing, in a single page, the resulting
	 * EpObject data blocks associated with the identified
	 * EP object. Use the type query parameter to control the kind of EP associations
	 * to retrieve.
	 *
	 * @param [D2LID] $objectId EP object ID.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-(objectId)-associations-
	 * @return /PSR7 (Request)
	 */
	public function getObjectAssociations($objectId, $type = null)
	{
		$queryParrams = [
		                    "type" => $type

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/object/$objectId/associations/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the EP objects owned by the current user context.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting EpObject JSON data blocks
	 * for the segment following your bookmark parameter (or the first segment if
	 * that parameter is empty or missing).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-objects-my-
	 * @return /PSR7 (Request)
	 */
	public function getObjectsMy($version, $bookmark = null, $c = null, $pagesize = null, $q = null)
	{
		$queryParrams = [
		                    "c" => $c,                    "q" => $q,                    "bookmark" => $bookmark,                    "pagesize" => $pagesize

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/objects/my/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of all targets an EP object is currently shared with.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting ShareTarget JSON data
	 * blocks for the segment following your bookmark parameter (or the first
	 * segment if that parameter is empty or missing).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-sharetargets
	 * @return /PSR7 (Request)
	 */
	public function getObjectSharetargets($version, $bookmark = null, $pagesize = null, $search = null)
	{
		$queryParrams = [
		                    "search" => $search,                    "bookmark" => $bookmark,                    "pagesize" => $pagesize

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/object/sharetargets?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of all the sharing targets owned by the current user context.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting ShareTarget JSON data
	 * blocks for the segment following your bookmark parameter (or the first
	 * segment if that parameter is empty or missing).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-sharetargets-my
	 * @return /PSR7 (Request)
	 */
	public function getObjectSharetargetsMy($version, $bookmark = null, $pagesize = null, $search = null)
	{
		$queryParrams = [
		                    "search" => $search,                    "bookmark" => $bookmark,                    "pagesize" => $pagesize

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/object/sharetargets/my?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of the available sharing groups that an EP object can be shared with.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting sharing group ShareTarget JSON
	 * data blocks for the segment following your bookmark parameter (or the first
	 * segment if that parameter is empty or missing).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-sharetargets-sharinggroups
	 * @return /PSR7 (Request)
	 */
	public function getObjectSharetargetsSharinggroups($version, $bookmark = null, $pagesize = null, $search = null)
	{
		$queryParrams = [
		                    "search" => $search,                    "bookmark" => $bookmark,                    "pagesize" => $pagesize

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/object/sharetargets/sharinggroups?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of all available users that an EP object can be shared with.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting user ShareTarget JSON
	 * data blocks for the segment following your bookmark parameter (or the first
	 * segment if that parameter is empty or missing).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-sharetargets-users
	 * @return /PSR7 (Request)
	 */
	public function getObjectSharetargetsUsers($version, $bookmark = null, $pagesize = null, $search = null)
	{
		$queryParrams = [
		                    "search" => $search,                    "bookmark" => $bookmark,                    "pagesize" => $pagesize

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/object/sharetargets/users?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the shares for a particular EP object.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting Share JSON data blocks in a
	 * single page.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-object-(objectId)-shares-
	 * @return /PSR7 (Request)
	 */
	public function getObjectShares($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/object/$objectId/shares/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the EP objects shared by the current user context, and recently
	 * modified by others.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting EpObject JSON data blocks
	 * in a single page.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-objects-my-shared-modified-
	 * @return /PSR7 (Request)
	 */
	public function getObjectsMySharedModified($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/objects/my/shared/modified/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all EP objects that others have shared to the current user context.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting EpObject JSON data blocks
	 * for the segment following your bookmark parameter (or the first segment if
	 * that parameter is empty or missing).
	 *
	 * @param [D2LID] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-objects-shared-
	 * @return /PSR7 (Request)
	 */
	public function getObjectsShared($version, $bookmark = null, $c = null, $pagesize = null, $q = null)
	{
		$queryParrams = [
		                    "c" => $c,                    "q" => $q,                    "bookmark" => $bookmark,                    "pagesize" => $pagesize

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/objects/shared/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all users sharing EP objects to the current user context.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting UserObject JSON data
	 * blocks in a single page.
	 *
	 * @param [D2LID] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-users-sharing-
	 * @return /PSR7 (Request)
	 */
	public function getUsersSharing($version, $q = null)
	{
		$queryParrams = [
		                    "q" => $q

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/users/sharing/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Unshare a particular EP object from a sharing profile.
	 *
	 * Input. Provide a simple POST form data set with profileTargetId and
	 * profileType values.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#post--d2l-api-eP-(version)-object-(objectId)-share-delete
	 * @return /PSR7 (Request)
	 */
	public function postObjectShareDelete($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/object/$objectId/share/delete", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Share a particular EP object to a sharing profile.
	 *
	 * Input. Provide a simple POST form data set with profileTargetId,
	 * profileType, and permissions values. You can grant more than one
	 * permission with a single action by providing the permissions query parameter
	 * more than once: &permissions=2&permissions=3&permissions=4, and so
	 * forth. Note that the service sets the view permission (1) on all share
	 * targets by default, so you do not need to explicitly set it with this action.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $objectId EP object ID.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#post--d2l-api-eP-(version)-object-(objectId)-share-new
	 * @return /PSR7 (Request)
	 */
	public function postObjectShareNew($version, $objectId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/object/$objectId/share/new", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the users on the calling user’s ignored-users list.
	 *
	 * Return. This action retrieves a list of user IDs currently on the calling
	 * user’s ignored-users list.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#get--d2l-api-eP-(version)-ignoredusers-
	 * @return /PSR7 (Request)
	 */
	public function getIgnoredusers($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/ignoredusers/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Add a user to the calling user’s ignored-user list.
	 *
	 * Input. Note that you must pass a single JSON number in the body of this
	 * request; for example, if you want to add user with ID 1234 to the calling
	 * user’s ignored list, your POST body would be:
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#post--d2l-api-eP-(version)-ignoredusers-add
	 * @return /PSR7 (Request)
	 */
	public function postIgnoredusersAdd($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/ignoredusers/add", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Remove a user from the calling user’s ignored-user list.
	 *
	 * Input. Note that you must pass a single JSON number in the body of this
	 * request; for example, if you want to remove user with ID 1234 from the
	 * calling user’s ignored list, your POST body would be:
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/epobject.html#post--d2l-api-eP-(version)-ignoredusers-remove
	 * @return /PSR7 (Request)
	 */
	public function postIgnoredusersRemove($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/ignoredusers/remove", 'POST');
		return new Request('GET', $uri);
	}
}
