<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Course updates for end users — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/updates.html
 */
class CourseUpdatesForEndUsers
{
	/**
	 * Retrieve numbers of updates for the current user across several org units.
	 *
	 * Input. When calling this action, you must provide a list of org unit
	 * IDs that amount to some or all of the calling user’s active enrollments.
	 * You may use the updateTypesCSV query parameter to retrieve update
	 * information for a specific list of one or more types; if you don’t use this query parameter,
	 * the results include values for all update types.
	 *
	 * Return. This action returns an ObjectListPage JSON
	 * block containing a list of OrgUnitUpdates.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/updates.html#get--d2l-api-le-(version)-updates-myUpdates-
	 * @return /PSR7 (Request)
	 */
	public function getUpdatesMyupdates($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/updates/myUpdates/", 'GET');
		return new Request('GET', $uri);
	}
}
