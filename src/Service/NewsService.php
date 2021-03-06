<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * News service (news items, user feed) — Developer Platform (September 2020)
 * @see https://docs.valence.desire2learn.com/res/news.html
 */
class NewsService
{
    /**
     * Delete a particular news item from an org unit.
     * @see https://docs.valence.desire2learn.com/res/news.html#delete--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $newsItemId News Item ID.
     */
    public function deleteNewsOrgUnitIdNewsItemId($version, $orgUnitId, $newsItemId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/news/$newsItemId";
        return new Request('DELETE', $uri);
    }


    /**
     * Delete an attachment from an org unit’s news item.
     * @see https://docs.valence.desire2learn.com/res/news.html#delete--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)-attachments-(fileId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $newsItemId News Item ID.
     * @param [D2LID] $fileId File attachment ID.
     */
    public function deleteNewsAttachmentsOrgUnitIdNewsItemIdFileId($version, $orgUnitId, $newsItemId, $fileId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/news/$newsItemId/attachments/$fileId";
        return new Request('DELETE', $uri);
    }


    /**
     * Fetch the feed for the current user context.
     * @see https://docs.valence.desire2learn.com/res/news.html#get--d2l-api-lp-(version)-feed-
     * @return /PSR7 (Request)
     * Input. This route accepts two query parameters (since and until) to
     * specify a time window for retrieved results:
     *
     * Return. This action returns a JSON array of
     * UserFeedResource data blocks. Note that
     * each element in this list will be named appropriately for the kind of
     * resource it envelopes.
     *
     * @param [D2LVERSION] $version API version.
     * @param [UTCDateTime] $since Optional. Earliest publication time to retrieve.
     * since
     * @param [UTCDateTime] $until Optional. Latest publication time to retrieve.
     * until
     */
    public function getFeed($version, $since = null, $until = null)
    {
        $queryParrams = [
                            "since" => $since,                    "until" => $until

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/feed/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of news items for specific user.
     * @see https://docs.valence.desire2learn.com/res/news.html#get--d2l-api-le-(version)-news-user-(userId)-
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting NewsFeed
     * blocks for the segment following your bookmark parameter (or the first
     * segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [UTCDateTime] $since Optional. Earliest publication time to retrieve.
     * since
     * @param [UTCDateTime] $until Optional. Latest publication time to retrieve.
     * until
     */
    public function getNewsUserUserId($version, $userId, $since = null, $until = null)
    {
        $queryParrams = [
                            "since" => $since,                    "until" => $until

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/news/user/$userId/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of news items for an org unit.
     * @see https://docs.valence.desire2learn.com/res/news.html#get--d2l-api-le-(version)-(orgUnitId)-news-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of NewsItem
     * data blocks containing news items’ properties.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [UTCDateTime] $since Optional. Earliest publication time to retrieve.
     * since
     */
    public function getNewsOrgUnitId($version, $orgUnitId, $since = null)
    {
        $queryParrams = [
                            "since" => $since

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/news/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * version (D2LVERSION) – API version.
     * @see https://docs.valence.desire2learn.com/res/news.html#get--d2l-api-le-(version)-(orgUnitId)-news-deleted-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of NewsItem
     * data blocks containing the properties of deleted news items. Note that this
     * action will also retrieve deleted news item that have the IsHidden
     * property set to true.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [boolean] $global Optional. Show only global news items if present and true; otherwise, show no global items.
     * global
     */
    public function getNewsDeletedOrgUnitId($version, $orgUnitId, $global = null)
    {
        $queryParrams = [
                            "global" => $global

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/news/deleted/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of news items from an org unit for specific user.
     * @see https://docs.valence.desire2learn.com/res/news.html#get--d2l-api-le-(version)-(orgUnitId)-news-user-(userId)-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of NewsItem
     * data blocks containing news items’ properties.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $userId User ID.
     */
    public function getNewsUserOrgUnitIdUserId($version, $orgUnitId, $userId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/news/user/$userId/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular news item for an org unit.
     * @see https://docs.valence.desire2learn.com/res/news.html#get--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)
     * @return /PSR7 (Request)
     * Return. This action returns a NewsItem JSON
     * data block containing the news item’s properties.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $newsItemId News Item ID.
     */
    public function getNewsOrgUnitIdNewsItemId($version, $orgUnitId, $newsItemId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/news/$newsItemId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of users with access to a specified news item.
     * @see https://docs.valence.desire2learn.com/res/news.html#get--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)-access-
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set containing the resulting UserAccess blocks for the segment following your bookmark
     * parameter (or the first segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $newsItemId News Item ID.
     * @param [D2LID] $userId Optional. Retrieve access for a single user.
     * userId
     * @param [D2LID] $roleId Optional. Retrieve access for users with the given role.
     * roleId
     */
    public function getNewsAccessOrgUnitIdNewsItemId($version, $orgUnitId, $newsItemId, $userId = null, $roleId = null)
    {
        $queryParrams = [
                            "userId" => $userId,                    "roleId" => $roleId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/news/$newsItemId/access/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve an attachment for an org unit’s news item.
     * @see https://docs.valence.desire2learn.com/res/news.html#get--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)-attachments-(fileId)
     * @return /PSR7 (Request)
     * Return. This action returns a file stream containing the attachment file data.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $newsItemId News Item ID.
     * @param [D2LID] $fileId File attachment ID.
     */
    public function getNewsAttachmentsOrgUnitIdNewsItemIdFileId($version, $orgUnitId, $newsItemId, $fileId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/news/$newsItemId/attachments/$fileId";
        return new Request('GET', $uri);
    }


    /**
     * Create a news item for an org unit.
     * @see https://docs.valence.desire2learn.com/res/news.html#post--d2l-api-le-(version)-(orgUnitId)-news-
     * @return /PSR7 (Request)
     * Input. Provide a multipart/mixed POST body: the
     * first part must be the news item data JSON; other parts may include file
     * attachments to go along with the news item.
     *
     * Return. Returns a NewsItem JSON data block
     * for the newly created news item.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [News.NewsItemData] $newsItemData Data for new news item (see input description).
     */
    public function postNewsOrgUnitId($version, $orgUnitId, $newsItemData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/news/";
        $body = $newsItemData;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * version (D2LVERSION) – API version.
     * @see https://docs.valence.desire2learn.com/res/news.html#post--d2l-api-le-(version)-(orgUnitId)-news-deleted-(newsItemId)-restore
     * @return /PSR7 (Request)
     * Return. Returns a NewsItem JSON data block
     * for the newly restored news item.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $newsItemId News Item ID.
     */
    public function postNewsDeletedRestoreOrgUnitIdNewsItemId($version, $orgUnitId, $newsItemId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/news/deleted/$newsItemId/restore";
        return new Request('POST', $uri);
    }


    /**
     * Add an attachment to a news item for an org unit.
     * @see https://docs.valence.desire2learn.com/res/news.html#post--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)-attachments-
     * @return /PSR7 (Request)
     * Input. Use a multipart/form-data POST body to
     * provide the attachment data to add to the news item, with the part’s
     * Content-Disposition header’s name field set to “file”.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $newsItemId News Item ID.
     */
    public function postNewsAttachmentsOrgUnitIdNewsItemId($version, $orgUnitId, $newsItemId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/news/$newsItemId/attachments/";
        return new Request('POST', $uri);
    }


    /**
     * Dismiss (hide) a news item for an org unit.
     * @see https://docs.valence.desire2learn.com/res/news.html#post--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)-dismiss
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $newsItemId News Item ID.
     */
    public function postNewsDismissOrgUnitIdNewsItemId($version, $orgUnitId, $newsItemId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/news/$newsItemId/dismiss";
        return new Request('POST', $uri);
    }


    /**
     * Publish a draft news item for an org unit.
     * @see https://docs.valence.desire2learn.com/res/news.html#post--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)-publish
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $newsItemId News Item ID.
     */
    public function postNewsPublishOrgUnitIdNewsItemId($version, $orgUnitId, $newsItemId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/news/$newsItemId/publish";
        return new Request('POST', $uri);
    }


    /**
     * Restore (unhide) a news item for an org unit.
     * @see https://docs.valence.desire2learn.com/res/news.html#post--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)-restore
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $newsItemId News Item ID.
     */
    public function postNewsRestoreOrgUnitIdNewsItemId($version, $orgUnitId, $newsItemId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/news/$newsItemId/restore";
        return new Request('POST', $uri);
    }


    /**
     * Update a news item for an org unit.
     * @see https://docs.valence.desire2learn.com/res/news.html#put--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $newsItemId News Item ID.
     * @param [News.NewsItemData] $newsItemData Updated Data for news item.
     */
    public function putNewsOrgUnitIdNewsItemId($version, $orgUnitId, $newsItemId, $newsItemData)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/news/$newsItemId";
        $body = $newsItemData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }
}
