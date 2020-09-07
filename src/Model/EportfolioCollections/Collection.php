<?php
namespace ValenceWrapper\Model\Collection;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * A Collection EP object’s structure differs in two ways from the general
 * form of the EpObject data block:
 * @see https://docs.valence.desire2learn.com#EP.Collection
 */
class Collection
{
    /**
     * @param ItemsCount
     * @type <number>
     */
    private $ItemsCount;


    /**
     * Constructor for Collection
     */
    public function __construct(array $attributes = [])
    {
        $this->ItemsCount = $attributes["ItemsCount"];
    }
}
