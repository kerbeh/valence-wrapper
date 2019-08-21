<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Calendar (Events and scheduling) — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/calendar.html
 */
class Calendar
{
	/**
	 * Remove a calendar event from a particular org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $eventId Event ID.
	 * @see https://docs.valence.desire2learn.com/res/calendar.html#delete--d2l-api-le-(version)-(orgUnitId)-calendar-event-(eventId)
	 * @return /PSR7 (Request)
	 */
	public function deleteCalendarEvent($version, $orgUnitId, $eventId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/calendar/event/$eventId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a calendar event from a particular org unit.
	 *
	 * Return. This action returns a EventDataInfo
	 * JSON data block containing the properties of a calendar event.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $eventId Event ID.
	 * @see https://docs.valence.desire2learn.com/res/calendar.html#get--d2l-api-le-(version)-(orgUnitId)-calendar-event-(eventId)
	 * @return /PSR7 (Request)
	 */
	public function getCalendarEvent($version, $orgUnitId, $eventId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/calendar/event/$eventId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the calendar events for the calling user, within the provided
	 * org unit context.
	 *
	 * Return. This action returns a JSON array of EventDataInfo
	 * data blocks.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/calendar.html#get--d2l-api-le-(version)-(orgUnitId)-calendar-events-
	 * @return /PSR7 (Request)
	 */
	public function getCalendarEvents($version, $orgUnitId, $associatedEventsOnly = null)
	{
		$queryParrams = [
		                    "associatedEventsOnly" => $associatedEventsOnly

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/calendar/events/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the calling user’s events for a particular org unit.
	 *
	 * Input. When calling this action, you can filter the data retrieved based
	 * on its association type (by default, Any) or
	 * whether an item’s due date falls within a provided time window.
	 *
	 * Return. An ObjectListPage JSON block
	 * containing a list of EventDataInfo JSON
	 * data blocks.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/calendar.html#get--d2l-api-le-(version)-(orgUnitId)-calendar-events-myEvents-
	 * @return /PSR7 (Request)
	 */
	public function getCalendarEventsMyevents(
		$version,
		$orgUnitId,
		$association = null,
		$endDateTime = null,
		$eventType = null,
		$startDateTime = null
	) {
		$queryParrams = [
		                    "association" => $association,                    "eventType" => $eventType,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/calendar/events/myEvents/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a count of calling user’s calendar events, within a number of org units (see query parameter).
	 *
	 * Input. When calling this action, you must provide a list of org unit IDs that
	 * amount to some or all of the calling user’s active enrollments. You can also
	 * filter the data retrieved based on its
	 * association type (by default, Any) or whether an
	 * event’s time falls within a provided time window.
	 *
	 * Return. An ObjectListPage JSON block
	 * containing a list of EventCountInfo JSON
	 * data blocks.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/calendar.html#get--d2l-api-le-(version)-calendar-events-myEvents-itemCounts-
	 * @return /PSR7 (Request)
	 */
	public function getCalendarEventsMyeventsItemcounts($version, $association = null, $endDateTime = null, $eventType = null, $startDateTime = null)
	{
		$queryParrams = [
		                    "association" => $association,                    "eventType" => $eventType,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/calendar/events/myEvents/itemCounts/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a count of calling user’s calendar events, within the provided org unit context.
	 *
	 * Input. When calling this action, you can filter the data retrieved based
	 * on its association type (by default, Any) or
	 * whether an item’s due date falls within a provided time window.
	 *
	 * Return. An EventCountInfo JSON
	 * data block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/calendar.html#get--d2l-api-le-(version)-(orgUnitId)-calendar-events-myEvents-itemCount
	 * @return /PSR7 (Request)
	 */
	public function getCalendarEventsMyeventsItemcount(
		$version,
		$orgUnitId,
		$association = null,
		$endDateTime = null,
		$eventType = null,
		$startDateTime = null
	) {
		$queryParrams = [
		                    "association" => $association,                    "eventType" => $eventType,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/calendar/events/myEvents/itemCount?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the calendar events for the calling user, within a number of org units.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting EventDataInfo JSON
	 * data blocks for the segment following your bookmark parameter (or the first
	 * segment if that parameter is empty or missing).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/calendar.html#get--d2l-api-le-(version)-(orgUnitId)-calendar-events-orgunits-
	 * @return /PSR7 (Request)
	 */
	public function getCalendarEventsOrgunits(
		$version,
		$orgUnitId,
		$bookmark = null,
		$endDateTime = null,
		$orgUnitIdsCSV = null,
		$startDateTime = null
	) {
		$queryParrams = [
		                    "orgUnitIdsCSV" => $orgUnitIdsCSV,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime,                    "bookmark" => $bookmark

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/calendar/events/orgunits/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the calendar events for a specified user’s explicit enrollments
	 * within the organization containing the specified org unit.
	 *
	 * Input. This action retrieves events occurring between your provided start
	 * and end times (inclusive), for all of the specified user’s explicit
	 * enrollments within the organization containing the provided org unit ID.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting EventDataInfo
	 * JSON data blocks for the segment following your bookmark parameter (or the
	 * first segment if that parameter is empty or missing).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/calendar.html#get--d2l-api-le-(version)-(orgUnitId)-calendar-events-user-
	 * @return /PSR7 (Request)
	 */
	public function getCalendarEventsUser($version, $orgUnitId, $bookmark = null, $endDateTime = null, $startDateTime = null, $userId = null)
	{
		$queryParrams = [
		                    "userId" => $userId,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime,                    "bookmark" => $bookmark

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/calendar/events/user/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new event.
	 *
	 * Input. When creating all-day events, note that the service uses only the
	 * information in the StartDay and EndDay fields and ignores any time
	 * component of the date-time value you pass in for those fields. The EndDay
	 * must be on a later date than the StartDay.
	 *
	 * Return. This action returns a EventDataInfo
	 * data block for the newly created event.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [Calendar.EventData] $eventData Properties for the new calendar event.
	 * @see https://docs.valence.desire2learn.com/res/calendar.html#post--d2l-api-le-(version)-(orgUnitId)-calendar-event-
	 * @return /PSR7 (Request)
	 */
	public function postCalendarEvent($version, $orgUnitId, $eventData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/calendar/event/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update the properties for a calendar event from a particular org unit.
	 *
	 * Input. When updating all-day events, note that the service uses only the
	 * information in the StartDay and EndDay fields and ignores any time
	 * component of the date-time value you pass in for those fields. The EndDay
	 * must be on a later date than the StartDay.
	 *
	 * Return. This action returns a EventDataInfo
	 * JSON data block containing the updated properties of the calendar event.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $eventId Event ID.
	 * @param [Calendar.EventData] $eventData Properties for the updated calendar event.
	 * @see https://docs.valence.desire2learn.com/res/calendar.html#put--d2l-api-le-(version)-(orgUnitId)-calendar-event-(eventId)
	 * @return /PSR7 (Request)
	 */
	public function putCalendarEvent($version, $orgUnitId, $eventId, $eventData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/calendar/event/$eventId", 'PUT');
		return new Request('GET', $uri);
	}
}
