<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Locales and time zones — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/locale.html
 */
class LocalesAndTimeZones
{
	/**
	 * Retrieve the properties for a particular locale.
	 *
	 * Return. This action returns a Locale JSON
	 * block, containing information about the provided locale.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/locale.html#get--d2l-api-lp-(version)-locales-(localeId)
	 * @return /PSR7 (Request)
	 */
	public function getLocales($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/locales/$localeId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieves a list of available time zones.
	 *
	 * Input. You can provide a filter string and this action will return
	 * time zones where the Identifier string contains your filter string.
	 *
	 * Return. This action retrieves an ObjectListPage
	 * JSON block containing a list of TimeZone.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/locale.html#get--d2l-api-lp-(version)-timezones-
	 * @return /PSR7 (Request)
	 */
	public function getTimezones($version, $filter = null, $identifier = null, $pageSize = null)
	{
		$queryParrams = [
		                    "identifier" => $identifier,                    "filter" => $filter,                    "pageSize" => $pageSize

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/timezones/?$queryString", 'GET');
		return new Request('GET', $uri);
	}
}
