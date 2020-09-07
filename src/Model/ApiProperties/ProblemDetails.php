<?php
namespace ValenceWrapper\Model\ProblemDetails;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * In some situations, when problems occur, the back-end service cannot
 * return enough information using standard HTTP response codes alone. In
 * these cases, the service may report errors using a JSON structure like
 * this:
 * @see https://docs.valence.desire2learn.com#error-reporting
 */
class ProblemDetails
{
    /**
     * @param type
     * @type <string>
     */
    private $Type;

    /**
     * @param status
     * @type <number>
     */
    private $Status;

    /**
     * @param title
     * @type <string>
     */
    private $Title;

    /**
     * @param detail
     * @type <string>
     */
    private $Detail;

    /**
     * @param instance
     * @type <string>
     */
    private $Instance;


    /**
     * Constructor for ProblemDetails
     */
    public function __construct(array $attributes = [])
    {
        $this->type = $attributes["type"];
        $this->status = $attributes["status"];
        $this->title = $attributes["title"];
        $this->detail = $attributes["detail"];
        $this->instance = $attributes["instance"];
    }
}
