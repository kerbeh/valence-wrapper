<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Locales and time zones — Developer Platform (September 2020)
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
        $uri = "/d2l/api/lp/$version/locales/$localeId";
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
        $uri = "/d2l/api/lp/$version/timezones/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the collection of all D2L languages.
     * @see https://docs.valence.desire2learn.com/res/locale.html#get--d2l-api-lp-(version)-language
     * @return /PSR7 (Request)
     * Input. You can use a bookmark query parameter as a paging offset, to
     * indicate that the service should return the segment of results immediately
     * following your bookmark.
     *
     * Return. This action returns a paged result set
     * containing the resulting Language data blocks for
     * the segment following the provided bookmark parameter (or the first segment, if
     * the parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     */
    public function getLanguage($version, $bookmark = null)
    {
        $queryParrams = [
                            "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/language?$queryString";
        return new Request('GET', $uri);
    }
}
