<?php
namespace ValenceWrapper\Model\PacingInfo;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * If true, dates sent on content modules will not be set on weekends.
 * @see https://docs.valence.desire2learn.com#pacing
 */
class PacingInfo
{
    /**
     * @param StartDate
     * @type <string:ISODate>
     */
    private $StartDate;

    /**
     * @param EndDate
     * @type <string:ISODate>
     */
    private $EndDate;


    /**
     * Constructor for PacingInfo
     */
    public function __construct(array $attributes = [])
    {
        $this->StartDate = $attributes["StartDate"];
        $this->EndDate = $attributes["EndDate"];
    }
}
