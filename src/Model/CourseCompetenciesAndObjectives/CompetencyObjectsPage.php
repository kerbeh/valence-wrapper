<?php
namespace ValenceWrapper\Model\CompetencyObjectsPage;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * If more objects exist beyond the breadth and depth of this current page
 * of results, then this property is not null and will contain an
 * APIURL to fetch (with a GET) the next page of sibling records.
 * @see https://docs.valence.desire2learn.com#Competency.CompetencyObjectsPage
 * If more objects exist beyond the breadth and depth of this current page
 * of results, then this property is not null and will contain an
 * APIURL to fetch (with a GET) the next page of sibling records.
 */
class CompetencyObjectsPage
{
    /**
     * @param Next
     * @type <string:APIURL>
     */
    private $Next;


    /**
     * Constructor for CompetencyObjectsPage
     */
    public function __construct(array $attributes = [])
    {
        $this->Next = $attributes["Next"];
    }
}
