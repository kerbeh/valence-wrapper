<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Settings for user accounts — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/settings.html
 */
class SettingsForUserAccounts
{
    /**
     * Retrieve the current user’s locale account settings.
     * @see https://docs.valence.desire2learn.com/res/settings.html#get--d2l-api-lp-(version)-accountSettings-mySettings-locale-
     * @return /PSR7 (Request)
     * Return. This action returns a Locale JSON
     * block, containing information about the current user’s currently set locale.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getAccountsettingsMysettingsLocale($version)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/accountSettings/mySettings/locale/";
=======
        $uri = "/d2l/api/lp/$version/accountSettings/mySettings/locale/";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the locale account settings for a particular user.
     * @see https://docs.valence.desire2learn.com/res/settings.html#get--d2l-api-lp-(version)-accountSettings-(userId)-locale-
     * @return /PSR7 (Request)
     * Return. This action returns a Locale JSON
     * block, containing information about the user’s currently set locale.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     */
    public function getAccountsettingsLocaleUserId($version, $userId)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/accountSettings/$userId/locale/";
=======
        $uri = "/d2l/api/lp/$version/accountSettings/$userId/locale/";
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
        return new Request('GET', $uri);
    }


    /**
     * Update the current user’s locale account settings.
     * @see https://docs.valence.desire2learn.com/res/settings.html#put--d2l-api-lp-(version)-accountSettings-mySettings-locale-
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [Settings.UpdateLocale] $updateSettings Update settings for user.
     */
    public function putAccountsettingsMysettingsLocale($version, $updateSettings)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/accountSettings/mySettings/locale/";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/accountSettings/mySettings/locale/";
        $body = $updateSettings;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }


    /**
     * Update the locale account settings for a particular user.
     * @see https://docs.valence.desire2learn.com/res/settings.html#put--d2l-api-lp-(version)-accountSettings-(userId)-locale-
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [Settings.UpdateLocale] $updateSettings Update settings for user.
     */
    public function putAccountsettingsLocaleUserId($version, $userId, $updateSettings)
    {
<<<<<<< HEAD
        $uri = "d2l/api/lp/$version/accountSettings/$userId/locale/";
        return new Request('GET', $uri);
=======
        $uri = "/d2l/api/lp/$version/accountSettings/$userId/locale/";
        $body = $updateSettings;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
>>>>>>> 0535b8d255b2df503137b1546ebffafde5cc19ad
    }
}
