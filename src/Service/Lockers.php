<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Lockers — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/locker.html
 */
class Lockers
{
	/**
	 * Delete a file or folder from the current user’s locker.
	 *
	 * Input. Provide a locker path at the end of your action’s route. If the
	 * path ends in a trailing slash (/), this action seeks to delete the folder named
	 * before the slash. If the path ends in a name, this action seeks to delete the
	 * named file.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [string] $path Locker path below the root folder.
	 * @see https://docs.valence.desire2learn.com/res/locker.html#delete--d2l-api-le-(version)-locker-myLocker-(path)
	 * @return /PSR7 (Request)
	 */
	public function deleteLockerMylocker($version, $path)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/locker/myLocker/$path", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Delete a file or folder from the provided user’s locker.
	 *
	 * Input. Provide a locker path at the end of your action’s route. If the
	 * path ends in a trailing slash (/), this action seeks to delete the folder named
	 * before the slash. If the path ends in a name, this action seeks to delete the
	 * named file.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @param [string] $path Locker path below the root folder.
	 * @see https://docs.valence.desire2learn.com/res/locker.html#delete--d2l-api-le-(version)-locker-user-(userId)-(path)
	 * @return /PSR7 (Request)
	 */
	public function deleteLockerUser($version, $userId, $path)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/locker/user/$userId/$path", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a specific object from the current user’s locker.
	 *
	 * Input. Provide a locker path at the end of your action’s route. If your
	 * locker path ends in a trailing slash character (/), the service assumes you
	 * want to retrieve a locker folder; otherwise, it
	 * assumes you want to retrieve a file stored in a locker folder.
	 *
	 * Return. If the action retrieves a folder, it returns a
	 * Folder JSON block. If the action retrieves a file,
	 * it returns a file stream.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [string] $path Locker path below the root folder.
	 * @see https://docs.valence.desire2learn.com/res/locker.html#get--d2l-api-le-(version)-locker-myLocker-(path)
	 * @return /PSR7 (Request)
	 */
	public function getLockerMylocker($version, $path)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/locker/myLocker/$path", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a specific object from a provided user’s locker.
	 *
	 * Input. Provide a locker path at the end of your action’s route. If your
	 * locker path ends in a trailing slash character (/), the service assumes you
	 * want to retrieve a locker folder; otherwise, it
	 * assumes you want to retrieve a file stored in a locker folder.
	 *
	 * Return. If the action retrieves a folder, it returns a
	 * Folder JSON block. If the action retrieves a file,
	 * it returns a file stream.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID for the owner of the locker.
	 * @param [string] $path Locker path below the root folder.
	 * @see https://docs.valence.desire2learn.com/res/locker.html#get--d2l-api-le-(version)-locker-user-(userId)-(path)
	 * @return /PSR7 (Request)
	 */
	public function getLockerUser($version, $userId, $path)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/locker/user/$userId/$path", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Add a new file or folder to the current user’s locker.
	 *
	 * Input. You can use this action to add a new file or folder to the current
	 * user’s locker. The locker path you provide must be the name of a folder
	 * inside the current user’s locker, and thus your path parameter must end in a
	 * trailing slash (/).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [string] $path Path below the root folder to a locker folder.
	 * @param [string] $folderName Optional. Name of folder to create (see input description).
	 * @see https://docs.valence.desire2learn.com/res/locker.html#post--d2l-api-le-(version)-locker-myLocker-(path)
	 * @return /PSR7 (Request)
	 */
	public function postLockerMylocker($version, $path, $folderName)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/locker/myLocker/$path", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Add a new file or folder to the provided user’s locker.
	 *
	 * Input. You can use this action to add a new file or folder to the
	 * identified user’s locker. The locker path you provide must be the name of a
	 * folder inside the user’s locker, and thus your path parameter must end in a
	 * trailing slash (/).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID for owner of locker.
	 * @param [string] $path Path below the root folder to a locker folder.
	 * @param [string] $folderName Optional. Name of folder to create (see input description).
	 * @see https://docs.valence.desire2learn.com/res/locker.html#post--d2l-api-le-(version)-locker-user-(userId)-(path)
	 * @return /PSR7 (Request)
	 */
	public function postLockerUser($version, $userId, $path, $folderName)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/locker/user/$userId/$path", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Rename a folder in the current user’s locker.
	 *
	 * Input. This action’s route must contain a path to a folder–the path must
	 * have a trailing slash (/).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [string] $path Path below the root folder to the locker folder to rename.
	 * @param [string] $folderName New name for the folder.
	 * @see https://docs.valence.desire2learn.com/res/locker.html#put--d2l-api-le-(version)-locker-myLocker-(path)
	 * @return /PSR7 (Request)
	 */
	public function putLockerMylocker($version, $path, $folderName)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/locker/myLocker/$path", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Rename a folder in the provided user’s locker.
	 *
	 * Input. This action’s route must contain a path to a folder–the path must
	 * have a trailing slash (/).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID for owner of locker.
	 * @param [string] $path Path below the root folder to the locker folder to rename.
	 * @param [string] $folderName New name for the folder.
	 * @see https://docs.valence.desire2learn.com/res/locker.html#put--d2l-api-le-(version)-locker-user-(userId)-(path)
	 * @return /PSR7 (Request)
	 */
	public function putLockerUser($version, $userId, $path, $folderName)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/locker/user/$userId/$path", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Delete a file or folder from the locker of a group in the provided org unit.
	 *
	 * Input. Provide a locker path at the end of your action’s route. If the
	 * path ends in a trailing slash (/), this action seeks to delete the folder named
	 * before the slash. If the path ends in a name, this action seeks to delete the
	 * named file.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $groupId Group IT.
	 * @param [string] $path Locker path below the root folder.
	 * @see https://docs.valence.desire2learn.com/res/locker.html#delete--d2l-api-le-(version)-(orgUnitId)-locker-group-(groupId)-(path)
	 * @return /PSR7 (Request)
	 */
	public function deleteLockerGroup($version, $orgUnitId, $groupId, $path)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/locker/group/$groupId/$path", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Determine if a locker has been set up for a group category within an org unit.
	 *
	 * Return. This action returns a GroupLocker
	 * JSON block to indicate whether the group category has a locker set up.
	 *
	 * @param [D2LVERSION] $version API version
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $groupCategoryId Group category ID.
	 * @see https://docs.valence.desire2learn.com/res/locker.html#get--d2l-api-lp-(version)-(orgUnitId)-groupcategories-(groupCategoryId)-locker
	 * @return /PSR7 (Request)
	 */
	public function getGroupcategoriesLocker($version, $orgUnitId, $groupCategoryId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/locker", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a specific object from a provided group’s locker.
	 *
	 * Input. Provide a locker path at the end of your action’s route. If your
	 * locker path ends in a trailing slash character (/), the service assumes you
	 * want to retrieve a locker folder; otherwise, it
	 * assumes you want to retrieve a file stored in a locker folder.
	 *
	 * Return. If the action retrieves a folder, it returns a
	 * Folder JSON block. If the action retrieves a file,
	 * it returns a file stream.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $groupId Group ID for a group entity within an org unit.
	 * @param [string] $path Locker path below the root folder.
	 * @see https://docs.valence.desire2learn.com/res/locker.html#get--d2l-api-le-(version)-(orgUnitId)-locker-group-(groupId)-(path)
	 * @return /PSR7 (Request)
	 */
	public function getLockerGroup($version, $orgUnitId, $groupId, $path)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/locker/group/$groupId/$path", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Set up the locker for a group category within an org unit.
	 *
	 * Return. This action returns a GroupLocker
	 * JSON block to indicate the success or failure of this action.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $groupCategoryId Group category ID.
	 * @see https://docs.valence.desire2learn.com/res/locker.html#post--d2l-api-lp-(version)-(orgUnitId)-groupcategories-(groupCategoryId)-locker
	 * @return /PSR7 (Request)
	 */
	public function postGroupcategoriesLocker($version, $orgUnitId, $groupCategoryId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/locker", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Add a new file or folder to the locker for a group in the provided org unit.
	 *
	 * Input. You can use this action to add a new file or folder to the
	 * identified group’s locker. The locker path you provide must be the name of a
	 * folder inside the user’s locker, and thus your path parameter must end in a
	 * trailing slash (/).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $groupId Group ID.
	 * @param [string] $path Path below the root folder to a locker folder.
	 * @param [string] $folderName Optional. Name of folder to create (see input description).
	 * @see https://docs.valence.desire2learn.com/res/locker.html#post--d2l-api-le-(version)-(orgUnitId)-locker-group-(groupId)-(path)
	 * @return /PSR7 (Request)
	 */
	public function postLockerGroup($version, $orgUnitId, $groupId, $path, $folderName)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/locker/group/$groupId/$path", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Rename a folder in the locker for a group in the provided org unit.
	 *
	 * Input. This action’s route must contain a path to a folder–the path must
	 * have a trailing slash (/).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $groupId Group ID.
	 * @param [string] $path Path below the root folder to the locker folder to rename.
	 * @param [string] $folderName New name for the folder.
	 * @see https://docs.valence.desire2learn.com/res/locker.html#put--d2l-api-le-(version)-(orgUnitId)-locker-group-(groupId)-(path)
	 * @return /PSR7 (Request)
	 */
	public function putLockerGroup($version, $orgUnitId, $groupId, $path, $folderName)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/locker/group/$groupId/$path", 'PUT');
		return new Request('GET', $uri);
	}
}
