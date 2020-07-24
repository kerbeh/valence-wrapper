<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Calendar (Events and scheduling) — Developer Platform (July 2020)
 * @see https://docs.valence.desire2learn.com/res/calendar.html
 */
class Calendar
{
    /**
     * Remove a calendar event from a particular org unit.
     * @see https://docs.valence.desire2learn.com/res/calendar.html#delete--d2l-api-le-(version)-(orgUnitId)-calendar-event-(eventId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $eventId Event ID.
     */
    public function deleteCalendarEventOrgUnitIdEventId($version, $orgUnitId, $eventId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/calendar/event/$eventId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a calendar event from a particular org unit.
     * @see https://docs.valence.desire2learn.com/res/calendar.html#get--d2l-api-le-(version)-(orgUnitId)-calendar-event-(eventId)
     * @return /PSR7 (Request)
     * Return. This action returns a EventDataInfo
     * JSON data block containing the properties of a calendar event.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $eventId Event ID.
     */
    public function getCalendarEventOrgUnitIdEventId($version, $orgUnitId, $eventId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/calendar/event/$eventId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the calendar events for the calling user, within the provided
     * org unit context.
     * @see https://docs.valence.desire2learn.com/res/calendar.html#get--d2l-api-le-(version)-(orgUnitId)-calendar-events-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of EventDataInfo
     * data blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [boolean] $associatedEventsOnly Optional. Fetch only events with an associated entity.
     * associatedEventsOnly
     */
    public function getCalendarEventsOrgUnitId($version, $orgUnitId, $associatedEventsOnly = null)
    {
        $queryParrams = [
                            "associatedEventsOnly" => $associatedEventsOnly

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/calendar/events/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the calling user’s calendar events, within a number of org units (see query parameter)
     * @see https://docs.valence.desire2learn.com/res/calendar.html#get--d2l-api-le-(version)-calendar-events-myEvents-
     * @return /PSR7 (Request)
     * Input. When calling this action, you must provide a list of org unit IDs
     * that amount to some or all of the calling user’s active enrollments. You
     * must also provide a time window within which to search (with the
     * startDateTime and endDateTime parameters).
     *
     * Return. An ObjectListPage JSON block
     * containing a list of EventDataInfo JSON
     * data blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [ASSOCIATION_T] $association Optional. Association type.
     * association
     * @param [EVENTTYPE_T] $eventType Optional. Calendar event type.
     * eventType
     * @param [CSV of D2LIDs] $orgUnitIdsCSV List of org units in which to search.
     * @param [UTCDateTime] $startDateTime Start of time window to examine.
     * @param [UTCDateTime] $endDateTime End of time window to examine.
     */
    public function getCalendarEventsMyevents($version, $association = null, $eventType = null, $orgUnitIdsCSV, $startDateTime, $endDateTime)
    {
        $queryParrams = [
                            "association" => $association,                    "eventType" => $eventType,                    "orgUnitIdsCSV" => $orgUnitIdsCSV,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/calendar/events/myEvents/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the calling user’s events for a particular org unit.
     * @see https://docs.valence.desire2learn.com/res/calendar.html#get--d2l-api-le-(version)-(orgUnitId)-calendar-events-myEvents-
     * @return /PSR7 (Request)
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
     * @param [ASSOCIATION_T] $association Optional. Association type.
     * association
     * @param [EVENTTYPE_T] $eventType Optional. Calendar event type.
     * eventType
     * @param [UTCDateTime] $startDateTime Start of time window to examine.
     * @param [UTCDateTime] $endDateTime End of time window to examine.
     */
    public function getCalendarEventsMyeventsOrgUnitId($version, $orgUnitId, $association = null, $eventType = null, $startDateTime, $endDateTime)
    {
        $queryParrams = [
                            "association" => $association,                    "eventType" => $eventType,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/calendar/events/myEvents/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a count of calling user’s calendar events, within a number of org units (see query parameter).
     * @see https://docs.valence.desire2learn.com/res/calendar.html#get--d2l-api-le-(version)-calendar-events-myEvents-itemCounts-
     * @return /PSR7 (Request)
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
     * @param [ASSOCIATION_T] $association Optional. Association type.
     * association
     * @param [EVENTTYPE_T] $eventType Optional. Calendar event type.
     * eventType
     * @param [CSV of D2LIDs] $orgUnitIdsCSV List of org units in which to search.
     * @param [UTCDateTime] $startDateTime Start of time window to examine.
     * @param [UTCDateTime] $endDateTime End of time window to examine.
     */
    public function getCalendarEventsMyeventsItemcounts($version, $association = null, $eventType = null, $orgUnitIdsCSV, $startDateTime, $endDateTime)
    {
        $queryParrams = [
                            "association" => $association,                    "eventType" => $eventType,                    "orgUnitIdsCSV" => $orgUnitIdsCSV,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/calendar/events/myEvents/itemCounts/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a count of calling user’s calendar events, within the provided org unit context.
     * @see https://docs.valence.desire2learn.com/res/calendar.html#get--d2l-api-le-(version)-(orgUnitId)-calendar-events-myEvents-itemCount
     * @return /PSR7 (Request)
     * Input. When calling this action, you can filter the data retrieved based
     * on its association type (by default, Any) or
     * whether an item’s due date falls within a provided time window.
     *
     * Return. An EventCountInfo JSON
     * data block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [ASSOCIATION_T] $association Optional. Association type.
     * association
     * @param [EVENTTYPE_T] $eventType Optional. Calendar event type.
     * eventType
     * @param [UTCDateTime] $startDateTime Start of time window to examine.
     * @param [UTCDateTime] $endDateTime End of time window to examine.
     */
    public function getCalendarEventsMyeventsItemcountOrgUnitId($version, $orgUnitId, $association = null, $eventType = null, $startDateTime, $endDateTime)
    {
        $queryParrams = [
                            "association" => $association,                    "eventType" => $eventType,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/calendar/events/myEvents/itemCount?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the calendar events for the calling user, within a number of org units.
     * @see https://docs.valence.desire2learn.com/res/calendar.html#get--d2l-api-le-(version)-(orgUnitId)-calendar-events-orgunits-
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting EventDataInfo JSON
     * data blocks for the segment following your bookmark parameter (or the first
     * segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [CSV] $orgUnitIdsCSV List of Org unit IDs.
     * @param [UTCDateTime] $startDateTime Start of time window to examine.
     * @param [UTCDateTime] $endDateTime End of time window to examine.
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     */
    public function getCalendarEventsOrgunitsOrgUnitId($version, $orgUnitId, $orgUnitIdsCSV, $startDateTime, $endDateTime, $bookmark = null)
    {
        $queryParrams = [
                            "orgUnitIdsCSV" => $orgUnitIdsCSV,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/calendar/events/orgunits/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the calendar events for a specified user’s explicit enrollments
     * within the organization containing the specified org unit.
     * @see https://docs.valence.desire2learn.com/res/calendar.html#get--d2l-api-le-(version)-(orgUnitId)-calendar-events-user-
     * @return /PSR7 (Request)
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
     * @param [D2LID] $userId User to query.
     * @param [UTCDateTime] $startDateTime Start of time window to examine.
     * @param [UTCDateTime] $endDateTime End of time window to examine.
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     */
    public function getCalendarEventsUserOrgUnitId($version, $orgUnitId, $userId, $startDateTime, $endDateTime, $bookmark = null)
    {
        $queryParrams = [
                            "userId" => $userId,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/calendar/events/user/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Create a new event.
     * @see https://docs.valence.desire2learn.com/res/calendar.html#post--d2l-api-le-(version)-(orgUnitId)-calendar-event-
     * @return /PSR7 (Request)
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
     */
    public function postCalendarEventOrgUnitId($version, $orgUnitId, $eventData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/calendar/event/";
        $body = $eventData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update the properties for a calendar event from a particular org unit.
     * @see https://docs.valence.desire2learn.com/res/calendar.html#put--d2l-api-le-(version)-(orgUnitId)-calendar-event-(eventId)
     * @return /PSR7 (Request)
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
     */
    public function putCalendarEventOrgUnitIdEventId($version, $orgUnitId, $eventId, $eventData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/calendar/event/$eventId";
        $body = $eventData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Retrieve a list of users with access to a specified calendar event.
     * @see https://docs.valence.desire2learn.com/res/calendar.html#get--d2l-api-le-(version)-(orgUnitId)-calendar-event-(eventId)-access-
     * @return /PSR7 (Request)
     * Return. This action returns a object list page
     * containing the resulting UserAccess
     * blocks for the segment following your bookmark parameter (or the first
     * segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $eventId Event ID.
     * @param [D2LID] $userId Optional. Retrieve access for a single user.
     * userId
     * @param [D2LID] $roleId Optional. Retrieve access for users with the given role.
     * roleId
     */
    public function getCalendarEventAccessOrgUnitIdEventId($version, $orgUnitId, $eventId, $userId = null, $roleId = null)
    {
        $queryParrams = [
                            "userId" => $userId,                    "roleId" => $roleId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/calendar/event/$eventId/access/?$queryString";
        return new Request('GET', $uri);
    }
}
