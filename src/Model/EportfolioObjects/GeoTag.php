<?php
namespace ValenceWrapper\Model\GeoTag;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * The GeoTag object gets used to encode the geo-tagging information to describe
 * the real-world location associated with an EP object.
 * @see https://docs.valence.desire2learn.com#EP.GeoTag
 */
class GeoTag
{
    /**
     * @param Latitude
     * @type <number>
     */
    private $Latitude;

    /**
     * @param Longitude
     * @type <number>
     */
    private $Longitude;

    /**
     * @param Altitude
     * @type <number>
     */
    private $Altitude;

    /**
     * @param Bearing
     * @type <number>
     */
    private $Bearing;

    /**
     * @param Precision
     * @type <number>
     */
    private $Precision;


    /**
     * Constructor for GeoTag
     */
    public function __construct(array $attributes = [])
    {
        $this->Latitude = $attributes["Latitude"];
        $this->Longitude = $attributes["Longitude"];
        $this->Altitude = $attributes["Altitude"];
        $this->Bearing = $attributes["Bearing"];
        $this->Precision = $attributes["Precision"];
    }
}
