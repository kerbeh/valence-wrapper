<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Settings for user accounts — Developer Platform (September 2020)
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
        $uri = "/d2l/api/lp/$version/accountSettings/mySettings/locale/";
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
        $uri = "/d2l/api/lp/$version/accountSettings/$userId/locale/";
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
        $uri = "/d2l/api/lp/$version/accountSettings/mySettings/locale/";
        $body = $updateSettings;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
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
        $uri = "/d2l/api/lp/$version/accountSettings/$userId/locale/";
        $body = $updateSettings;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Delete custom widget data for an org unit.
     * @see https://docs.valence.desire2learn.com/res/settings.html#delete--d2l-api-lp-(version)-(orgUnitId)-widgetdata-(customWidgetId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $customWidgetId Custom widget ID.
     */
    public function deleteWidgetdataOrgUnitIdCustomWidgetId($version, $orgUnitId, $customWidgetId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/widgetdata/$customWidgetId";
        return new Request('GET', $uri);
    }


    /**
     * Delete custom widget data for an org unit tied to the current user.
     * @see https://docs.valence.desire2learn.com/res/settings.html#delete--d2l-api-lp-(version)-(orgUnitId)-widgetdata-(customWidgetId)-mydata
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $customWidgetId Custom widget ID.
     */
    public function deleteWidgetdataMydataOrgUnitIdCustomWidgetId($version, $orgUnitId, $customWidgetId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/widgetdata/$customWidgetId/mydata";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve custom widget data for an org unit.
     * @see https://docs.valence.desire2learn.com/res/settings.html#get--d2l-api-lp-(version)-(orgUnitId)-widgetdata-(customWidgetId)
     * @return /PSR7 (Request)
     * Return. This action returns a WidgetData JSON block
     * showing the widget data for the specified custom widget.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $customWidgetId Custom widget ID.
     */
    public function getWidgetdataOrgUnitIdCustomWidgetId($version, $orgUnitId, $customWidgetId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/widgetdata/$customWidgetId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve custom widget data for an org unit tied to the current user.
     * @see https://docs.valence.desire2learn.com/res/settings.html#get--d2l-api-lp-(version)-(orgUnitId)-widgetdata-(customWidgetId)-mydata
     * @return /PSR7 (Request)
     * Return. This action returns a WidgetData JSON block
     * showing the widget data for the specified custom widget.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $customWidgetId Custom widget ID.
     */
    public function getWidgetdataMydataOrgUnitIdCustomWidgetId($version, $orgUnitId, $customWidgetId)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/widgetdata/$customWidgetId/mydata";
        return new Request('GET', $uri);
    }


    /**
     * Update custom widget data for an org unit.
     * @see https://docs.valence.desire2learn.com/res/settings.html#put--d2l-api-lp-(version)-(orgUnitId)-widgetdata-(customWidgetId)
     * @return /PSR7 (Request)
     * Return. This action returns a WidgetData JSON block
     * showing the widget data for the updated custom widget.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $customWidgetId Custom widget ID.
     * @param [Settings.WidgetData] $customWidgetData updated widget JSON config data.
     */
    public function putWidgetdataOrgUnitIdCustomWidgetId($version, $orgUnitId, $customWidgetId, $customWidgetData)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/widgetdata/$customWidgetId";
        $body = $customWidgetData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update custom widget data for an org unit tied to the current user.
     * @see https://docs.valence.desire2learn.com/res/settings.html#put--d2l-api-lp-(version)-(orgUnitId)-widgetdata-(customWidgetId)-mydata
     * @return /PSR7 (Request)
     * Return. This action returns a WidgetData JSON block
     * showing the widget data for the updated custom widget.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $customWidgetId Custom widget ID.
     * @param [Settings.WidgetData] $customWidgetData updated widget JSON config data.
     */
    public function putWidgetdataMydataOrgUnitIdCustomWidgetId($version, $orgUnitId, $customWidgetId, $customWidgetData)
    {
        $uri = "/d2l/api/lp/$version/$orgUnitId/widgetdata/$customWidgetId/mydata";
        $body = $customWidgetData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }
}
