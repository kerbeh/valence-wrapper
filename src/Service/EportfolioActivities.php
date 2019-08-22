<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * ePortfolio Activities — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/epactivity.html
 */
class EportfolioActivities
{
    /**
     * Retrieve a combined list of all activity on EP objects owned by, or shared
     * to, the current user.
     * @see https://docs.valence.desire2learn.com/res/epactivity.html#get--d2l-api-eP-(version)-activity-
     * @return /PSR7 (Request)
     * Input. You can apply more than one preset filter to the request by
     * providing the filter query parameter more than once (specifying each filter
     * by its Id value):
     * &filter="MyItemsActivityFilterProviderPlugin"&filter="SharedItemsActivityFilterProviderPlugin",
     * and so on. The service will then return only results that fit within your
     * list of filters.
     *
     * Return. This action returns a paged result set
     * containing the resulting Activity JSON data blocks
     * for the segment following your bookmark parameter (or the first segment if
     * that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [EP.Filter] $filter Optional. Set of preset activity filters
     * filter
     * @param [string] $q Optional. Activity query filter expression to narrow results.
     * q
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     * @param [integer] $pagesize Optional. Number of entries to retrieve in a single data set segment; if present, must be 1 or greater.
     * pagesize
     */
    public function getActivity($version, $filter = null, $q = null, $bookmark = null, $pagesize = null)
    {
        $queryParrams = [
                            "filter" => $filter,                    "q" => $q,                    "bookmark" => $bookmark,                    "pagesize" => $pagesize

        ];
        $queryString = http_build_query($queryParrams);
        $uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/activity/?$queryString", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of all available preset filters.
     * @see https://docs.valence.desire2learn.com/res/epactivity.html#get--d2l-api-eP-(version)-activity-filters-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of preset filter
     * data blocks.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getActivityFilters($version)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/activity/filters/", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of all activity on EP objects owned by the current user.
     * @see https://docs.valence.desire2learn.com/res/epactivity.html#get--d2l-api-eP-(version)-activity-my-
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting Activity JSON data blocks
     * for the segment following your bookmark parameter (or the first segment if
     * that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $q Optional. Query filter expression to narrow results.
     * q
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     * @param [integer] $pagesize Optional. Number of entries to retrieve in a single data set segment; if present, must be 1 or greater.
     * pagesize
     */
    public function getActivityMy($version, $q = null, $bookmark = null, $pagesize = null)
    {
        $queryParrams = [
                            "q" => $q,                    "bookmark" => $bookmark,                    "pagesize" => $pagesize

        ];
        $queryString = http_build_query($queryParrams);
        $uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/activity/my/?$queryString", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of all activity on EP objects shared to the current user.
     * @see https://docs.valence.desire2learn.com/res/epactivity.html#get--d2l-api-eP-(version)-activity-shared-
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting Activity JSON data blocks
     * for the segment following your bookmark parameter (or the first segment if
     * that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $q Optional. Query filter expression to narrow results.
     * q
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     * @param [integer] $pagesize Optional. Number of entries to retrieve in a single data set segment; if present, must be 1 or greater.
     * pagesize
     */
    public function getActivityShared($version, $q = null, $bookmark = null, $pagesize = null)
    {
        $queryParrams = [
                            "q" => $q,                    "bookmark" => $bookmark,                    "pagesize" => $pagesize

        ];
        $queryString = http_build_query($queryParrams);
        $uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/activity/shared/?$queryString", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * version (D2LVERSION) – API version.
     * @see https://docs.valence.desire2learn.com/res/epactivity.html#get--d2l-api-eP-(version)-newsfeed-
     * @return /PSR7 (Request)
     * Input. You can apply more than one preset filter to the request by
     * providing the filter query parameter more than once (specifying each filter
     * by its Id value):
     * &filter="MyItemsNewsfeedFilterProviderPlugin"&filter="SharedItemsNewsfeedFilterProviderPlugin",
     * and so on. The service will then return only results that fit within your
     * list of filters.
     *
     * Return. This action returns a paged result set
     * containing a list of tupled, key-value pairs where each key is an EP
     * Activity and its associated value is a string.
     *
     * @param [D2LVERSION] $version API version.
     * @param [EP.Filter] $filter Optional. Set of preset newsfeed activity filters.
     * filter
     * @param [string] $q Optional. Newsfeed query filter expression to narrow results.
     * q
     * @param [string] $search Optional. Natural search string.
     * search
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data segment.
     * bookmark
     * @param [integer] $activityPerItem Optional. Number of activities to retrieve (maximum) per dashboard item.
     * activityPerItem
     * @param [integer] $pagesize Optional number. Number of entries to retrieve in a single data set segment; if present, must be 1 or greater.
     */
    public function getNewsfeed(
        $version,
        $filter = null,
        $q = null,
        $search = null,
        $bookmark = null,
        $activityPerItem = null,
        $pagesize
    ) {
        $queryParrams = [
                            "filter" => $filter,                    "q" => $q,                    "search" => $search,                    "bookmark" => $bookmark,                    "activityPerItem" => $activityPerItem,                    "pagesize" => $pagesize

        ];
        $queryString = http_build_query($queryParrams);
        $uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/newsfeed/?$queryString", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * version (D2LVERSION) – API version.
     * @see https://docs.valence.desire2learn.com/res/epactivity.html#get--d2l-api-eP-(version)-newsfeed-filters-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of preset filter
     * data blocks.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getNewsfeedFilters($version)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/newsfeed/filters/", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a set of current EP dashboard activity.
     * @see https://docs.valence.desire2learn.com/res/epactivity.html#get--d2l-api-eP-(version)-dashboard-
     * @return /PSR7 (Request)
     * Input. You can apply more than one preset filter to the request by
     * providing the filter query parameter more than once (specifying each filter
     * by its Id value):
     * &filter="MyItemsDashboardFilterProviderPlugin"&filter="SharedItemsDashboardFilterProviderPlugin",
     * and so on. The service will then return only results that fit within your
     * list of filters.
     *
     * Return. This action returns a paged result set
     * containing a list of tupled, key-value pairs where each key is an EP
     * Activity and its associated value is a string.
     *
     * @param [D2LVERSION] $version API version.
     * @param [EP.Filter] $filter Optional. Set of preset dashboard activity filters.
     * filter
     * @param [string] $q Optional. Activity query filter expression to narrow results.
     * q
     * @param [string] $search Optional. Natural search string.
     * search
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data segment.
     * bookmark
     * @param [integer] $activityPerItem Optional. Number of activities to retrieve (maximum) per dashboard item.
     * activityPerItem
     * @param [integer] $pagesize Optional number. Number of entries to retrieve in a single data set segment; if present, must be 1 or greater.
     */
    public function getDashboard(
        $version,
        $filter = null,
        $q = null,
        $search = null,
        $bookmark = null,
        $activityPerItem = null,
        $pagesize
    ) {
        $queryParrams = [
                            "filter" => $filter,                    "q" => $q,                    "search" => $search,                    "bookmark" => $bookmark,                    "activityPerItem" => $activityPerItem,                    "pagesize" => $pagesize

        ];
        $queryString = http_build_query($queryParrams);
        $uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/dashboard/?$queryString", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of all preset filters available to the dashboard.
     * @see https://docs.valence.desire2learn.com/res/epactivity.html#get--d2l-api-eP-(version)-dashboard-filters-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of preset filter
     * data blocks.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getDashboardFilters($version)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/dashboard/filters/", 'GET');
        return new Request('GET', $uri);
    }
}
