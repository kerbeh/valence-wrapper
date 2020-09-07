<?php
namespace ValenceWrapper\Model\LegalPreferredNames;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * When you have permission to see the distinction between a user’s legal and
 * preferred names, you can view and set these name values with a block like
 * this:
 * @see https://docs.valence.desire2learn.com#User.LegalPreferredNames
 */
class LegalPreferredNames
{
    /**
     * @param LegalFirstName
     * @type <string>
     */
    private $LegalFirstName;

    /**
     * @param LegalLastName
     * @type <string>
     */
    private $LegalLastName;

    /**
     * @param PreferredFirstName
     * @type <string>
     */
    private $PreferredFirstName;

    /**
     * @param PreferredLastName
     * @type <string>
     */
    private $PreferredLastName;


    /**
     * Constructor for LegalPreferredNames
     */
    public function __construct(array $attributes = [])
    {
        $this->LegalFirstName = $attributes["LegalFirstName"];
        $this->LegalLastName = $attributes["LegalLastName"];
        $this->PreferredFirstName = $attributes["PreferredFirstName"];
        $this->PreferredLastName = $attributes["PreferredLastName"];
    }
}
