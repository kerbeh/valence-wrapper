<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * News service (news items, user feed) — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/news.html
 */
class NewsService
{
	/**
	 * Delete a particular news item from an org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $newsItemId News Item ID.
	 * @see https://docs.valence.desire2learn.com/res/news.html#delete--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)
	 * @return /PSR7 (Request)
	 */
	public function deleteNews($version, $orgUnitId, $newsItemId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/news/$newsItemId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Delete an attachment from an org unit’s news item.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $newsItemId News Item ID.
	 * @param [D2LID] $fileId File attachment ID.
	 * @see https://docs.valence.desire2learn.com/res/news.html#delete--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)-attachments-(fileId)
	 * @return /PSR7 (Request)
	 */
	public function deleteNewsAttachments($version, $orgUnitId, $newsItemId, $fileId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/news/$newsItemId/attachments/$fileId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Fetch the feed for the current user context.
	 *
	 * Input. This route accepts two query parameters (since and until) to
	 * specify a time window for retrieved results:
	 *
	 * Return. This action returns a JSON array of
	 * UserFeedResource data blocks. Note that
	 * each element in this list will be named appropriately for the kind of
	 * resource it envelops.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/news.html#get--d2l-api-lp-(version)-feed-
	 * @return /PSR7 (Request)
	 */
	public function getFeed($version, $since = null, $until = null)
	{
		$queryParrams = [
		                    "since" => $since,                    "until" => $until

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/feed/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of news items from an org unit for specific user.
	 *
	 * Return. This action returns a JSON array of NewsItem
	 * data blocks containing news items’ properties.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/news.html#get--d2l-api-le-(version)-(orgUnitId)-news-user-(userId)-
	 * @return /PSR7 (Request)
	 */
	public function getNewsUser($version, $orgUnitId, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/news/user/$userId/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular news item for an org unit.
	 *
	 * Return. This action returns a NewsItem JSON
	 * data block containing the news item’s properties.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $newsItemId News Item ID.
	 * @see https://docs.valence.desire2learn.com/res/news.html#get--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)
	 * @return /PSR7 (Request)
	 */
	public function getNews($version, $orgUnitId, $newsItemId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/news/$newsItemId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * version (D2LVERSION) – API version.
	 *
	 * Return. This action returns a JSON array of NewsItem
	 * data blocks containing the properties of deleted news items. Note that this
	 * action will also retrieve deleted news item that have the IsHidden
	 * property set to true.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/news.html#get--d2l-api-le-(version)-(orgUnitId)-news-deleted-
	 * @return /PSR7 (Request)
	 */
	public function getNewsDeleted($version, $orgUnitId, $global = null)
	{
		$queryParrams = [
		                    "global" => $global

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/news/deleted/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve an attachment for an org unit’s news item.
	 *
	 * Return. This action returns a file stream containing the attachment file data.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $newsItemId News Item ID.
	 * @param [D2LID] $fileId File attachment ID.
	 * @see https://docs.valence.desire2learn.com/res/news.html#get--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)-attachments-(fileId)
	 * @return /PSR7 (Request)
	 */
	public function getNewsAttachments($version, $orgUnitId, $newsItemId, $fileId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/news/$newsItemId/attachments/$fileId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a news item for an org unit.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/news.html#post--d2l-api-le-(version)-(orgUnitId)-news-
	 * @return /PSR7 (Request)
	 */
	public function postNews($version, $orgUnitId, $newsItemData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/news/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * version (D2LVERSION) – API version.
	 *
	 * Return. Returns a NewsItem JSON data block
	 * for the newly restored news item.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $newsItemId News Item ID.
	 * @see https://docs.valence.desire2learn.com/res/news.html#post--d2l-api-le-(version)-(orgUnitId)-news-deleted-(newsItemId)-restore
	 * @return /PSR7 (Request)
	 */
	public function postNewsDeletedRestore($version, $orgUnitId, $newsItemId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/news/deleted/$newsItemId/restore", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Add an attachment to a news item for an org unit.
	 *
	 * Input. Use a multipart/form-data POST body to
	 * provide the attachment data to add to the news item, with the part’s
	 * Content-Disposition header’s name field set to “file”.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $newsItemId News Item ID.
	 * @see https://docs.valence.desire2learn.com/res/news.html#post--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)-attachments-
	 * @return /PSR7 (Request)
	 */
	public function postNewsAttachments($version, $orgUnitId, $newsItemId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/news/$newsItemId/attachments/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Dismiss (hide) a news item for an org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $newsItemId News Item ID.
	 * @see https://docs.valence.desire2learn.com/res/news.html#post--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)-dismiss
	 * @return /PSR7 (Request)
	 */
	public function postNewsDismiss($version, $orgUnitId, $newsItemId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/news/$newsItemId/dismiss", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Publish a draft news item for an org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $newsItemId News Item ID.
	 * @see https://docs.valence.desire2learn.com/res/news.html#post--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)-publish
	 * @return /PSR7 (Request)
	 */
	public function postNewsPublish($version, $orgUnitId, $newsItemId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/news/$newsItemId/publish", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Restore (unhide) a news item for an org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $newsItemId News Item ID.
	 * @see https://docs.valence.desire2learn.com/res/news.html#post--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)-restore
	 * @return /PSR7 (Request)
	 */
	public function postNewsRestore($version, $orgUnitId, $newsItemId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/news/$newsItemId/restore", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update a news item for an org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $newsItemId News Item ID.
	 * @param [News.NewsItemData] $newsItemData Updated Data for news item.
	 * @see https://docs.valence.desire2learn.com/res/news.html#put--d2l-api-le-(version)-(orgUnitId)-news-(newsItemId)
	 * @return /PSR7 (Request)
	 */
	public function putNews($version, $orgUnitId, $newsItemId, $newsItemData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/news/$newsItemId", 'PUT');
		return new Request('GET', $uri);
	}
}
