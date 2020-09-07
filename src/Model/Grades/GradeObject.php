<?php
namespace ValenceWrapper\Model\GradeObject;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * A grade object describes a single point of assessment for an org unit,
 * containing the parameters within which participants will get assessed. The
 * framework supports the creation of four different types of GradeObjects, each
 * with slightly different properties.
 * @see https://docs.valence.desire2learn.com#Grade.GradeObject
 * Appears in LE’s 1.11 contract. Describes the tool object associated with this grade object.
 *
 * Appears in LE’s 1.9 contract as of LE v10.5.5. Contains the
 * URL for an API action to retrieve the grade scheme
 * associated with the grade object. Retrieving this URL will return a
 * GradeScheme object.
 *
 * Appears in LE’s unstable contract as of LE v10.5.7. The identifier used when
 * referencing the grade object as a generic learning activity. Intended for future use.
 */
class GradeObject
{
    /**
     * @param AssociatedTool
     * @type { <composite:AssociatedTool> }
     */
    private $AssociatedTool;

    /**
     * @param MaxPoints
     * @type <number:decimal>
     */
    private $MaxPoints;

    /**
     * @param CanExceedMaxPoints
     * @type <boolean>
     */
    private $CanExceedMaxPoints;

    /**
     * @param IsBonus
     * @type <boolean>
     */
    private $IsBonus;

    /**
     * @param ExcludeFromFinalGradeCalculation
     * @type <boolean>
     */
    private $ExcludeFromFinalGradeCalculation;

    /**
     * @param GradeSchemeId
     * @type <number:D2LID>
     */
    private $GradeSchemeId;

    /**
     * @param Id
     * @type <number:D2LID>
     */
    private $Id;

    /**
     * @param Name
     * @type <string>
     */
    private $Name;

    /**
     * @param ShortName
     * @type <string>
     */
    private $ShortName;

    /**
     * @param GradeType
     * @type
     */
    private $GradeType;

    /**
     * @param CategoryId
     * @type <number:D2LID>
     */
    private $CategoryId;

    /**
     * @param Description
     * @type { <composite:RichText> }
     */
    private $Description;

    /**
     * @param GradeSchemeUrl
     * @type <string:APIURL>
     */
    private $GradeSchemeUrl;

    /**
     * @param Weight
     * @type <number:decimal>
     */
    private $Weight;

    /**
     * @param ActivityId
     * @type <string:D2LID>
     */
    private $ActivityId;


    /**
     * Constructor for GradeObject
     */
    public function __construct(array $attributes = [])
    {
        $this->AssociatedTool = $attributes["AssociatedTool"];
        $this->MaxPoints = $attributes["MaxPoints"];
        $this->CanExceedMaxPoints = $attributes["CanExceedMaxPoints"];
        $this->IsBonus = $attributes["IsBonus"];
        $this->ExcludeFromFinalGradeCalculation = $attributes["ExcludeFromFinalGradeCalculation"];
        $this->GradeSchemeId = $attributes["GradeSchemeId"];
        $this->Id = $attributes["Id"];
        $this->Name = $attributes["Name"];
        $this->ShortName = $attributes["ShortName"];
        $this->GradeType = $attributes["GradeType"];
        $this->CategoryId = $attributes["CategoryId"];
        $this->Description = $attributes["Description"];
        $this->GradeSchemeUrl = $attributes["GradeSchemeUrl"];
        $this->Weight = $attributes["Weight"];
        $this->ActivityId = $attributes["ActivityId"];
    }
}
