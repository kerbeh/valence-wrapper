<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Enrollments (groups, sections, auditors) — Developer Platform (September 2019)
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/enrollments/orgUnits/$orgUnitId/users/$userId", 'DELETE');
        return new Request('GET', $uri);
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/enrollments/users/$userId/orgUnits/$orgUnitId", 'DELETE');
        return new Request('GET', $uri);
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/classlist/", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the enrolled users in the classlist for an org unit.
     * @see https://docs.valence.desire2learn.com/res/enroll.html#get--d2l-api-le-(version)-(orgUnitId)-classlist-paged-
     * @return /PSR7 (Request)
     * Input. You can provide a searchTerm query parameter string to filter
     * results returned; the back-end service looks for fields that contain your
     * search term in these ClasslistUser
     * fields: Identifier, UserName, OrgDefinedId, FirstName, LastName.
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/classlist/paged/", 'GET');
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
        $bookmark = null,
        $sortBy = null,
        $isActive = null,
        $startDateTime = null,
        $endDateTime = null,
        $canAccess = null
    ) {
        $queryParrams = [
                            "bookmark" => $bookmark,                    "sortBy" => $sortBy,                    "isActive" => $isActive,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime,                    "canAccess" => $canAccess

        ];
        $queryString = http_build_query($queryParrams);
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/enrollments/myenrollments/?$queryString", 'GET');
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/enrollments/myenrollments/$orgUnitId", 'GET');
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/enrollments/myenrollments/$orgUnitId/access", 'GET');
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
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getEnrollmentsOrgunitsUsersOrgUnitId($version, $orgUnitId, $roleId = null, $bookmark = null)
    {
        $queryParrams = [
                            "roleId" => $roleId,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/enrollments/orgUnits/$orgUnitId/users/?$queryString", 'GET');
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/enrollments/orgUnits/$orgUnitId/users/$userId", 'GET');
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
     * @param [D2LID] $roleId Optional. Filter list to a specific user role.
     * roleId
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getEnrollmentsUsersOrgunitsUserId($version, $userId, $roleId = null, $bookmark = null)
    {
        $queryParrams = [
                            "roleId" => $roleId,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/enrollments/users/$userId/orgUnits/?$queryString", 'GET');
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/enrollments/users/$userId/orgUnits/$orgUnitId", 'GET');
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/enrollments/", 'POST');
        return new Request('GET', $uri);
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/enrollments/myenrollments/$orgUnitId/pin", 'DELETE');
        return new Request('GET', $uri);
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/enrollments/orgUnits/$orgUnitId/users/$userId/pin", 'DELETE');
        return new Request('GET', $uri);
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/enrollments/myenrollments/$orgUnitId/pin", 'POST');
        return new Request('GET', $uri);
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/enrollments/orgUnits/$orgUnitId/users/$userId/pin", 'POST');
        return new Request('GET', $uri);
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId", 'DELETE');
        return new Request('GET', $uri);
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/groups/$groupId", 'DELETE');
        return new Request('GET', $uri);
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/groups/$groupId/enrollments/$userId", 'DELETE');
        return new Request('GET', $uri);
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/groupcategories/", 'GET');
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId", 'GET');
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/groups/", 'GET');
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/groups/$groupId", 'GET');
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
     */
    public function postGroupcategoriesOrgUnitId($version, $orgUnitId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/groupcategories/", 'POST');
        return new Request('GET', $uri);
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
     */
    public function postGroupcategoriesGroupsOrgUnitIdGroupCategoryId($version, $orgUnitId, $groupCategoryId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/groups/", 'POST');
        return new Request('GET', $uri);
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/groups/$groupId/enrollments/", 'POST');
        return new Request('GET', $uri);
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
     */
    public function putGroupcategoriesOrgUnitIdGroupCategoryId($version, $orgUnitId, $groupCategoryId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId", 'PUT');
        return new Request('GET', $uri);
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
     */
    public function putGroupcategoriesGroupsOrgUnitIdGroupCategoryIdGroupId($version, $orgUnitId, $groupCategoryId, $groupId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/groupcategories/$groupCategoryId/groups/$groupId", 'PUT');
        return new Request('GET', $uri);
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/sections/$sectionId", 'DELETE');
        return new Request('GET', $uri);
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/sections/", 'GET');
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/sections/settings", 'GET');
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/sections/$sectionId", 'GET');
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
     */
    public function postSectionsOrgUnitId($version, $orgUnitId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/sections/", 'POST');
        return new Request('GET', $uri);
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/sections/$sectionId/enrollments/", 'POST');
        return new Request('GET', $uri);
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
     */
    public function putSectionsOrgUnitId($version, $orgUnitId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/sections/", 'PUT');
        return new Request('GET', $uri);
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
     */
    public function putSectionsSettingsOrgUnitId($version, $orgUnitId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/sections/settings", 'PUT');
        return new Request('GET', $uri);
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
     */
    public function putSectionsOrgUnitIdSectionId($version, $orgUnitId, $sectionId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/sections/$sectionId", 'PUT');
        return new Request('GET', $uri);
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
     */
    public function deleteAuditingAuditorsAuditeesAuditorId($version, $auditorId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/auditing/auditors/$auditorId/auditees/", 'DELETE');
        return new Request('GET', $uri);
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/auditing/auditees/$auditeeId", 'GET');
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/auditing/auditors/$auditorId", 'GET');
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/auditing/auditors/$auditorId/auditees/", 'GET');
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
     */
    public function postAuditingAuditorsAuditeesAuditorId($version, $auditorId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/auditing/auditors/$auditorId/auditees/", 'POST');
        return new Request('GET', $uri);
    }
}
