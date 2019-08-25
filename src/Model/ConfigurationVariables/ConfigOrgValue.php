<?php
namespace ValenceWrapper\Model\ConfigOrgValue;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Describes the configuration variable assigned for an org inside the system instance.
 * @see https://docs.valence.desire2learn.com#ConfigVariable.ConfigOrgValue
 */
class ConfigOrgValue
{
	/**
	 * @param OrgValue
	 * @type <string>
	 */
	private $OrgValue;


	/**
	 * Constructor for ConfigOrgValue
	 */
	public function __construct(array $attributes = [])
	{
		$this->OrgValue = $attributes["OrgValue"];
	}
}
