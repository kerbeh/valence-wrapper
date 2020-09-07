<?php
namespace ValenceWrapper\Model\Role;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * This block describes a user role that you can assign to an enrolled user.
 * @see https://docs.valence.desire2learn.com#roles
 */
class Role
{
    /**
     * @param Identifier
     * @type <string>
     */
    private $Identifier;

    /**
     * @param DisplayName
     * @type <string>
     */
    private $DisplayName;

    /**
     * @param Code
     * @type <string>
     */
    private $Code;

    /**
     * @param Description
     * @type <string>
     */
    private $Description;

    /**
     * @param RoleAlias
     * @type <string>
     */
    private $RoleAlias;

    /**
     * @param IsCascading
     * @type <boolean>
     */
    private $IsCascading;

    /**
     * @param AccessFutureCourses
     * @type <boolean>
     */
    private $AccessFutureCourses;

    /**
     * @param AccessInactiveCourses
     * @type <boolean>
     */
    private $AccessInactiveCourses;

    /**
     * @param AccessPastCourses
     * @type <boolean>
     */
    private $AccessPastCourses;

    /**
     * @param ShowInGrades
     * @type <boolean>
     */
    private $ShowInGrades;


    /**
     * Constructor for Role
     */
    public function __construct(array $attributes = [])
    {
        $this->Identifier = $attributes["Identifier"];
        $this->DisplayName = $attributes["DisplayName"];
        $this->Code = $attributes["Code"];
        $this->Description = $attributes["Description"];
        $this->RoleAlias = $attributes["RoleAlias"];
        $this->IsCascading = $attributes["IsCascading"];
        $this->AccessFutureCourses = $attributes["AccessFutureCourses"];
        $this->AccessInactiveCourses = $attributes["AccessInactiveCourses"];
        $this->AccessPastCourses = $attributes["AccessPastCourses"];
        $this->ShowInGrades = $attributes["ShowInGrades"];
    }
}
