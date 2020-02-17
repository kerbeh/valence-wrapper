<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Users (user data, whoami) — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/user.html
 */
class Users
{
    /**
     * Delete a particular user.
     * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-users-(userId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     */
    public function deleteUsersUserId($version, $userId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/users/$userId";
=======
        $uri = "/d2l/api/lp/$version/users/$userId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve data for one or more users.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-users-
     * @return /PSR7 (Request)
     * Input. You can use this action in a number of different ways, depending
     * upon the query parameters you provide. If you provide more than one of these
     * parameters, this action selects among them in this order, regardless of the
     * order you provide them in your URL:
     *
     * Return. If you use this action to find a single user’s data by userName,
     * this route action a single UserData JSON block if
     * successful, and a 404 Not Found if it cannot find a matching user.
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $orgDefinedId Optional. Org-defined identifier to look for.
     * orgDefinedId
     * @param [string] $userName Optional. User name to look for.
     * userName
     * @param [string] $externalEmail Optional. External email address to look for.
     * externalEmail
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getUsers($version, $orgDefinedId = null, $userName = null, $externalEmail = null, $bookmark = null)
    {
        $queryParrams = [
                            "orgDefinedId" => $orgDefinedId,                    "userName" => $userName,                    "externalEmail" => $externalEmail,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/users/?$queryString";
=======
        $uri = "/d2l/api/lp/$version/users/?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve legal and preferred names for a particular user.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-users-(userId)-names
     * @return /PSR7 (Request)
     * Return. This action returns a LegalPreferredNames JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     */
    public function getUsersNamesUserId($version, $userId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/users/$userId/names";
=======
        $uri = "/d2l/api/lp/$version/users/$userId/names";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve data for a particular user.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-users-(userId)
     * @return /PSR7 (Request)
     * Return. This action returns a UserData JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     */
    public function getUsersUserId($version, $userId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/users/$userId";
=======
        $uri = "/d2l/api/lp/$version/users/$userId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the current user context’s user information.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-users-whoami
     * @return /PSR7 (Request)
     * Return. This action returns a WhoAmIUser
     * JSON block for the current user context.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getUsersWhoami($version)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/users/whoami";
=======
        $uri = "/d2l/api/lp/$version/users/whoami";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Create a new user entity.
     * @see https://docs.valence.desire2learn.com/res/user.html#post--d2l-api-lp-(version)-users-
     * @return /PSR7 (Request)
     * Return. This action returns a UserData JSON
     * block for the newly created user, to give you immediate access to the user’s
     * UserId property.
     *
     * @param [D2LVERSION] $version API version.
     * @param [User.CreateUserData] $createUserData Data for new user.
     */
    public function postUsers($version, $createUserData)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/users/";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/users/";
        $body = $createUserData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Update data for a particular user.
     * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-users-(userId)
     * @return /PSR7 (Request)
     * Input. Note that your provided block’s data replaces all the associated
     * user’s data on the service.
     *
     * Return. This action returns a UserData JSON
     * block for the user’s updated data.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [User.UpdateUserData] $updateUserData Updated data for user.
     */
    public function putUsersUserId($version, $userId, $updateUserData)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/users/$userId";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/users/$userId";
        $body = $updateUserData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Update legal and preferred name data for a particular user.
     * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-users-(userId)-names
     * @return /PSR7 (Request)
     * Input. Note that your provided block’s data replaces all the associated
     * user’s name data on the service.
     *
     * Return. This action returns a LegalPreferredNames JSON block for the user’s updated name data.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [User.LegalPreferredNames] $legalPreferredNames Updated names data for user.
     */
    public function putUsersNamesUserId($version, $userId, $legalPreferredNames)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/users/$userId/names";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/users/$userId/names";
        $body = $legalPreferredNames;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Retrieve a particular user’s activation settings.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-users-(userId)-activation
     * @return /PSR7 (Request)
     * Return. This action returns a UserActivationData
     * JSON block with the user’s current activation status.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     */
    public function getUsersActivationUserId($version, $userId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/users/$userId/activation";
=======
        $uri = "/d2l/api/lp/$version/users/$userId/activation";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Update a particular user’s activation settings.
     * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-users-(userId)-activation
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [User.UserActivationData] $userActivationData Updated user activation settings for user.
     */
    public function putUsersActivationUserId($version, $userId, $userActivationData)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/users/$userId/activation";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/users/$userId/activation";
        $body = $userActivationData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Link a user to a Google Apps user account.
     * @see https://docs.valence.desire2learn.com/res/user.html#post--d2l-api-gae-(version)-linkuser
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [User.GoogleAppsLinkingItem] $googleAppsLinkingItem Linking data for user.
     */
    public function postLinkuser($version, $googleAppsLinkingItem)
    {
<<<<<<< HEAD
        $uri = "d2l/api/gae/$version/linkuser";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/gae/$version/linkuser";
        $body = $googleAppsLinkingItem;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Delete the subscription for messages of a particular type, delivered by a
     * particular carrier.
     * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-notifications-instant-carriers-(carrierId)-subscriptions-(messageTypeId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $carrierId Notification carrier ID.
     * @param [GUID] $messageTypeId Message type ID.
     */
    public function deleteNotificationsInstantCarriersSubscriptionsCarrierIdMessageTypeId($version, $carrierId, $messageTypeId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/notifications/instant/carriers/$carrierId/subscriptions/$messageTypeId";
=======
        $uri = "/d2l/api/lp/$version/notifications/instant/carriers/$carrierId/subscriptions/$messageTypeId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the carrier channels for delivering notification messages.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-notifications-instant-carriers-
     * @return /PSR7 (Request)
     * Returns. This action returns a JSON array of CarrierOutput
     * data blocks.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getNotificationsInstantCarriers($version)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/notifications/instant/carriers/";
=======
        $uri = "/d2l/api/lp/$version/notifications/instant/carriers/";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the current subscriptions for notification messages.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-notifications-instant-carriers-(carrierId)-subscriptions-
     * @return /PSR7 (Request)
     * Returns. This action returns a JSON array of SubscriptionOutput
     * data blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $carrierId Notification carrier ID.
     */
    public function getNotificationsInstantCarriersSubscriptionsCarrierId($version, $carrierId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/notifications/instant/carriers/$carrierId/subscriptions/";
=======
        $uri = "/d2l/api/lp/$version/notifications/instant/carriers/$carrierId/subscriptions/";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Subscribe to notification messages of a particular type, delivered by a
     * particular carrier.
     * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-notifications-instant-carriers-(carrierId)-subscriptions-(messageTypeId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $carrierId Notification carrier ID.
     * @param [GUID] $messageTypeId Message type ID.
     */
    public function putNotificationsInstantCarriersSubscriptionsCarrierIdMessageTypeId($version, $carrierId, $messageTypeId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/notifications/instant/carriers/$carrierId/subscriptions/$messageTypeId";
=======
        $uri = "/d2l/api/lp/$version/notifications/instant/carriers/$carrierId/subscriptions/$messageTypeId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the users’s notification number.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-notifications-instant-users-(userId)-number
     * @return /PSR7 (Request)
     * Return. This action returns a NotificationNumberOutputInfo
     * JSON block with the user’s current notification number settings.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     */
    public function getNotificationsInstantUsersNumberUserId($version, $userId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/notifications/instant/users/$userId/number";
=======
        $uri = "/d2l/api/lp/$version/notifications/instant/users/$userId/number";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Set the user’s notification number.
     * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-notifications-instant-users-(userId)-number
     * @return /PSR7 (Request)
     * Return. This action returns a NotificationNumberOutputInfo
     * JSON block with the user’s current notification number settings. This will
     * reset the user’s confirmation of the notification settings requiring the
     * targeted user to complete the confirmation steps in the Learning Environment
     * prior to receiving any SMS messages.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [Notifications.NotificationNumberUpdateInfo] $notificationNumberUpdateInfo User’s notification number settings.
     */
    public function putNotificationsInstantUsersNumberUserId($version, $userId, $notificationNumberUpdateInfo)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/notifications/instant/users/$userId/number";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/notifications/instant/users/$userId/number";
        $body = $notificationNumberUpdateInfo;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Delete the user’s notification number.
     * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-notifications-instant-users-(userId)-number
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     */
    public function deleteNotificationsInstantUsersNumberUserId($version, $userId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/notifications/instant/users/$userId/number";
=======
        $uri = "/d2l/api/lp/$version/notifications/instant/users/$userId/number";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve users with the provided notification number.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-notifications-instant-numbers-(notificationNumber)-users
     * @return /PSR7 (Request)
     * Returns. This action returns a JSON array of UserIds.
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $notificationNumber Notification Number.
     */
    public function getNotificationsInstantNumbersUsersNotificationNumber($version, $notificationNumber)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/notifications/instant/numbers/$notificationNumber/users";
=======
        $uri = "/d2l/api/lp/$version/notifications/instant/numbers/$notificationNumber/users";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Delete the notification number settings for users with the provided
     * notification number.
     * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-notifications-instant-numbers-(notificationNumber)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [string] $notificationNumber Notification Number.
     */
    public function deleteNotificationsInstantNumbersNotificationNumber($version, $notificationNumber)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/notifications/instant/numbers/$notificationNumber";
=======
        $uri = "/d2l/api/lp/$version/notifications/instant/numbers/$notificationNumber";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Delete the notification number settings for provided user with the provided
     * notification number.
     * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-notifications-instant-numbers-(notificationNumber)-users-(userId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [string] $notificationNumber Notification Number.
     * @param [D2LID] $userId User ID.
     */
    public function deleteNotificationsInstantNumbersUsersNotificationNumberUserId($version, $notificationNumber, $userId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/notifications/instant/numbers/$notificationNumber/users/$userId";
=======
        $uri = "/d2l/api/lp/$version/notifications/instant/numbers/$notificationNumber/users/$userId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Clear a particular user’s password.
     * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-users-(userId)-password
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     */
    public function deleteUsersPasswordUserId($version, $userId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/users/$userId/password";
=======
        $uri = "/d2l/api/lp/$version/users/$userId/password";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Reset a particular user’s password.
     * @see https://docs.valence.desire2learn.com/res/user.html#post--d2l-api-lp-(version)-users-(userId)-password
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     */
    public function postUsersPasswordUserId($version, $userId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/users/$userId/password";
=======
        $uri = "/d2l/api/lp/$version/users/$userId/password";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Update a particular user’s password.
     * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-users-(userId)-password
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [User.UserPasswordData] $userPasswordData Updated password for user.
     */
    public function putUsersPasswordUserId($version, $userId, $userPasswordData)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/users/$userId/password";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/users/$userId/password";
        $body = $userPasswordData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Remove the current user’s profile image.
     * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-profile-myProfile-image
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     */
    public function deleteProfileMyprofileImage($version)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/profile/myProfile/image";
=======
        $uri = "/d2l/api/lp/$version/profile/myProfile/image";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Remove the profile image from a particular personal profile, by Profile ID.
     * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-profile-(profileId)-image
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [string] $profileId Profile ID.
     */
    public function deleteProfileImageProfileId($version, $profileId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/profile/$profileId/image";
=======
        $uri = "/d2l/api/lp/$version/profile/$profileId/image";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Remove the profile image from a particular personal profile, by User ID.
     * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-profile-user-(userId)-image
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     */
    public function deleteProfileUserImageUserId($version, $userId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/profile/user/$userId/image";
=======
        $uri = "/d2l/api/lp/$version/profile/user/$userId/image";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve personal profile information for the current user context.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-profile-myProfile
     * @return /PSR7 (Request)
     * Return. This action returns a UserProfile
     * JSON data block.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getProfileMyprofile($version)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/profile/myProfile";
=======
        $uri = "/d2l/api/lp/$version/profile/myProfile";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the current user’s profile image.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-profile-myProfile-image
     * @return /PSR7 (Request)
     * Return. This action returns a file stream containing the current user’s
     * profile image. Note that the back-end service may return a profile image
     * larger than your provided size.
     *
     * @param [D2LVERSION] $version API version.
     * @param [integer] $size Optional. Desired thumbnail size (height and width in pixels) for profile image.
     * size
     */
    public function getProfileMyprofileImage($version, $size = null)
    {
        $queryParrams = [
                            "size" => $size

        ];
        $queryString = http_build_query($queryParrams);
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/profile/myProfile/image?$queryString";
=======
        $uri = "/d2l/api/lp/$version/profile/myProfile/image?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular personal profile, by Profile ID.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-profile-(profileId)
     * @return /PSR7 (Request)
     * Return. This action returns the UserProfile
     * JSON data block corresponding to your provided Profile ID.
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $profileId Profile ID.
     */
    public function getProfileProfileId($version, $profileId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/profile/$profileId";
=======
        $uri = "/d2l/api/lp/$version/profile/$profileId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular profile image, by Profile ID.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-profile-(profileId)-image
     * @return /PSR7 (Request)
     * Return. This action returns a file stream containing the profile image
     * for the identified profile. Note that the back-end service may return a
     * profile image larger than your provided size.
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $profileId Profile ID.
     * @param [integer] $size Optional. Desired thumbnail size (height and width in pixels) for profile image.
     * size
     */
    public function getProfileImageProfileId($version, $profileId, $size = null)
    {
        $queryParrams = [
                            "size" => $size

        ];
        $queryString = http_build_query($queryParrams);
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/profile/$profileId/image?$queryString";
=======
        $uri = "/d2l/api/lp/$version/profile/$profileId/image?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular personal profile, by User ID.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-profile-user-(userId)
     * @return /PSR7 (Request)
     * Return. This action returns the UserProfile
     * JSON data block containing the personal profile for your provided user.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     */
    public function getProfileUserUserId($version, $userId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/profile/user/$userId";
=======
        $uri = "/d2l/api/lp/$version/profile/user/$userId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular profile image, by User ID.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-profile-user-(userId)-image
     * @return /PSR7 (Request)
     * Return. This action returns a file stream containing the profile image
     * for the identified profile. Note that the back-end service may return a
     * profile image larger than your provided size.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [integer] $size Optional. Desired thumbnail size (height and width in pixels) for profile image.
     * size
     */
    public function getProfileUserImageUserId($version, $userId, $size = null)
    {
        $queryParrams = [
                            "size" => $size

        ];
        $queryString = http_build_query($queryParrams);
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/profile/user/$userId/image?$queryString";
=======
        $uri = "/d2l/api/lp/$version/profile/user/$userId/image?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Update the personal profile image for the current user context.
     * @see https://docs.valence.desire2learn.com/res/user.html#post--d2l-api-lp-(version)-profile-myProfile-image
     * @return /PSR7 (Request)
     * Input. Provide an uploaded image file using the
     * simple file upload process; the content-disposition
     * part header for the file part should have the name profileImage.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function postProfileMyprofileImage($version)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/profile/myProfile/image";
=======
        $uri = "/d2l/api/lp/$version/profile/myProfile/image";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Update the profile image for the identified personal profile, by Profile ID.
     * @see https://docs.valence.desire2learn.com/res/user.html#post--d2l-api-lp-(version)-profile-(profileId)-image
     * @return /PSR7 (Request)
     * Input. Provide an uploaded image file using the
     * simple file upload process; the content-disposition
     * part header for the file part should have the name profileImage.
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $profileId Profile ID.
     */
    public function postProfileImageProfileId($version, $profileId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/profile/$profileId/image";
=======
        $uri = "/d2l/api/lp/$version/profile/$profileId/image";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Update the profile image for the identified personal profile, by User ID.
     * @see https://docs.valence.desire2learn.com/res/user.html#post--d2l-api-lp-(version)-profile-user-(userId)-image
     * @return /PSR7 (Request)
     * Input. Provide an uploaded image file using the
     * simple file upload process; the content-disposition
     * part header for the file part should have the name profileImage.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     */
    public function postProfileUserImageUserId($version, $userId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/profile/user/$userId/image";
=======
        $uri = "/d2l/api/lp/$version/profile/user/$userId/image";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Update the personal profile data for the current user context.
     * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-profile-myProfile
     * @return /PSR7 (Request)
     * Input. Note that your provided block’s data replaces all the associated
     * user’s profile data on the service.
     *
     * Return. This action returns a UserProfile
     * JSON data block containing the updated personal profile data for the current user.
     *
     * @param [D2LVERSION] $version API version.
     * @param [User.UserProfileUpdateData] $userProfileUpdateData Updated profile data.
     */
    public function putProfileMyprofile($version, $userProfileUpdateData)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/profile/myProfile";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/profile/myProfile";
        $body = $userProfileUpdateData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Update a particular personal profile, by Profile ID.
     * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-profile-(profileId)
     * @return /PSR7 (Request)
     * Input. Note that your provided block’s data replaces all the associated
     * user’s profile data on the service.
     *
     * Return. This action returns a UserProfile
     * JSON data block for the updated personal profile.
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $profileId Profile ID.
     * @param [User.UserProfileUpdateData] $userProfileUpdateData Updated profile data for user profile.
     */
    public function putProfileProfileId($version, $profileId, $userProfileUpdateData)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/profile/$profileId";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/profile/$profileId";
        $body = $userProfileUpdateData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Retrieve a list of all known user roles.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-roles-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of Role
     * data blocks containing the properties of all user roles that the calling user
     * context has permission to manage.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getRoles($version)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/roles/";
=======
        $uri = "/d2l/api/lp/$version/roles/";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular user role.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-roles-(roleId)
     * @return /PSR7 (Request)
     * Return. This action returns a Role JSON data block
     * for the identified user role.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $roleId RoleID.
     */
    public function getRolesRoleId($version, $roleId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/roles/$roleId";
=======
        $uri = "/d2l/api/lp/$version/roles/$roleId";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of all the enrolled user roles the calling user can view in an org unit.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-(orgUnitId)-roles-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of Role
     * data blocks containing the properties of all user roles that the calling user
     * context has permission to view and that are currently enrolled in the
     * provided org unit.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getRolesOrgUnitId($version, $orgUnitId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/$orgUnitId/roles/";
=======
        $uri = "/d2l/api/lp/$version/$orgUnitId/roles/";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Create a new role copied from an existing role.
     * @see https://docs.valence.desire2learn.com/res/user.html#post--d2l-api-lp-(version)-roles-
     * @return /PSR7 (Request)
     * Input. Provide a RoleCopyData JSON data
     * block containing name to give to the new role. The back-end service creates a
     * new role with this name, and copies over the permissions, properties, and
     * capabiltiies of the role you identify with the deepCopyRoleId query
     * parameter.
     *
     * Return. This action returns a Role JSON data block
     * representing the newly-created copy of the role.
     *
     * @param [D2LVERSION] $version API version.
     * @param [User.RoleCopyData] $roleCopyData Properties for new role.
     * @param [D2LID] $deepCopyRoleId Source role to act as template for new role.
     */
    public function postRoles($version, $roleCopyData, $deepCopyRoleId)
    {
        $queryParrams = [
                            "deepCopyRoleId" => $deepCopyRoleId

        ];
        $queryString = http_build_query($queryParrams);
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/roles/?$queryString";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/roles/?$queryString";
        $body = $roleCopyData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Retrieve a list of known LIS Roles.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-imsconfig-roles-
     * @return /PSR7 (Request)
     * Input. Provide the URN of an LIS role with the lisUrn query parameter
     * to retrieve a known LIS role with a matching URN. If you do not provide a
     * query parameter, you will retrieve all known LIS roles.
     *
     * Return. This action returns a JSON array of LIS Role
     * data blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $lisUrn Optional. The URN of an LIS role.
     * lisUrn
     */
    public function getImsconfigRoles($version, $lisUrn = null)
    {
        $queryParrams = [
                            "lisUrn" => $lisUrn

        ];
        $queryString = http_build_query($queryParrams);
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/imsconfig/roles/?$queryString";
=======
        $uri = "/d2l/api/lp/$version/imsconfig/roles/?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve mappings between user roles and LIS roles.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-imsconfig-map-roles-
     * @return /PSR7 (Request)
     * Input. Provide the URN of an LIS role with the lisUrn query parameter
     * to retrieve only the mappings for a known LIS role with a matching
     * URN. Provide the ID of a user role with the d2lId query parameter to
     * retrieve only the mappings for the user role with a matching
     * ID. Combine the lisUrn and d2lId query parameters to retrieve only the mapping between
     * the matching user role and LIS role, if the mapping exists. If you do not provide a query
     * parameter, you will retrieve all role mappings.
     *
     * Return. This action returns a JSON array of LIS Role Mapping
     * data blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $lisUrn Optional. The URN of an LIS role.
     * lisUrn
     * @param [D2LID] $d2lId Optional. The ID of a user role.
     * d2lId
     */
    public function getImsconfigMapRoles($version, $lisUrn = null, $d2lId = null)
    {
        $queryParrams = [
                            "lisUrn" => $lisUrn,                    "d2lId" => $d2lId

        ];
        $queryString = http_build_query($queryParrams);
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/imsconfig/map/roles/?$queryString";
=======
        $uri = "/d2l/api/lp/$version/imsconfig/map/roles/?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve mapping between a user roles and LIS roles.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-imsconfig-map-roles-(roleId)
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of LIS Role Mapping
     * data blocks. An LIS Role Mapping is only included in this list if it
     * maps to the identified user role.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $roleId D2L Role ID
     * @param [D2LID] $d2lId Optional. The ID of a user role.
     * d2lId
     */
    public function getImsconfigMapRolesRoleId($version, $roleId, $d2lId = null)
    {
        $queryParrams = [
                            "d2lId" => $d2lId

        ];
        $queryString = http_build_query($queryParrams);
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/imsconfig/map/roles/$roleId?$queryString";
=======
        $uri = "/d2l/api/lp/$version/imsconfig/map/roles/$roleId?$queryString";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Map a user role to a set of LIS Roles.
     * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-imsconfig-map-roles-(roleId)
     * @return /PSR7 (Request)
     * Input. Provide a JSON array of LIS role URNs to map to the
     * identified user role. This action will map the user role identified
     * by the roleId parameter to any known LIS role with a URN that matches
     * a URN in the list. Any LIS role with a URN that does not match a URN in
     * the list will have any existing mapping to the identified user role
     * removed. All role mappings in the system that do not map the identified
     * user role will remain unchanged.
     *
     * Return. This action returns a JSON array of LIS Role Mapping
     * data blocks. An LIS Role Mapping is only included in this list if it
     * maps to the identified user role.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $roleId D2L Role ID
     * @param [string array] $mappings URNs of LIS roles.
     */
    public function putImsconfigMapRolesRoleId($version, $roleId, $mappings)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/imsconfig/map/roles/$roleId";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/imsconfig/map/roles/$roleId";
        $body = $mappings;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Unassign the global map identifier for a particular user.
     * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-globalusermapping-users-(userid)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     */
    public function deleteGlobalusermappingUsersUserId($version, $userId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/globalusermapping/users/$userid";
=======
        $uri = "/d2l/api/lp/$version/globalusermapping/users/$userid";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieves the global map identifier for a particular user.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-globalusermapping-users-(userid)
     * @return /PSR7 (Request)
     * Return. This action returns a MapIdentifier GlobalUserMapping.MapIdentifier.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     */
    public function getGlobalusermappingUsersUserId($version, $userId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/globalusermapping/users/$userid";
=======
        $uri = "/d2l/api/lp/$version/globalusermapping/users/$userid";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the global map identifier for a particular user.
     * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-globalusermapping-identifiers-(identifier)
     * @return /PSR7 (Request)
     * Return. This route returns a simple JSON block containing the D2L user identifier
     * for the identified user:
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $identifier Global map identifier.
     */
    public function getGlobalusermappingIdentifiersIdentifier($version, $identifier)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/globalusermapping/identifiers/$identifier";
=======
        $uri = "/d2l/api/lp/$version/globalusermapping/identifiers/$identifier";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Assign the global map identifier for a particular user.
     * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-globalusermapping-users-(userid)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [MapIdentifier] $mapIdentifier Global user map identifier.
     */
    public function putGlobalusermappingUsersUserId($version, $userId, $mapIdentifier)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/globalusermapping/users/$userid";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/globalusermapping/users/$userid";
        $body = $mapIdentifier;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }
}
