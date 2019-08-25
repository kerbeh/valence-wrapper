<?php
namespace ValenceWrapper\Model\NewsFeed;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * If you use an action that retrieves a news feed from the service, it sends
 * the data back to you in a block like this:
 * @see https://docs.valence.desire2learn.com#News.NewsFeed
 */
class NewsFeed
{
	/**
	 * @param Resource
	 * @type { <composite:News.NewsItem> }
	 */
	private $Resource;

	/**
	 * @param OrgUnitId
	 * @type <numeric:D2LID>
	 */
	private $OrgUnitId;


	/**
	 * Constructor for NewsFeed
	 */
	public function __construct(array $attributes = [])
	{
		$this->Resource = $attributes["Resource"];
		$this->OrgUnitId = $attributes["OrgUnitId"];
	}
}
