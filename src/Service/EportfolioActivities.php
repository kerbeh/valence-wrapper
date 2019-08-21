<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * ePortfolio Activities — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/epactivity.html
 */
class EportfolioActivities
{
	/**
	 * Retrieve a combined list of all activity on EP objects owned by, or shared
	 * to, the current user.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/epactivity.html#get--d2l-api-eP-(version)-activity-
	 * @return /PSR7 (Request)
	 */
	public function getActivity($version, $bookmark = null, $filter = null, $pagesize = null, $q = null)
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
	 *
	 * Return. This action returns a JSON array of preset filter
	 * data blocks.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/epactivity.html#get--d2l-api-eP-(version)-activity-filters-
	 * @return /PSR7 (Request)
	 */
	public function getActivityFilters($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/activity/filters/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of all activity on EP objects owned by the current user.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting Activity JSON data blocks
	 * for the segment following your bookmark parameter (or the first segment if
	 * that parameter is empty or missing).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/epactivity.html#get--d2l-api-eP-(version)-activity-my-
	 * @return /PSR7 (Request)
	 */
	public function getActivityMy($version, $bookmark = null, $pagesize = null, $q = null)
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
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting Activity JSON data blocks
	 * for the segment following your bookmark parameter (or the first segment if
	 * that parameter is empty or missing).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/epactivity.html#get--d2l-api-eP-(version)-activity-shared-
	 * @return /PSR7 (Request)
	 */
	public function getActivityShared($version, $bookmark = null, $pagesize = null, $q = null)
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
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/epactivity.html#get--d2l-api-eP-(version)-newsfeed-
	 * @return /PSR7 (Request)
	 */
	public function getNewsfeed(
		$version,
		$activityPerItem = null,
		$bookmark = null,
		$filter = null,
		$pagesize = null,
		$q = null,
		$search = null
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
	 *
	 * Return. This action returns a JSON array of preset filter
	 * data blocks.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/epactivity.html#get--d2l-api-eP-(version)-newsfeed-filters-
	 * @return /PSR7 (Request)
	 */
	public function getNewsfeedFilters($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/newsfeed/filters/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a set of current EP dashboard activity.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/epactivity.html#get--d2l-api-eP-(version)-dashboard-
	 * @return /PSR7 (Request)
	 */
	public function getDashboard(
		$version,
		$activityPerItem = null,
		$bookmark = null,
		$filter = null,
		$pagesize = null,
		$q = null,
		$search = null
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
	 *
	 * Return. This action returns a JSON array of preset filter
	 * data blocks.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/epactivity.html#get--d2l-api-eP-(version)-dashboard-filters-
	 * @return /PSR7 (Request)
	 */
	public function getDashboardFilters($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/eP/$version/dashboard/filters/", 'GET');
		return new Request('GET', $uri);
	}
}
