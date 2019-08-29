<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Lockers — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/locker.html
 */
class Lockers
{
    /**
     * Delete a file or folder from the current user’s locker.
     * @see https://docs.valence.desire2learn.com/res/locker.html#delete--d2l-api-le-(version)-locker-myLocker-(path)
     * @return /PSR7 (Request)
     * Input. Provide a locker path at the end of your action’s route. If the
     * path ends in a trailing slash (/), this action seeks to delete the folder named
     * before the slash. If the path ends in a name, this action seeks to delete the
     * named file.
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $path Locker path below the root folder.
     */
    public function deleteLockerMylockerPath($version, $path)
    {
        $uri = "/d2l/api/le/$version/locker/myLocker/$path";
        return new Request('GET', $uri);
    }


    /**
     * Delete a file or folder from the provided user’s locker.
     * @see https://docs.valence.desire2learn.com/res/locker.html#delete--d2l-api-le-(version)-locker-user-(userId)-(path)
     * @return /PSR7 (Request)
     * Input. Provide a locker path at the end of your action’s route. If the
     * path ends in a trailing slash (/), this action seeks to delete the folder named
     * before the slash. If the path ends in a name, this action seeks to delete the
     * named file.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [string] $path Locker path below the root folder.
     */
    public function deleteLockerUserUserIdPath($version, $userId, $path)
    {
        $uri = "/d2l/api/le/$version/locker/user/$userId/$path";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a specific object from the current user’s locker.
     * @see https://docs.valence.desire2learn.com/res/locker.html#get--d2l-api-le-(version)-locker-myLocker-(path)
     * @return /PSR7 (Request)
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
     */
    public function getLockerMylockerPath($version, $path)
    {
        $uri = "/d2l/api/le/$version/locker/myLocker/$path";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a specific object from a provided user’s locker.
     * @see https://docs.valence.desire2learn.com/res/locker.html#get--d2l-api-le-(version)-locker-user-(userId)-(path)
     * @return /PSR7 (Request)
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
     */
    public function getLockerUserUserIdPath($version, $userId, $path)
    {
        $uri = "/d2l/api/le/$version/locker/user/$userId/$path";
        return new Request('GET', $uri);
    }


    /**
     * Add a new file or folder to the current user’s locker.
     * @see https://docs.valence.desire2learn.com/res/locker.html#post--d2l-api-le-(version)-locker-myLocker-(path)
     * @return /PSR7 (Request)
     * Input. You can use this action to add a new file or folder to the current
     * user’s locker. The locker path you provide must be the name of a folder
     * inside the current user’s locker, and thus your path parameter must end in a
     * trailing slash (/).
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $path Path below the root folder to a locker folder.
     * @param [string] $folderName Optional. Name of folder to create (see input description).
     * @param [JSON composite] $fileDescription Optional. File description block for new file (see input description).
     */
    public function postLockerMylockerPath($version, $path, $folderName, $fileDescription)
    {
        $uri = "/d2l/api/le/$version/locker/myLocker/$path";
        $body = folderName;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Add a new file or folder to the provided user’s locker.
     * @see https://docs.valence.desire2learn.com/res/locker.html#post--d2l-api-le-(version)-locker-user-(userId)-(path)
     * @return /PSR7 (Request)
     * Input. You can use this action to add a new file or folder to the
     * identified user’s locker. The locker path you provide must be the name of a
     * folder inside the user’s locker, and thus your path parameter must end in a
     * trailing slash (/).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID for owner of locker.
     * @param [string] $path Path below the root folder to a locker folder.
     * @param [string] $folderName Optional. Name of folder to create (see input description).
     * @param [JSON composite] $fileDescription Optional. File description block for new file (see input description).
     */
    public function postLockerUserUserIdPath($version, $userId, $path, $folderName, $fileDescription)
    {
        $uri = "/d2l/api/le/$version/locker/user/$userId/$path";
        $body = folderName;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Rename a folder in the current user’s locker.
     * @see https://docs.valence.desire2learn.com/res/locker.html#put--d2l-api-le-(version)-locker-myLocker-(path)
     * @return /PSR7 (Request)
     * Input. This action’s route must contain a path to a folder–the path must
     * have a trailing slash (/).
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $path Path below the root folder to the locker folder to rename.
     * @param [string] $folderName New name for the folder.
     */
    public function putLockerMylockerPath($version, $path, $folderName)
    {
        $uri = "/d2l/api/le/$version/locker/myLocker/$path";
        $body = folderName;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Rename a folder in the provided user’s locker.
     * @see https://docs.valence.desire2learn.com/res/locker.html#put--d2l-api-le-(version)-locker-user-(userId)-(path)
     * @return /PSR7 (Request)
     * Input. This action’s route must contain a path to a folder–the path must
     * have a trailing slash (/).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID for owner of locker.
     * @param [string] $path Path below the root folder to the locker folder to rename.
     * @param [string] $folderName New name for the folder.
     */
    public function putLockerUserUserIdPath($version, $userId, $path, $folderName)
    {
        $uri = "/d2l/api/le/$version/locker/user/$userId/$path";
        $body = folderName;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Delete a file or folder from the locker of a group in the provided org unit.
     * @see https://docs.valence.desire2learn.com/res/locker.html#delete--d2l-api-le-(version)-(orgUnitId)-locker-group-(groupId)-(path)
     * @return /PSR7 (Request)
     * Input. Provide a locker path at the end of your action’s route. If the
     * path ends in a trailing slash (/), this action seeks to delete the folder named
     * before the slash. If the path ends in a name, this action seeks to delete the
     * named file.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $groupId Group IT.
     * @param [string] $path Locker path below the root folder.
     */
    public function deleteLockerGroupOrgUnitIdGroupIdPath($version, $orgUnitId, $groupId, $path)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/locker/group/$groupId/$path";
        return new Request('GET', $uri);
    }


    /**
     * Determine if a locker has been set up for a group category within an org unit.
     * @see https://docs.valence.desire2learn.com/res/locker.html#get--d2l-api-lp-(version)-(orgUnitId)-groupcategories-(groupCategoryId)-locker
     * @return /PSR7 (Request)
     * Return. This action returns a GroupLocker
     * JSON block to indicate whether the group category has a locker set up.
     *
     * @param [D2LVERSION] $version API version
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $groupCategoryId Group category ID.
     */
    public function getGroupcategoriesLockerOrgUnitIdGroupCategoryId($version, $orgUnitId, $groupCategoryId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/locker";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a specific object from a provided group’s locker.
     * @see https://docs.valence.desire2learn.com/res/locker.html#get--d2l-api-le-(version)-(orgUnitId)-locker-group-(groupId)-(path)
     * @return /PSR7 (Request)
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
     */
    public function getLockerGroupOrgUnitIdGroupIdPath($version, $orgUnitId, $groupId, $path)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/locker/group/$groupId/$path";
        return new Request('GET', $uri);
    }


    /**
     * Set up the locker for a group category within an org unit.
     * @see https://docs.valence.desire2learn.com/res/locker.html#post--d2l-api-lp-(version)-(orgUnitId)-groupcategories-(groupCategoryId)-locker
     * @return /PSR7 (Request)
     * Return. This action returns a GroupLocker
     * JSON block to indicate the success or failure of this action.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $groupCategoryId Group category ID.
     */
    public function postGroupcategoriesLockerOrgUnitIdGroupCategoryId($version, $orgUnitId, $groupCategoryId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/locker";
        return new Request('GET', $uri);
    }


    /**
     * Add a new file or folder to the locker for a group in the provided org unit.
     * @see https://docs.valence.desire2learn.com/res/locker.html#post--d2l-api-le-(version)-(orgUnitId)-locker-group-(groupId)-(path)
     * @return /PSR7 (Request)
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
     * @param [JSON composite] $fileDescription Optional. File description block for new file (see input description).
     */
    public function postLockerGroupOrgUnitIdGroupIdPath($version, $orgUnitId, $groupId, $path, $folderName, $fileDescription)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/locker/group/$groupId/$path";
        $body = folderName;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Rename a folder in the locker for a group in the provided org unit.
     * @see https://docs.valence.desire2learn.com/res/locker.html#put--d2l-api-le-(version)-(orgUnitId)-locker-group-(groupId)-(path)
     * @return /PSR7 (Request)
     * Input. This action’s route must contain a path to a folder–the path must
     * have a trailing slash (/).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $groupId Group ID.
     * @param [string] $path Path below the root folder to the locker folder to rename.
     * @param [string] $folderName New name for the folder.
     */
    public function putLockerGroupOrgUnitIdGroupIdPath($version, $orgUnitId, $groupId, $path, $folderName)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/locker/group/$groupId/$path";
        $body = folderName;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }
}
