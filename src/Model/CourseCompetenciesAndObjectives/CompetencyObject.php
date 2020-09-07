<?php
namespace ValenceWrapper\Model\CompetencyObject;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * If your query retrieved an object with children visible within your
 * specified search depth, this will be a
 * CompetencyObjectsPage
 * JSON block containing the first breadth-sized page of those child records.
 * @see https://docs.valence.desire2learn.com#Competency.CompetencyObject
 * If your query retrieved an object with children visible within your
 * specified search depth, this will be a
 * CompetencyObjectsPage
 * JSON block containing the first breadth-sized page of those child records.
 *
 * If your query retrieved an object that has more children than would be
 * visible in a single breadth-sized page, this property is not null and
 * will contain an APIURL to fetch (with a GET) the next page of
 * child records.
 */
class CompetencyObject
{
    /**
     * @param Id
     * @type <number:D2LID>
     */
    private $Id;

    /**
     * @param ObjectTypeId
     * @type <number:COMPOBJECT_T>
     */
    private $ObjectTypeId;

    /**
     * @param Name
     * @type <string>
     */
    private $Name;

    /**
     * @param Description
     * @type <string>
     */
    private $Description;

    /**
     * @param ChildrenPage
     * @type null
     */
    private $ChildrenPage;

    /**
     * @param MoreChildren
     * @type <string:APIURL>
     */
    private $MoreChildren;


    /**
     * Constructor for CompetencyObject
     */
    public function __construct(array $attributes = [])
    {
        $this->Id = $attributes["Id"];
        $this->ObjectTypeId = $attributes["ObjectTypeId"];
        $this->Name = $attributes["Name"];
        $this->Description = $attributes["Description"];
        $this->ChildrenPage = $attributes["ChildrenPage"];
        $this->MoreChildren = $attributes["MoreChildren"];
    }
}
