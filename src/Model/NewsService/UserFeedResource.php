<?php
namespace ValenceWrapper\Model\UserFeedResource;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * The feed service returns generically formed blocks that wrap around particular
 * kinds of resources. For example, a UserFeedResourceNewsItem variant of the
 * generic container contains a Resource composite that’s actually a
 * NewsItem structure.
 * @see https://docs.valence.desire2learn.com#Feed.UserFeedResource
 */
class UserFeedResource
{
	/**
	 * @param Resource
	 * @type { <composite> }
	 */
	private $Resource;

	/**
	 * @param Type
	 * @type <string>
	 */
	private $Type;

	/**
	 * @param MessageMetaData
	 * @type {
	 */
	private $MessageMetaData;

	/**
	 * @param Identifier
	 * @type <string>
	 */
	private $Identifier;

	/**
	 * @param Title
	 * @type <string>
	 */
	private $Title;

	/**
	 * @param Summary
	 * @type { <composite:RichText> }
	 */
	private $Summary;

	/**
	 * @param Date
	 * @type <string:UTCDateTime>
	 */
	private $Date;

	/**
	 * @param ApiViewUrl
	 * @type <string:URL>
	 */
	private $ApiViewUrl;

	/**
	 * @param WebViewUrl
	 * @type <string:URL>
	 */
	private $WebViewUrl;


	/**
	 * Constructor for UserFeedResource
	 */
	public function __construct(array $attributes = [])
	{
		$this->Resource = $attributes["Resource"];
		$this->Type = $attributes["Type"];
		$this->MessageMetaData = $attributes["MessageMetaData"];
		$this->Identifier = $attributes["Identifier"];
		$this->Title = $attributes["Title"];
		$this->Summary = $attributes["Summary"];
		$this->Date = $attributes["Date"];
		$this->ApiViewUrl = $attributes["ApiViewUrl"];
		$this->WebViewUrl = $attributes["WebViewUrl"];
	}
}
