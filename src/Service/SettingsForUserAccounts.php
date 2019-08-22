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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/accountSettings/mySettings/locale/", 'GET');
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/accountSettings/$userId/locale/", 'GET');
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/accountSettings/mySettings/locale/", 'PUT');
        return new Request('GET', $uri);
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
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/accountSettings/$userId/locale/", 'PUT');
        return new Request('GET', $uri);
    }
}
