<?php
namespace ValenceWrapper\Model\CarrierOutput;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * This block contains identifying data for a carrying channel for delivering
 * notification messages to the user (for example, email, SMS, Campus Life, and
 * so forth).
 * @see https://docs.valence.desire2learn.com#notifications
 */
class CarrierOutput
{
    /**
     * @param CarrierId
     * @type <string:GUID>
     */
    private $CarrierId;

    /**
     * @param DisplayName
     * @type <string>
     */
    private $DisplayName;


    /**
     * Constructor for CarrierOutput
     */
    public function __construct(array $attributes = [])
    {
        $this->CarrierId = $attributes["CarrierId"];
        $this->DisplayName = $attributes["DisplayName"];
    }
}
