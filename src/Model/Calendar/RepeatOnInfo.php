<?php
namespace ValenceWrapper\Model\RepeatOnInfo;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * This structure provides a template for the days of the week when a recurring
 * event will occur, and the days on which it will not occur. If a day property
 * is true, a repeating event will occur on that day; if a day property is
 * false, the repeating event will not occur on that day.
 * @see https://docs.valence.desire2learn.com#Calendar.RepeatOnInfo
 */
class RepeatOnInfo
{
    /**
     * @param Monday
     * @type <boolean>
     */
    private $Monday;

    /**
     * @param Tuesday
     * @type <boolean>
     */
    private $Tuesday;

    /**
     * @param Wednesday
     * @type <boolean>
     */
    private $Wednesday;

    /**
     * @param Thursday
     * @type <boolean>
     */
    private $Thursday;

    /**
     * @param Friday
     * @type <boolean>
     */
    private $Friday;

    /**
     * @param Saturday
     * @type <boolean>
     */
    private $Saturday;

    /**
     * @param Sunday
     * @type <boolean>
     */
    private $Sunday;


    /**
     * Constructor for RepeatOnInfo
     */
    public function __construct(array $attributes = [])
    {
        $this->Monday = $attributes["Monday"];
        $this->Tuesday = $attributes["Tuesday"];
        $this->Wednesday = $attributes["Wednesday"];
        $this->Thursday = $attributes["Thursday"];
        $this->Friday = $attributes["Friday"];
        $this->Saturday = $attributes["Saturday"];
        $this->Sunday = $attributes["Sunday"];
    }
}
