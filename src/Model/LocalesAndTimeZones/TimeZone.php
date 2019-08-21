<?php
namespace ValenceWrapper\Model\TimeZone;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Contains information about time zone.
 * @see https://docs.valence.desire2learn.com#TimeZones.TimeZone
 * Unique identifier for a given time zone. This identifier is the same
 * value as the unique identifier name of the time zone in the
 * tz database (for example “America/Toronto”).
 *
 * Short name for a given time zone (for example, “Toronto”).
 *
 * Full name for a given time zone (for example, “Canada - Toronto”).
 *
 * Currently observed offset from UTC (for example, “-04:00:00”).
 *
 * Offset from UTC used in this time zone when it observes standard time
 * (for example, “-05:00:00”).
 */
class TimeZone
{
	/**
	 * @param Identifier
	 * @type <string:TimeZone>
	 */
	private $Identifier;

	/**
	 * @param SimpleName
	 * @type <string>
	 */
	private $SimpleName;

	/**
	 * @param Name
	 * @type <string>
	 */
	private $Name;

	/**
	 * @param CurrentOffset
	 * @type <string:TimeSpan>
	 */
	private $CurrentOffset;

	/**
	 * @param CurrentStandardOffset
	 * @type <string:TimeSpan>
	 */
	private $CurrentStandardOffset;


	/**
	 * Constructor for TimeZone
	 */
	public function __construct(array $attributes = [])
	{
		$this->Identifier = $attributes["Identifier"];
		$this->SimpleName = $attributes["SimpleName"];
		$this->Name = $attributes["Name"];
		$this->CurrentOffset = $attributes["CurrentOffset"];
		$this->CurrentStandardOffset = $attributes["CurrentStandardOffset"];
	}
}
