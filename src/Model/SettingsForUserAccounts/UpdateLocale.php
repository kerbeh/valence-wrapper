<?php
namespace ValenceWrapper\Model\UpdateLocale;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When updating a user’s account setting for preferred locale, pass a
 * structure that looks like this one:
 * @see https://docs.valence.desire2learn.com#Settings.UpdateLocale
 * System identifier for a particular Locale.
 */
class UpdateLocale
{
	/**
	 * @param LocaleId
	 * @type <number:D2LID>
	 */
	private $LocaleId;


	/**
	 * Constructor for UpdateLocale
	 */
	public function __construct(array $attributes = [])
	{
		$this->LocaleId = $attributes["LocaleId"];
	}
}
