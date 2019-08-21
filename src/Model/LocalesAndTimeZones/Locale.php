<?php
namespace ValenceWrapper\Model\Locale;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * @see https://docs.valence.desire2learn.com#Locales.Locale
 */
class Locale
{
	/**
	 * @param LocaleId
	 * @type <number:D2LID>
	 */
	private $LocaleId;

	/**
	 * @param LocaleName
	 * @type <string>
	 */
	private $LocaleName;

	/**
	 * @param IsDefault
	 * @type <boolean>
	 */
	private $IsDefault;

	/**
	 * @param CultureCode
	 * @type <string>
	 */
	private $CultureCode;


	/**
	 * Constructor for Locale
	 */
	public function __construct(array $attributes = [])
	{
		$this->LocaleId = $attributes["LocaleId"];
		$this->LocaleName = $attributes["LocaleName"];
		$this->IsDefault = $attributes["IsDefault"];
		$this->CultureCode = $attributes["CultureCode"];
	}
}
