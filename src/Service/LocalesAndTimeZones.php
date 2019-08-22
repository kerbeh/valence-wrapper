<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Locales and time zones — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/locale.html
 */
class LocalesAndTimeZones
{
    /**
     * Retrieve the properties for a particular locale.
     * @see https://docs.valence.desire2learn.com/res/locale.html#get--d2l-api-lp-(version)-locales-(localeId)
     * @return /PSR7 (Request)
     * Return. This action returns a Locale JSON
     * block, containing information about the provided locale.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getLocales($version)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/locales/$localeId", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieves a list of available time zones.
     * @see https://docs.valence.desire2learn.com/res/locale.html#get--d2l-api-lp-(version)-timezones-
     * @return /PSR7 (Request)
     * Input. You can provide a filter string and this action will return
     * time zones where the Identifier string contains your filter string.
     *
     * Return. This action retrieves an ObjectListPage
     * JSON block containing a list of TimeZone.
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $identifier Optional. Time zone identifier to get exact match against.
     * identifier
     * @param [string] $filter Optional. String to find inside time zone Identifier fields.
     * filter
     * @param [number] $pageSize Optional. Number of entries to return in each data page.
     * pageSize
     */
    public function getTimezones($version, $identifier = null, $filter = null, $pageSize = null)
    {
        $queryParrams = [
                            "identifier" => $identifier,                    "filter" => $filter,                    "pageSize" => $pageSize

        ];
        $queryString = http_build_query($queryParrams);
        $uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/timezones/?$queryString", 'GET');
        return new Request('GET', $uri);
    }
}