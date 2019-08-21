<?php
namespace ValenceWrapper\Model\Presentation;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * A Presentation EP object’s structure differs in three ways from the general
 * form of the EpObject data block:
 * @see https://docs.valence.desire2learn.com#EP.Presentation
 */
class Presentation
{
	/**
	 * @param BannerTitle
	 * @type <string>
	 */
	private $BannerTitle;

	/**
	 * @param BannerDescription
	 * @type <string>
	 */
	private $BannerDescription;


	/**
	 * Constructor for Presentation
	 */
	public function __construct(array $attributes = [])
	{
		$this->BannerTitle = $attributes["BannerTitle"];
		$this->BannerDescription = $attributes["BannerDescription"];
	}
}
