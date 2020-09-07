<?php
namespace ValenceWrapper\Model\EntityCompletionDate;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * In each dropbox, each entity (user or group) will have an associated
 * completion date value, a date represents a complete status, a null value represents incomplete:
 * @see https://docs.valence.desire2learn.com#Dropbox.EntityCompletionDate
 */
class EntityCompletionDate
{
    /**
     * @param CompletionDate
     * @type <string:UTCDateTime>
     */
    private $CompletionDate;


    /**
     * Constructor for EntityCompletionDate
     */
    public function __construct(array $attributes = [])
    {
        $this->CompletionDate = $attributes["CompletionDate"];
    }
}
