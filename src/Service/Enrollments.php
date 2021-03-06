<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Enrollments (groups, sections, auditors) — Developer Platform (September 2020)
 * @see https://docs.valence.desire2learn.com/res/enroll.html
 */
class Enrollments
{
    /**
     * Delete a user’s enrollment in a provided org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#delete--d2l-api-lp-(version)-enrollments-orgUnits-(orgUnitId)-users-(userId)
     * @return /PSR7 (Request)
     * Return. Unlike most delete actions, this action returns an
     * EnrollmentData JSON block showing the
     * enrollment status just before this action deleted the user’s enrollment.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $userId User ID.
     */
    public function deleteEnrollmentsOrgunitsUsersOrgUnitIdUserId($version, $orgUnitId, $userId)
    {
        $uri = "/d2l/api/lp/$version/enrollments/orgUnits/$orgUnitId/users/$userId";
        return new Request('DELETE', $uri);
    }


    /**
     * Delete a user’s enrollment in a provided org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#delete--d2l-api-lp-(version)-enrollments-users-(userId)-orgUnits-(orgUnitId)
     * @return /PSR7 (Request)
     * Return. Unlike most delete actions, this action returns an
     * EnrollmentData JSON block showing the
     * enrollment status just before this action deleted the user’s enrollment
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function deleteEnrollmentsUsersOrgunitsUserIdOrgUnitId($version, $userId, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/enrollments/users/$userId/orgUnits/$orgUnitId";
        return new Request('DELETE', $uri);
    }


    /**
     * Retrieve the enrolled users in the classlist for an org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-le-(version)-(orgUnitId)-classlist-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of ClasslistUser
     * data blocks. Note that the data blocks returned here respect the org unit’s
     * privacy settings with respect to the UserName, OrgDefinedId, Email, FirstName, LastName and
     * the contents of the DisplayName properties (typically, the display-name
     * gets formed from the user’s first and last names, and privacy settings govern
     * the visibility of those items).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getClasslistOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/classlist/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the enrolled users in the classlist for an org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-le-(version)-(orgUnitId)-classlist-paged-
     * @return /PSR7 (Request)
     * Input. You can provide a searchTerm query parameter string to filter
     * results returned; the back-end service looks for fields that contain your
     * search term in these ClasslistUser
     * fields: UserName, OrgDefinedId, FirstName, LastName.
     *
     * Return. This action returns an object list page
     * JSON block containing a list of ClasslistUser
     * blocks, sorted first (ascending) by the users’ DisplayName values, and then by the
     * users’ Identifier values.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getClasslistPagedOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/classlist/paged/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the list of all enrollments for the current user.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-lp-(version)-enrollments-myenrollments-
     * @return /PSR7 (Request)
     * Input. You can use a bookmark query parameter as a paging offset, to
     * indicate that the service should return the segment of results immediately
     * following your bookmark.
     *
     * Return. This action returns a paged result set
     * containing the resulting MyOrgUnitInfo
     * data blocks for the segment following your bookmark parameter (or the first
     * segment if the parameter is empty or missing). If the request included sortBy,
     * the same sortBy parameters must be specified with the bookmark parameter when
     * fetching the next page.
     *
     * @param [D2LVERSION] $version API version.
     * @param [CSV of D2LIDs] $orgUnitTypeId Optional. Filter list to specific org unit types.
     * orgUnitTypeId
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     * @param [string] $sortBy Optional. Sort by key-expression (see description).
     * sortBy
     * @param [bool] $isActive Optional. Filter on the org unit’s isActive property and select only records that match your provided parameter value.
     * isActive
     * @param [UTCDateTime] $startDateTime Optional. Start of time window to examine.
     * startDateTime
     * @param [UTCDateTime] $endDateTime Optional. End of time window to examine.
     * endDateTime
     * @param [bool] $canAccess Optional. Filter on the org unit’s Access.CanAccess property and select only records that match your provided parameter value.
     * canAccess
     */
    public function getEnrollmentsMyenrollments(
        $version,
        $orgUnitTypeId = null,
        $bookmark = null,
        $sortBy = null,
        $isActive = null,
        $startDateTime = null,
        $endDateTime = null,
        $canAccess = null
    ) {
        $queryParrams = [
                            "orgUnitTypeId" => $orgUnitTypeId,                    "bookmark" => $bookmark,                    "sortBy" => $sortBy,                    "isActive" => $isActive,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime,                    "canAccess" => $canAccess

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/enrollments/myenrollments/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the enrollment details for the current user in the provided org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-lp-(version)-enrollments-myenrollments-(orgUnitId)
     * @return /PSR7 (Request)
     * Return. This action returns a MyOrgUnitInfo JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getEnrollmentsMyenrollmentsOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/enrollments/myenrollments/$orgUnitId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve abbreviated enrollment details for the current user in the provided org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-lp-(version)-enrollments-myenrollments-(orgUnitId)-access
     * @return /PSR7 (Request)
     * Return. This action returns a
     * MyOrgUnitAcessInfo JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getEnrollmentsMyenrollmentsAccessOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/enrollments/myenrollments/$orgUnitId/access";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the collection of users enrolled in the identified org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-lp-(version)-enrollments-orgUnits-(orgUnitId)-users-
     * @return /PSR7 (Request)
     * Input. You can use a bookmark query parameter as a paging offset, to
     * indicate that the service should return the segment of results immediately
     * following your bookmark.
     *
     * Return. This action returns a paged result set
     * containing the resulting OrgUnitUser
     * data blocks for the segment following your bookmark parameter (or the first
     * segment if the parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $roleId Optional. Filter list to a specific user role.
     * roleId
     * @param [bool] $isActive Optional. Filter list to only active or inactive users.
     * isActive
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getEnrollmentsOrgunitsUsersOrgUnitId($version, $orgUnitId, $roleId = null, $isActive = null, $bookmark = null)
    {
        $queryParrams = [
                            "roleId" => $roleId,                    "isActive" => $isActive,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/enrollments/orgUnits/$orgUnitId/users/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve enrollment details for a user in the provided org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-lp-(version)-enrollments-orgUnits-(orgUnitId)-users-(userId)
     * @return /PSR7 (Request)
     * Return. This action returns an EnrollmentData JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $userId User ID.
     */
    public function getEnrollmentsOrgunitsUsersOrgUnitIdUserId($version, $orgUnitId, $userId)
    {
        $uri = "/d2l/api/lp/$version/enrollments/orgUnits/$orgUnitId/users/$userId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of all enrollments for the provided user.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-lp-(version)-enrollments-users-(userId)-orgUnits-
     * @return /PSR7 (Request)
     * Input. You can use a bookmark query parameter as a paging offset, to
     * indicate that the service should return the segment of results immediately
     * following your bookmark.
     *
     * Return. This action returns a paged result set
     * containing the resulting UserOrgUnit data
     * blocks for the segment following your bookmark parameter (or the first
     * segment if the parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LVERSION] $userId User ID.
     * @param [CSV of D2LIDs] $orgUnitTypeId Optional. Filter list to specific org unit types.
     * orgUnitTypeId
     * @param [D2LID] $roleId Optional. Filter list to a specific user role.
     * roleId
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getEnrollmentsUsersOrgunitsUserId($version, $userId, $orgUnitTypeId = null, $roleId = null, $bookmark = null)
    {
        $queryParrams = [
                            "orgUnitTypeId" => $orgUnitTypeId,                    "roleId" => $roleId,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/enrollments/users/$userId/orgUnits/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve enrollment details in an org unit for the provided user.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-lp-(version)-enrollments-users-(userId)-orgUnits-(orgUnitId)
     * @return /PSR7 (Request)
     * Return. This action returns an
     * EnrollmentData JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getEnrollmentsUsersOrgunitsUserIdOrgUnitId($version, $userId, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/enrollments/users/$userId/orgUnits/$orgUnitId";
        return new Request('GET', $uri);
    }


    /**
     * Create a new enrollment for a user.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#post--d2l-api-lp-(version)-enrollments-
     * @return /PSR7 (Request)
     * Return. This action returns an EnrollmentData
     * JSON block for the newly enrolled user.
     *
     * @param [D2LVERSION] $version API version.
     * @param [Enrollment.CreateEnrollmentData] $createEnrollmentData New enrollment record.
     */
    public function postEnrollments($version, $createEnrollmentData)
    {
        $uri = "/d2l/api/lp/$version/enrollments/";
        $body = $createEnrollmentData;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * Remove the pin from the provided org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#delete--d2l-api-lp-(version)-enrollments-myenrollments-(orgUnitId)-pin
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function deleteEnrollmentsMyenrollmentsPinOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/enrollments/myenrollments/$orgUnitId/pin";
        return new Request('DELETE', $uri);
    }


    /**
     * Remove the pin from the provided org unit for specific user.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#delete--d2l-api-lp-(version)-enrollments-orgUnits-(orgUnitId)-users-(userId)-pin
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $userId User ID.
     */
    public function deleteEnrollmentsOrgunitsUsersPinOrgUnitIdUserId($version, $orgUnitId, $userId)
    {
        $uri = "/d2l/api/lp/$version/enrollments/orgUnits/$orgUnitId/users/$userId/pin";
        return new Request('DELETE', $uri);
    }


    /**
     * Pin an org unit to the top of the list of a user’s enrollments.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#post--d2l-api-lp-(version)-enrollments-myenrollments-(orgUnitId)-pin
     * @return /PSR7 (Request)
     * Return. This action returns a MyOrgUnitInfo JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function postEnrollmentsMyenrollmentsPinOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/enrollments/myenrollments/$orgUnitId/pin";
        return new Request('POST', $uri);
    }


    /**
     * Pin an org unit to the top of the list for a user’s enrollments.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#post--d2l-api-lp-(version)-enrollments-orgUnits-(orgUnitId)-users-(userId)-pin
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $userId User ID.
     */
    public function postEnrollmentsOrgunitsUsersPinOrgUnitIdUserId($version, $orgUnitId, $userId)
    {
        $uri = "/d2l/api/lp/$version/enrollments/orgUnits/$orgUnitId/users/$userId/pin";
        return new Request('POST', $uri);
    }


    /**
     * Delete a particular group category from an org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#delete--d2l-api-lp-(version)-(orgUnitId)-groupcategories-(groupCategoryId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $groupCategoryId Group category ID.
     */
    public function deleteGroupcategoriesOrgUnitIdGroupCategoryId($version, $orgUnitId, $groupCategoryId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId";
        return new Request('DELETE', $uri);
    }


    /**
     * Delete a particular group from an org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#delete--d2l-api-lp-(version)-(orgUnitId)-groupcategories-(groupCategoryId)-groups-(groupId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $groupCategoryId Group category ID.
     * @param [D2LID] $groupId Group ID.
     */
    public function deleteGroupcategoriesGroupsOrgUnitIdGroupCategoryIdGroupId($version, $orgUnitId, $groupCategoryId, $groupId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/groups/$groupId";
        return new Request('DELETE', $uri);
    }


    /**
     * Remove a particular user from a group.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#delete--d2l-api-lp-(version)-(orgUnitId)-groupcategories-(groupCategoryId)-groups-(groupId)-enrollments-(userId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $groupCategoryId Group category ID.
     * @param [D2LID] $groupId Group ID.
     * @param [D2LID] $userId User ID.
     */
    public function deleteGroupcategoriesGroupsEnrollmentsOrgUnitIdGroupCategoryIdGroupIdUserId($version, $orgUnitId, $groupCategoryId, $groupId, $userId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/groups/$groupId/enrollments/$userId";
        return new Request('DELETE', $uri);
    }


    /**
     * Retrieve a list of all the group categories for the provided org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-lp-(version)-(orgUnitId)-groupcategories-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of GroupCategoryData
     * blocks, in the Fetch form.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getGroupcategoriesOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/groupcategories/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular group category for an org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-lp-(version)-(orgUnitId)-groupcategories-(groupCategoryId)
     * @return /PSR7 (Request)
     * Return. This action returns a GroupCategoryData
     * JSON block, in the Fetch form.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $groupCategoryId Group category ID.
     */
    public function getGroupcategoriesOrgUnitIdGroupCategoryId($version, $orgUnitId, $groupCategoryId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of all the groups in a particular group category for an org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-lp-(version)-(orgUnitId)-groupcategories-(groupCategoryId)-groups-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of GroupData
     * data blocks, in the Fetch form.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $groupCategoryId Group category ID.
     */
    public function getGroupcategoriesGroupsOrgUnitIdGroupCategoryId($version, $orgUnitId, $groupCategoryId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/groups/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular group in an org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-lp-(version)-(orgUnitId)-groupcategories-(groupCategoryId)-groups-(groupId)
     * @return /PSR7 (Request)
     * Return. This action returns a GroupData JSON
     * data block, in the Fetch form.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $groupCategoryId Group category ID.
     * @param [D2LID] $groupId Group ID.
     */
    public function getGroupcategoriesGroupsOrgUnitIdGroupCategoryIdGroupId($version, $orgUnitId, $groupCategoryId, $groupId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/groups/$groupId";
        return new Request('GET', $uri);
    }


    /**
     * Create a new group category for an org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#post--d2l-api-lp-(version)-(orgUnitId)-groupcategories-
     * @return /PSR7 (Request)
     * Return. This action returns a GroupCategoryData
     * JSON block, in the Fetch form, for the newly created group category.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [Group.GroupCategoryData in Create form] $groupCategoryData New group category properties.
     */
    public function postGroupcategoriesOrgUnitId($version, $orgUnitId, $groupCategoryData)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/groupcategories/";
        $body = $groupCategoryData;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * Create a new group for an org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#post--d2l-api-lp-(version)-(orgUnitId)-groupcategories-(groupCategoryId)-groups-
     * @return /PSR7 (Request)
     * Return. This action returns a GroupData JSON block, in
     * the Fetch form, for the newly created group.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $groupCategoryId Group category ID.
     * @param [Group.GroupData in Create form] $groupData New group properties.
     */
    public function postGroupcategoriesGroupsOrgUnitIdGroupCategoryId($version, $orgUnitId, $groupCategoryId, $groupData)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/groups/";
        $body = $groupData;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * Enroll a user in a group.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#post--d2l-api-lp-(version)-(orgUnitId)-groupcategories-(groupCategoryId)-groups-(groupId)-enrollments-
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $groupCategoryId Group category ID.
     * @param [D2LID] $groupId Group ID.
     * @param [Group.GroupEnrollment] $groupEnrollment Enrollment block for enrollment in the group.
     */
    public function postGroupcategoriesGroupsEnrollmentsOrgUnitIdGroupCategoryIdGroupId($version, $orgUnitId, $groupCategoryId, $groupId, $groupEnrollment)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/groups/$groupId/enrollments/";
        $body = $groupEnrollment;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * Update a particular group category for an org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#put--d2l-api-lp-(version)-(orgUnitId)-groupcategories-(groupCategoryId)
     * @return /PSR7 (Request)
     * Return. This action returns a GroupCategoryData
     * JSON block, in the Fetch form, for the newly updated group category.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $groupCategoryId Group category ID.
     * @param [Group.GroupCategoryData in Update form] $groupCategoryData Updated group category properties.
     */
    public function putGroupcategoriesOrgUnitIdGroupCategoryId($version, $orgUnitId, $groupCategoryId, $groupCategoryData)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId";
        $body = $groupCategoryData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update a particular group for an org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#put--d2l-api-lp-(version)-(orgUnitId)-groupcategories-(groupCategoryId)-groups-(groupId)
     * @return /PSR7 (Request)
     * Return. This action returns a GroupData JSON
     * block, in the Fetch form, for the newly updated group.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $groupCategoryId Group category ID.
     * @param [D2LID] $groupId Group ID.
     * @param [Group.GroupData in Update form] $groupData Updated group properties.
     */
    public function putGroupcategoriesGroupsOrgUnitIdGroupCategoryIdGroupId($version, $orgUnitId, $groupCategoryId, $groupId, $groupData)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/groups/$groupId";
        $body = $groupData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Delete a section from a provided org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#delete--d2l-api-lp-(version)-(orgUnitId)-sections-(sectionId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $sectionId Section ID.
     */
    public function deleteSectionsOrgUnitIdSectionId($version, $orgUnitId, $sectionId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/sections/$sectionId";
        return new Request('DELETE', $uri);
    }


    /**
     * Retrieve all the sections for a provided org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-lp-(version)-(orgUnitId)-sections-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of SectionData
     * blocks in the Fetch form.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getSectionsOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/sections/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the section property data for an org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-lp-(version)-(orgUnitId)-sections-settings
     * @return /PSR7 (Request)
     * Return. This action returns a SectionPropertyData
     * JSON block in the Fetch form.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getSectionsSettingsOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/sections/settings";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a section from a particular org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-lp-(version)-(orgUnitId)-sections-(sectionId)
     * @return /PSR7 (Request)
     * Return. This action returns a SectionData
     * JSON block in the Fetch form.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $sectionId Section ID.
     */
    public function getSectionsOrgUnitIdSectionId($version, $orgUnitId, $sectionId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/sections/$sectionId";
        return new Request('GET', $uri);
    }


    /**
     * Create a new section in a particular org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#post--d2l-api-lp-(version)-(orgUnitId)-sections-
     * @return /PSR7 (Request)
     * Return. This action returns the SectionData
     * JSON block, in its Fetch form, for the org unit’s new section.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [Section.SectionData in Create form] $sectionData New section data.
     */
    public function postSectionsOrgUnitId($version, $orgUnitId, $sectionData)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/sections/";
        $body = $sectionData;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * Enroll a user in a section for a particular org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#post--d2l-api-lp-(version)-(orgUnitId)-sections-(sectionId)-enrollments-
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $sectionId Section ID.
     * @param [Section.SectionEnrollment] $sectionEnrollment Enrollment block for enrollment in the section.
     */
    public function postSectionsEnrollmentsOrgUnitIdSectionId($version, $orgUnitId, $sectionId, $sectionEnrollment)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/sections/$sectionId/enrollments/";
        $body = $sectionEnrollment;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * Initialize one or more sections for a particular org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#put--d2l-api-lp-(version)-(orgUnitId)-sections-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of SectionData
     * data blocks, in the Fetch form, for the org unit’s initial section(s).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [Section.SectionPropertyData in Create form] $sectionPropertyData New properties for org unit sections.
     */
    public function putSectionsOrgUnitId($version, $orgUnitId, $sectionPropertyData)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/sections/";
        $body = $sectionPropertyData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update the section properties for an org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#put--d2l-api-lp-(version)-(orgUnitId)-sections-settings
     * @return /PSR7 (Request)
     * Return. This action returns the SectionPropertyData
     * JSON block, in its Fetch form, for the org unit’s updated section properties.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [Section.SectionPropertyData in Update form] $sectionPropertyData Updated properties for org unit sections.
     */
    public function putSectionsSettingsOrgUnitId($version, $orgUnitId, $sectionPropertyData)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/sections/settings";
        $body = $sectionPropertyData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update information for a section in a particular org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#put--d2l-api-lp-(version)-(orgUnitId)-sections-(sectionId)
     * @return /PSR7 (Request)
     * Return. This action returns the updated SectionData
     * JSON block, in its Fetch form.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $sectionId Section ID.
     * @param [Section.SectionData in Update form] $sectionData Updated section data.
     */
    public function putSectionsOrgUnitIdSectionId($version, $orgUnitId, $sectionId, $sectionData)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/sections/$sectionId";
        $body = $sectionData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Remove an auditee from the list of users that an auditor is auditing.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#delete--d2l-api-le-(version)-auditing-auditors-(auditorId)-auditees-
     * @return /PSR7 (Request)
     * Input. Note that you must pass a single JSON number in the body of this
     * request; for example, if you want to remove user with ID 1234 from the
     * an auditor’s list of auditees, your POST body would be:
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $auditorId Auditor ID.
     * @param [D2LID as single JSON number] $auditeeId Auditee to remove.
     */
    public function deleteAuditingAuditorsAuditeesAuditorId($version, $auditorId, $auditeeId)
    {
        $uri = "/d2l/api/le/$version/auditing/auditors/$auditorId/auditees/";
        $body = $auditeeId;
        $headers = ["content-type" => 'application/json'];
        return new Request("DELETE", $uri, $headers, $body);
    }


    /**
     * Retrieve information for an auditee.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-le-(version)-auditing-auditees-(auditeeId)
     * @return /PSR7 (Request)
     * Return. This action returns a AuditedUser
     * JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $auditeeId Auditee ID.
     */
    public function getAuditingAuditeesAuditeeId($version, $auditeeId)
    {
        $uri = "/d2l/api/le/$version/auditing/auditees/$auditeeId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve information for an auditor.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-le-(version)-auditing-auditors-(auditorId)
     * @return /PSR7 (Request)
     * Return. This action returns a Auditor JSON block.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getAuditingAuditors($version)
    {
        $uri = "/d2l/api/le/$version/auditing/auditors/$auditorId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the list of users an auditor is auditing.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-le-(version)-auditing-auditors-(auditorId)-auditees-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of Auditee blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $auditorId Auditor ID.
     */
    public function getAuditingAuditorsAuditeesAuditorId($version, $auditorId)
    {
        $uri = "/d2l/api/le/$version/auditing/auditors/$auditorId/auditees/";
        return new Request('GET', $uri);
    }


    /**
     * Add a user to the list of those an auditor is auditing.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#post--d2l-api-le-(version)-auditing-auditors-(auditorId)-auditees-
     * @return /PSR7 (Request)
     * Input. Note that you must pass a single JSON number in the body of this
     * request; for example, if you want to remove user with ID 1234 from the
     * an auditor’s list of auditees, your POST body would be:
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $auditorId Auditor ID.
     * @param [D2LID as single JSON number] $auditeeId Auditee to add.
     */
    public function postAuditingAuditorsAuditeesAuditorId($version, $auditorId, $auditeeId)
    {
        $uri = "/d2l/api/le/$version/auditing/auditors/$auditorId/auditees/";
        $body = $auditeeId;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }
}
