<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Users (user data, whoami) — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/user.html
 */
class Users
{
	/**
	 * Delete a particular user.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-users-(userId)
	 * @return /PSR7 (Request)
	 */
	public function deleteUsers($version, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/users/$userId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve data for a particular user.
	 *
	 * Return. This action returns a UserData JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-users-(userId)
	 * @return /PSR7 (Request)
	 */
	public function getUsers($version, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/users/$userId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve legal and preferred names for a particular user.
	 *
	 * Return. This action returns a LegalPreferredNames JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-users-(userId)-names
	 * @return /PSR7 (Request)
	 */
	public function getUsersNames($version, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/users/$userId/names", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the current user context’s user information.
	 *
	 * Return. This action returns a WhoAmIUser
	 * JSON block for the current user context.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-users-whoami
	 * @return /PSR7 (Request)
	 */
	public function getUsersWhoami($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/users/whoami", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new user entity.
	 *
	 * Return. This action returns a UserData JSON
	 * block for the newly created user, to give you immediate access to the user’s
	 * UserId property.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [User.CreateUserData] $createUserData Data for new user.
	 * @see https://docs.valence.desire2learn.com/res/user.html#post--d2l-api-lp-(version)-users-
	 * @return /PSR7 (Request)
	 */
	public function postUsers($version, $createUserData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/users/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update data for a particular user.
	 *
	 * Input. Note that your provided block’s data replaces all the associated
	 * user’s data on the service.
	 *
	 * Return. This action returns a UserData JSON
	 * block for the user’s updated data.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @param [User.UpdateUserData] $updateUserData Updated data for user.
	 * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-users-(userId)
	 * @return /PSR7 (Request)
	 */
	public function putUsers($version, $userId, $updateUserData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/users/$userId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Update legal and preferred name data for a particular user.
	 *
	 * Input. Note that your provided block’s data replaces all the associated
	 * user’s name data on the service.
	 *
	 * Return. This action returns a LegalPreferredNames JSON block for the user’s updated name data.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @param [User.LegalPreferredNames] $legalPreferredNames Updated names data for user.
	 * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-users-(userId)-names
	 * @return /PSR7 (Request)
	 */
	public function putUsersNames($version, $userId, $legalPreferredNames)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/users/$userId/names", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular user’s activation settings.
	 *
	 * Return. This action returns a UserActivationData
	 * JSON block with the user’s current activation status.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-users-(userId)-activation
	 * @return /PSR7 (Request)
	 */
	public function getUsersActivation($version, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/users/$userId/activation", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Update a particular user’s activation settings.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @param [User.UserActivationData] $userActivationData Updated user activation settings for user.
	 * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-users-(userId)-activation
	 * @return /PSR7 (Request)
	 */
	public function putUsersActivation($version, $userId, $userActivationData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/users/$userId/activation", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Link a user to a Google Apps user account.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [User.GoogleAppsLinkingItem] $googleAppsLinkingItem Linking data for user.
	 * @see https://docs.valence.desire2learn.com/res/user.html#post--d2l-api-gae-(version)-linkuser
	 * @return /PSR7 (Request)
	 */
	public function postLinkuser($version, $googleAppsLinkingItem)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/gae/$version/linkuser", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Delete the subscription for messages of a particular type, delivered by a
	 * particular carrier.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $carrierId Notification carrier ID.
	 * @param [GUID] $messageTypeId Message type ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-notifications-instant-carriers-(carrierId)-subscriptions-(messageTypeId)
	 * @return /PSR7 (Request)
	 */
	public function deleteNotificationsInstantCarriersSubscriptions($version, $carrierId, $messageTypeId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/notifications/instant/carriers/$carrierId/subscriptions/$messageTypeId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the carrier channels for delivering notification messages.
	 *
	 * Returns. This action returns a JSON array of CarrierOutput
	 * data blocks.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-notifications-instant-carriers-
	 * @return /PSR7 (Request)
	 */
	public function getNotificationsInstantCarriers($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/notifications/instant/carriers/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the current subscriptions for notification messages.
	 *
	 * Returns. This action returns a JSON array of SubscriptionOutput
	 * data blocks.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $carrierId Notification carrier ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-notifications-instant-carriers-(carrierId)-subscriptions-
	 * @return /PSR7 (Request)
	 */
	public function getNotificationsInstantCarriersSubscriptions($version, $carrierId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/notifications/instant/carriers/$carrierId/subscriptions/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Subscribe to notification messages of a particular type, delivered by a
	 * particular carrier.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [GUID] $carrierId Notification carrier ID.
	 * @param [GUID] $messageTypeId Message type ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-notifications-instant-carriers-(carrierId)-subscriptions-(messageTypeId)
	 * @return /PSR7 (Request)
	 */
	public function putNotificationsInstantCarriersSubscriptions($version, $carrierId, $messageTypeId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/notifications/instant/carriers/$carrierId/subscriptions/$messageTypeId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the users’s notification number.
	 *
	 * Return. This action returns a NotificationNumberOutputInfo
	 * JSON block with the user’s current notification number settings.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-notifications-instant-users-(userId)-number
	 * @return /PSR7 (Request)
	 */
	public function getNotificationsInstantUsersNumber($version, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/notifications/instant/users/$userId/number", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Set the user’s notification number.
	 *
	 * Return. This action returns a NotificationNumberOutputInfo
	 * JSON block with the user’s current notification number settings. This will
	 * reset the user’s confirmation of the notification settings requiring the
	 * targeted user to complete the confirmation steps in the Learning Environment
	 * prior to receiving any SMS messages.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @param [Notifications.NotificationNumberUpdateInfo] $notificationNumberUpdateInfo User’s notification number settings.
	 * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-notifications-instant-users-(userId)-number
	 * @return /PSR7 (Request)
	 */
	public function putNotificationsInstantUsersNumber($version, $userId, $notificationNumberUpdateInfo)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/notifications/instant/users/$userId/number", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Delete the user’s notification number.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-notifications-instant-users-(userId)-number
	 * @return /PSR7 (Request)
	 */
	public function deleteNotificationsInstantUsersNumber($version, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/notifications/instant/users/$userId/number", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve users with the provided notification number.
	 *
	 * Returns. This action returns a JSON array of UserIds.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [string] $notificationNumber Notification Number.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-notifications-instant-numbers-(notificationNumber)-users
	 * @return /PSR7 (Request)
	 */
	public function getNotificationsInstantNumbersUsers($version, $notificationNumber)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/notifications/instant/numbers/$notificationNumber/users", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Delete the notification number settings for users with the provided
	 * notification number.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [string] $notificationNumber Notification Number.
	 * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-notifications-instant-numbers-(notificationNumber)
	 * @return /PSR7 (Request)
	 */
	public function deleteNotificationsInstantNumbers($version, $notificationNumber)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/notifications/instant/numbers/$notificationNumber", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Delete the notification number settings for provided user with the provided
	 * notification number.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [string] $notificationNumber Notification Number.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-notifications-instant-numbers-(notificationNumber)-users-(userId)
	 * @return /PSR7 (Request)
	 */
	public function deleteNotificationsInstantNumbersUsers($version, $notificationNumber, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/notifications/instant/numbers/$notificationNumber/users/$userId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Clear a particular user’s password.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-users-(userId)-password
	 * @return /PSR7 (Request)
	 */
	public function deleteUsersPassword($version, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/users/$userId/password", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Reset a particular user’s password.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#post--d2l-api-lp-(version)-users-(userId)-password
	 * @return /PSR7 (Request)
	 */
	public function postUsersPassword($version, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/users/$userId/password", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update a particular user’s password.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @param [User.UserPasswordData] $userPasswordData Updated password for user.
	 * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-users-(userId)-password
	 * @return /PSR7 (Request)
	 */
	public function putUsersPassword($version, $userId, $userPasswordData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/users/$userId/password", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Remove the current user’s profile image.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-profile-myProfile-image
	 * @return /PSR7 (Request)
	 */
	public function deleteProfileMyprofileImage($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/profile/myProfile/image", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Remove the profile image from a particular personal profile, by Profile ID.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [string] $profileId Profile ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-profile-(profileId)-image
	 * @return /PSR7 (Request)
	 */
	public function deleteProfileImage($version, $profileId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/profile/$profileId/image", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Remove the profile image from a particular personal profile, by User ID.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-profile-user-(userId)-image
	 * @return /PSR7 (Request)
	 */
	public function deleteProfileUserImage($version, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/profile/user/$userId/image", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve personal profile information for the current user context.
	 *
	 * Return. This action returns a UserProfile
	 * JSON data block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-profile-myProfile
	 * @return /PSR7 (Request)
	 */
	public function getProfileMyprofile($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/profile/myProfile", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the current user’s profile image.
	 *
	 * Return. This action returns a file stream containing the current user’s
	 * profile image. Note that the back-end service may return a profile image
	 * larger than your provided size.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-profile-myProfile-image
	 * @return /PSR7 (Request)
	 */
	public function getProfileMyprofileImage($version, $size = null)
	{
		$queryParrams = [
		                    "size" => $size

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/profile/myProfile/image?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular personal profile, by Profile ID.
	 *
	 * Return. This action returns the UserProfile
	 * JSON data block corresponding to your provided Profile ID.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [string] $profileId Profile ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-profile-(profileId)
	 * @return /PSR7 (Request)
	 */
	public function getProfile($version, $profileId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/profile/$profileId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular profile image, by Profile ID.
	 *
	 * Return. This action returns a file stream containing the profile image
	 * for the identified profile. Note that the back-end service may return a
	 * profile image larger than your provided size.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [string] $profileId Profile ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-profile-(profileId)-image
	 * @return /PSR7 (Request)
	 */
	public function getProfileImage($version, $profileId, $size = null)
	{
		$queryParrams = [
		                    "size" => $size

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/profile/$profileId/image?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular personal profile, by User ID.
	 *
	 * Return. This action returns the UserProfile
	 * JSON data block containing the personal profile for your provided user.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-profile-user-(userId)
	 * @return /PSR7 (Request)
	 */
	public function getProfileUser($version, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/profile/user/$userId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular profile image, by User ID.
	 *
	 * Return. This action returns a file stream containing the profile image
	 * for the identified profile. Note that the back-end service may return a
	 * profile image larger than your provided size.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-profile-user-(userId)-image
	 * @return /PSR7 (Request)
	 */
	public function getProfileUserImage($version, $userId, $size = null)
	{
		$queryParrams = [
		                    "size" => $size

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/profile/user/$userId/image?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Update the personal profile image for the current user context.
	 *
	 * Input. Provide an uploaded image file using the
	 * simple file upload process; the content-disposition
	 * part header for the file part should have the name profileImage.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/user.html#post--d2l-api-lp-(version)-profile-myProfile-image
	 * @return /PSR7 (Request)
	 */
	public function postProfileMyprofileImage($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/profile/myProfile/image", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update the profile image for the identified personal profile, by Profile ID.
	 *
	 * Input. Provide an uploaded image file using the
	 * simple file upload process; the content-disposition
	 * part header for the file part should have the name profileImage.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [string] $profileId Profile ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#post--d2l-api-lp-(version)-profile-(profileId)-image
	 * @return /PSR7 (Request)
	 */
	public function postProfileImage($version, $profileId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/profile/$profileId/image", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update the profile image for the identified personal profile, by User ID.
	 *
	 * Input. Provide an uploaded image file using the
	 * simple file upload process; the content-disposition
	 * part header for the file part should have the name profileImage.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#post--d2l-api-lp-(version)-profile-user-(userId)-image
	 * @return /PSR7 (Request)
	 */
	public function postProfileUserImage($version, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/profile/user/$userId/image", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update the personal profile data for the current user context.
	 *
	 * Input. Note that your provided block’s data replaces all the associated
	 * user’s profile data on the service.
	 *
	 * Return. This action returns a UserProfile
	 * JSON data block containing the updated personal profile data for the current user.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [User.UserProfileUpdateData] $userProfileUpdateData Updated profile data.
	 * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-profile-myProfile
	 * @return /PSR7 (Request)
	 */
	public function putProfileMyprofile($version, $userProfileUpdateData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/profile/myProfile", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Update a particular personal profile, by Profile ID.
	 *
	 * Input. Note that your provided block’s data replaces all the associated
	 * user’s profile data on the service.
	 *
	 * Return. This action returns a UserProfile
	 * JSON data block for the updated personal profile.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [string] $profileId Profile ID.
	 * @param [User.UserProfileUpdateData] $userProfileUpdateData Updated profile data for user profile.
	 * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-profile-(profileId)
	 * @return /PSR7 (Request)
	 */
	public function putProfile($version, $profileId, $userProfileUpdateData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/profile/$profileId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of all the enrolled user roles the calling user can view in an org unit.
	 *
	 * Return. This action returns a JSON array of Role
	 * data blocks containing the properties of all user roles that the calling user
	 * context has permission to view and that are currently enrolled in the
	 * provided org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-(orgUnitId)-roles-
	 * @return /PSR7 (Request)
	 */
	public function getRoles($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/$orgUnitId/roles/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new role copied from an existing role.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/user.html#post--d2l-api-lp-(version)-roles-
	 * @return /PSR7 (Request)
	 */
	public function postRoles($version, $roleCopyData, $deepCopyRoleId = null)
	{
		$queryParrams = [
		                    "deepCopyRoleId" => $deepCopyRoleId

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/roles/?$queryString", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of known LIS Roles.
	 *
	 * Input. Provide the URN of an LIS role with the lisUrn query parameter
	 * to retrieve a known LIS role with a matching URN. If you do not provide a
	 * query parameter, you will retrieve all known LIS roles.
	 *
	 * Return. This action returns a JSON array of LIS Role
	 * data blocks.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-imsconfig-roles-
	 * @return /PSR7 (Request)
	 */
	public function getImsconfigRoles($version, $lisUrn = null)
	{
		$queryParrams = [
		                    "lisUrn" => $lisUrn

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/imsconfig/roles/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve mapping between a user roles and LIS roles.
	 *
	 * Return. This action returns a JSON array of LIS Role Mapping
	 * data blocks. An LIS Role Mapping is only included in this list if it
	 * maps to the identified user role.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $roleId D2L Role ID
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-imsconfig-map-roles-(roleId)
	 * @return /PSR7 (Request)
	 */
	public function getImsconfigMapRoles($version, $roleId, $d2lId = null)
	{
		$queryParrams = [
		                    "d2lId" => $d2lId

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/imsconfig/map/roles/$roleId?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Map a user role to a set of LIS Roles.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-imsconfig-map-roles-(roleId)
	 * @return /PSR7 (Request)
	 */
	public function putImsconfigMapRoles($version, $roleId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/imsconfig/map/roles/$roleId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Unassign the global map identifier for a particular user.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#delete--d2l-api-lp-(version)-globalusermapping-users-(userid)
	 * @return /PSR7 (Request)
	 */
	public function deleteGlobalusermappingUsers($version, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/globalusermapping/users/$userid", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieves the global map identifier for a particular user.
	 *
	 * Return. This action returns a MapIdentifier GlobalUserMapping.MapIdentifier.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-globalusermapping-users-(userid)
	 * @return /PSR7 (Request)
	 */
	public function getGlobalusermappingUsers($version, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/globalusermapping/users/$userid", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the global map identifier for a particular user.
	 *
	 * Return. This route returns a simple JSON block containing the D2L user identifier
	 * for the identified user:
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $identifier Global map identifier.
	 * @see https://docs.valence.desire2learn.com/res/user.html#get--d2l-api-lp-(version)-globalusermapping-identifiers-(identifier)
	 * @return /PSR7 (Request)
	 */
	public function getGlobalusermappingIdentifiers($version, $identifier)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/globalusermapping/identifiers/$identifier", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Assign the global map identifier for a particular user.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @param [MapIdentifier] $mapIdentifier Global user map identifier.
	 * @see https://docs.valence.desire2learn.com/res/user.html#put--d2l-api-lp-(version)-globalusermapping-users-(userid)
	 * @return /PSR7 (Request)
	 */
	public function putGlobalusermappingUsers($version, $userId, $mapIdentifier)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/globalusermapping/users/$userid", 'PUT');
		return new Request('GET', $uri);
	}
}
